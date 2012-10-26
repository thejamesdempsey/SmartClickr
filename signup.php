<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/styles/main.css" media="screen"> 
	<link rel="stylesheet" type="text/css" href="assets/styles/form-signup.css" media="screen"> 
	
	<link rel="stylesheet" href="assets/styles/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	
	
	<script type="text/javascript" src="//use.typekit.net/tlx8hat.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<script type="text/javascript" src="assets/js/signup-validate.js"></script>

	<script>
	/*
		$(document).ready(function(){
			$("#signupForm").validate({
				rules: {
					newEmail: {
						required: true,
						email: true,
					},
					newPassword: {
						required: true,
						minlength: 6,
					},
				}
			});
		});*/
	</script>
	
	<script>
		/*
		$(document).click(function(){
			var checked = $("#termsCheckBox").is(':checked');
			
			if(checked){
				$('label#check_error').remove();
			} else {
				$("#termsLabel").after('<label id="check_error">This checkbox is required</label>'); 
			}
			
		});	
		*/
  	</script>
	
</head>
<!-- begin main navigation -->
<div id="signup_page">
<div id="signup_nav">
<div class="row">
	<div id="twelve columns">
		<nav id="signup_nav" class="three columns">
			<ul>
				<li>
					<a href="index.php">Back to the homepage</a>
				</li>
			</ul>
		<nav>
	</div>
	<hr>
</div><!-- end main navigation -->
</div>

<div id="signup-container" class="row">
<div class="twelve columns">
	<div class="ten columns centered">
	<h1>Let's Get Started</h1>
<div id="signup-wrapper" >
	
	<section id="signup-content">
		<p>It's simple. All we need your name, email and a password</p>
		<form action="#" class="" id="signupForm">
			<fieldset>
				<span>
				<label for="newUser" class="form-text">Your Full Name</label> 		
					<input id="newUser" type="input" class="required form-text" name="newUser"  autocomplete="off" ></input>
					<div class="clear"></div>
				</span>
				<div class="clear"></div>
				<span>
					<label for="newEmail" class="form-text">Your Email Address</label> 
						<input id="newEmail" type="input" class="required form-text" name="newEmail"  autocomplete="off"></input>
						<div class="clear"></div>
				</span>
				<span>		
				<label for="newEmail">Your Password</label> 
					<input id="newPassword" type="password" name="newPassword" class="required form-text"  autocomplete="off"></input>
					<div class="clear"></div>
				</span>	
			</fieldset>
			<fieldset class="check">
				<label id="termsLabel"><input id="termsCheckBox" name="checkTerms" type="checkbox" checked="checked" />I agree to <a href="#">the SmartClickr Terms of Service</a></label> 
				<div class="clear"></div>
			</fieldset>
			<hr>
			<fieldset class="form-action">
				<input type="submit" value="Submit" />
			</fieldset>
		</form>
	</section>
</div>
</div>
</div>
	<footer>
	</footer>
</div>

</body>



</html>