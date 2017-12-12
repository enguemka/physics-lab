$(document).ready(function() {

	$('#af-form').submit(function() {
		
		var reg = $('#input-reg').val();
		var pass = $('#input-passwrd').val();
		var pass_same = $('#input-passwrd2').val();
		var phone = $('#input-phone').val();
		var test= 1;
		
		if(reg.search(/^\d\dS\d\d\d$/) != 0){
			$('#input-reg').css('border-color', 'red');
			$('#input-reg').attr('placeholder', 'respect the format: XXSXXX');
			$('label[for=input-reg]').append('*').css('color','red');
			test = 0;
		}
		else {
			$('#input-reg').css('border-color', '#ddd');
			$('#input-reg').attr('placeholder', 'respect the format: XXSXXX');
			$('label[for=input-reg]').val('Registration Number').css('color','#888');
		}
		if(phone.search(/^\d\d-\d\d-\d\d-\d\d$/) != 0){
			$('#input-phone').css('border-color', 'red');
			$('#input-phone').attr('placeholder', 'respect the format: XX-XX-XX-XX');
			$('label[for=input-phone]').append('*').css('color','red');
			test = 0;
		}
		else {
			$('#input-phone').css('border-color', '#ddd');
			$('#input-phone').attr('placeholder', 'respect the format: XX-XX-XX-XX');
			$('label[for=input-phone]').val('Phone Number').css('color','#888');
		}
		
		if(pass !== pass_same){
			$('#input-passwrd').css('border-color', 'red');
			$('label[for=input-passwrd]').append('*').css('color','red');
			test = 0;
		}
		else {
			$('#input-passwrd').css('border-color', '#ddd');
			$('label[for=input-passwrd]').val('password').css('color','#888');
		}
		
		if(test == 1) {
			var form_data = $(this).serialize();
			function processData(data) {
			 data = data.trim();
			 alert(data);
			 if(data == 'repeated') {
				if(!$('#fail').length)
					$('#sign_up_box').prepend('<p id="fail">This email address already exists. Please try again with another</p>');
			 }
			 else
				location = '../';
			}
			var date = new Date();
			var month = date.getMonth();
			var year = date.getFullYear()+ '';
			var index = year.indexOf('0');
			year = year.substr(index+1);
			var monthString = '';
			if(month <= 5)
				monthString = 'S'+year;
			else if(month > 5)
				monthString = 'F'+year;
			try{
			$.post('php/signup.php',form_data+'&indice='+monthString,processData);
			}
			catch(err) {
				alert(err.message);
			}
		}
		return false;
	});

});