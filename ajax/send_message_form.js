
$(document).ready(function() {
	$('#message-form').on('submit', function(e) {
		e.preventDefault();

		var data = new FormData(this);
		var url = "./php/send_message.php";

		$.ajax({
			type: 'POST',
			url: url,
			data: data,
			dataType: 'JSON',
			processData: false,
			contentType: false,

			complete: function() {
                $('#process').show();
                $('#process').fadeOut('slow');
                $('#submit').fadeIn('slow');
            },
            success: function(success) {
                $('#process').fadeOut('slow');
                $('#submit').fadeIn('slow');
                $('#alert').hide('slow');
                $('#message-form')[0].reset();
                $('#done').html(success);
                $('#succ').show();
                console.log(success);
            },
            error: function(error) {
                // 	s
                if (error) {
                    $('#alert').fadeIn('slow');
                    $('#succ').fadeOut('slow');
                    $('#messages').html(error.responseText);
                    $('#submit').fadeIn('slow');
                    $('#alert').show();
                    console.log(error.message);
                }

            }
		})
	})
})