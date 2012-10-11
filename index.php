<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/styles/form-login.css" media="screen"> 
	<link rel="stylesheet" type="text/css" href="assets/styles/main.css" media="screen"> 
	
	
	<link rel="stylesheet" href="assets/styles/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

	
</head>
<body>

	<h1 class="left"><a href="index.php">SmartClickr</a></h1>
	
	<span class="right"><a class="fancybox" href="#login">log in</a></span>
	<span class="right"><a href="signup.php">sign up</a></span>
	<div>
		<hr>
	</hr>
	<!-- begin main navigation -->
	<div>
		<nav>
			<ol>
				<li>
					<a href="question-freeresponse.php">Free Response Example</a>
				</li>
				<li>
					<a href="question-multiplechoice.php">Multiple Choice Example</a>
				</li>
				<li>
					<a href="question-truefalse.php">True/False Example</a>
				</li>
			</ol>
		<nav>
	</div><!-- end main navigation -->
	
	<div>
		<hr>
	</div>


	<div id="login" style="opacity: 0.75; display: none; margin: 20px">
		<div id="login-wrapper">
		<form id="loginForm" method="post" action="#">
			<h1>Log in to access your account, or <a href="signup.php">sign up</a> to create polls of your own.</h1>
			<hr>
			
				<fieldset>
					<span class="field">
						<input id="userEmail" type="input" class="form-text" name="userEmail" title="Email Address" placeholder="Email Address" autocomplete="off"></input>
					</span>
					<span class="field password">
						<input id="userPassword" type="text" name="userPassword" class="form-text" title="Password" placeholder="Password" autocomplete="off"></input>
						<a id="reset" href="reset">Forgot your password?</a>
						<div id="clear"class="clear"></div>
					</span>
				</fieldset>
				<hr>
				<fieldset class="form-action">
					<input type="submit" value="Submit" />
				</fieldset>
		</form>
		</div>
	</div>
</section>
</body>

<!-- Load Javascript -->
<script type="text/javascript">
$(document).ready(function() {
	$("a.fancybox").fancybox({
		scrolling: 'yes',
		helpers : {
			overlay : {closeClick: false}
		}
	});
});
</script>
<script type="text/javascript" src="assets/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="assets/js/login-validate.js"></script>
</html>