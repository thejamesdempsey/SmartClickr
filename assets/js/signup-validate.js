$("form#signupForm").ready(function() {
	$(this).submit(function() {
		if (false == validateForm($(this))) {
			return false;
		}

	});
	
		
});//end doc rdy


validateForm = function($form){
	$form.find(".error").hide();
	var isValid = true;
	
	//User Name Field
	var userVal = $("#newUser").val();
	
	if (userVal == ''){
		$("#newUser").after('<label class="error">Please enter your name</label>');
		isValid = false;
	}
	
	// Email Field
	var emailVal = $("#newEmail").val();
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

	if (emailVal == '') {
		$("#newEmail").after('<label class="error">Please enter an email address</label>');
		isValid = false;
	} else if (!emailReg.test( emailVal )){
		$("#newEmail").after('<label class="error">Yikes! This is not valid email address</label>');
		isValid = false;
	}
	
	// Password Field
	var passwordVal = $("#newPassword").val();
	
	if (passwordVal == '') {
		$("#newPassword").after('<label class="error">Please enter a password</label>');
		isValid = false;
	} else if (passwordVal.length < 6) {
		$("#newPassword").after('<label class="error">Your password must be at least 6 characters</label>');
		isValid = false;
	}
	
	// Terms Checkbox
	if ($('input[name=checkTerms]').is(':checked') ) {
		$form.find("#terms_error").hide();
		isValid = true;
	} else {
		$("#termsLabel").after('<label id="terms_error" class="error">This checkbox must be checked to continue</label>');
		isValid = false;
	}
	

	return isValid;
};

