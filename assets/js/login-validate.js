
$("form#loginForm").ready(function() {
	$(this).submit(function() {
		if (false == validateForm($(this))) {
			return false;
		}

	});
	
		
});//end doc rdy


validateForm = function($form) {
	$form.find(".error").hide();
	isValid = true;
	
	// Email Field
	var emailVal = $("#userEmail").val();
	// If email field is empty
	if(emailVal == '') {
		$("#userEmail").after('<label class="error">Please enter your email address</label>');
		isValid = false;
	}
	
	// Password Field
	var passwordToVal = $("#userPassword").val();
	// If password field is empty
	if(passwordToVal == '') {
		$("#clear").after('<label class="error">Please enter your password</label>');
		isValid = false;			
	}
	
	return isValid;
};
