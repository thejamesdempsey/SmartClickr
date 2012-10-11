<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/styles/main.css" media="screen"> 
	<link rel="stylesheet" type="text/css" href="assets/styles/form-signup.css" media="screen"> 
	
	<link rel="stylesheet" href="assets/styles/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

	
</head>
<!-- begin main navigation -->

<div class="wrapper">
	<h1 class="left">Get started!</h1>
	<nav>
		<ul>
			<li>
				<a class="right" href="index.php">Back to the homepage</a>
			</li>
		</ul>
	<nav>
</div><!-- end main navigation -->
<hr>
<div id="signup-container">
<div id="signup-wrapper" class="wrapper">
	
	<section id="signup-content">
		<form action="#" class="" id="signupForm">
			<fieldset>
				<span>
				<label for="newEmail" class="form-text">Your Email Address</label> 
				
					<input id="newEmail" type="input" class="form-text" name="newEmail" title="Email Address" autocomplete="off"></input>
					<div class="clear"></div>
				</span>
				<div class="clear"></div>
				<span>
					<label for="confirmEmail" class="form-text">Confirm Email Address</label> 
						<input id="confirmEmail" type="input" class="form-text" name="confirmEmail" title="Email Address" autocomplete="off"></input>
						<div class="clear"></div>
				</span>
				<span>		
				<label for="newEmail">Your Password</label> 
					<input id="newPassword" type="text" name="newPassword" class="form-text" title="Password"  autocomplete="off"></input>
					<div class="clear"></div>
				</span>	
			</fieldset>
			<hr>
			<fieldset class="form-action">
				<input type="submit" value="Submit" />
			</fieldset>
		</form>
	</section>
</div>
</div>

</body>