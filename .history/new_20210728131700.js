$(document).ready(function() {
	$('#signup-form').on('submit', function(e) {
		e.preventDefault();
		var data = new FormData($(this)[0]);
		data.append('action', 'register');
		var form = $(this);
		var url = "./new.php";

		$.ajax({
			type: 'POST',
			url: url,
			data: data,
			dataType: 'JSON',
			processData: false,
			contentType: false,
			error: function(xhr, textStatus, errorThrown){
				console.log(xhr.responseText);
			},
			success: function(response){
				form.find(':submit').attr('disabled', false);
				if(response.error_status = 1){
					form.find('small').text('');
					//if validation error exists
					for (var key in response){
						var errorContainer = form.find(`#${key}Error`);
						if(errorContainer.length !==0){
							errorContainer.html(response[key]);
						}
					}
				}
				if(response.status ==1){
					form.trigger('reset');
					form.find('small').text('')
					//handling success response

					toastr.success(response.msg);
					
				}
				else if (response.status == 0){
					//handling failure response

					toastr.success(response.msg);
				}
			}
		})
	})
})