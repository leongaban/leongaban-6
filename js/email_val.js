$(function(){

	$('#submit').click(function(){
	
		var formData = {
			name: $('#name').val(),
			email: $('#email').val(),
			comments: $('#comments').val()
		};
		
		$.ajax({
			url: "includes/send.php",
			type: 'POST',
			data: formData,
			success: function(status) {
				if (status == 'success') {
					$('#status').html('<h3 class="success">Thank You!</h3>')
								.hide().fadeIn(2000);
				} else {
					$('#status').html('<p class="error">Both name and email are required fields.</p>')
								.hide().fadeIn(2000);
				}
			} // end send contact form
		});  //end ajax
		
		return false;
	});  //end send contact form click
});
