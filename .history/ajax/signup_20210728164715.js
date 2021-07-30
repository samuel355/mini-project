
$(document).ready(function() {
	$('#signup-form').on('submit', function(e) {
		e.preventDefault();

		var data = new FormData(this);
		data.append('action', 'register');
		var url = "./php/signup.php";

		$.ajax({
			type: 'POST',
			url: url,
			data: data,
			dataType: 'JSON',
			processData: false,
			contentType: false,

			complete: function() {
                $('#process')
                $('#process').fadeOut('slow');
                $('#submit').fadeIn('slow');
                
                $('#signin-form')[0].reset();
            },
            success: function(success) {
                $('#process').fadeOut('slow');
                $('#submit').fadeIn('slow');
                $('#alert').hide('slow');
                $('#signin-form')[0].reset();
                $('#done').html(success);
                $('#succ').show();
                console.log(success);
            },
            error: function(error) {
                // 	s
                if (error) {
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