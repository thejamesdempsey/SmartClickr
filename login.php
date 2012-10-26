<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/styles/form.css" media="screen"> 
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	
	
	<link rel="stylesheet" href="assets/styles/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
	
</head>




<div id="login-overlay" style="opacity: 0.75; display: block">
	<form id="loginForm" onsubmit="#" methog="post">
		<h1>Log in to access your account, or <a href="signup">sign up</a> to create polls of your own.</h1>
			<fieldset>
				<span class="field">
					<input id="userEmail" type="input" class="required form-text" name="" title="Email Address" placeholder="Email Address" autocomplete="off"></input>
				</span>
				<span class="field password">
					<input id="userPassword" type="text" name="" class="required form-text" title="Password" placeholder="Password" autocomplete="off"></input>
				</span>
			</fieldset>
			<fieldset class="form-action">
				<input type="submit" value="Submit" />
			</fieldset>
	</form>
</div>