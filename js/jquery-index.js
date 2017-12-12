$(document).ready(function() {
	$('#sign_up_button').click(function(e) {
		location = 'Sign_up/';
		e.preventDefault();
	});
	
	$('#login').submit(function(){
		var formdata = $(this).serialize();
		$.post('php/login.php',formdata,processData);
		function processData(data) {
		data = data.trim();
		 if(data == 'failed') {
			if(!$('#fail').length)
				$('.main').prepend('<p id="fail">Incorrect login information. Please try again</p>');
		 }
		 else if(data == 'blocked') {
			if(!$('#fail_active').length)
				$('.main').prepend('<p id="fail_active">Your account has not yet been activated. Please try later</p>');
		 }
		 else if(data == 'Lecturer') {
			location = location + 'Lecturer';
		 }
		 else if(data == 'Home') {
			location = location + 'Home';
		 }
		 else if(data == 'Admin') {
			location = location + 'Admin';
		 }
		}
		return false;
	});

});