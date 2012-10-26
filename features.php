<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/styles/form-login.css" media="screen"> 
	<link rel="stylesheet" type="text/css" href="assets/styles/main.css" media="screen"> 
	<!--<link rel="stylesheet" type="text/css" href="assets/styles/foundation.css" media="screen"> -->
	
	
	<link rel="stylesheet" href="assets/styles/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	
	<script type="text/javascript" src="assets/js/jquery.foundation.navigation.js"></script>
	<script type="text/javascript" src="assets/js/jquery.foundation.topbar.js"></script>
	
	<!-- Add Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="//use.typekit.net/tlx8hat.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	

	
</head>
<body>
	
<!-- Header Content -->
<section id="wrapper">
	<div id="header-container">
		<div class="row">
			<div class="nav-wrapper twelve columns">
				<!-- Header -->
				<header class="row">
					<nav class="top-bar">
						<ul>
							<li class="name"><h1><a id="title" href="index.php">SmartClickr</a></h1></li>
							<li class="toggle-topbar"><a href="#"></a></li>
						</ul>
						<section>
							<ul class="right">
								<li><a href="index.php" id="home" class="small">Home</a></li>
								<li><a href="features.php" id="features">Features</a></li>
								<li><a href="signup.php" id="signup">Sign Up</a></li>
								<li><a class="fancybox" href="#login" id="log">Log In</a></li>
							</ul>
						</section>
					</nav>
				</header><!-- End Header -->
			</div><!-- End Nav-Wrapper -->
			<div class="clear"></div>
		</div>
	</div><!-- End Header Container -->
	<div id="features_content" class="row">
		<div class="twelve columns">
			<section id="features_usage" class="twelve columns section-pad">
				<h1 class="four columns">Using SmartClickr:</h1>
				<p class="eight columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</section>
			<section id="features_interaction" class="twelve columns section-pad">
				<h1 class="four columns">Audience Interaction:</h1>
					<p class="eight columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</section>
			<section id="features_questions" class="twelve columns section-pad">
				<h1 class="four columns">Available Questions:</h1>
					<p class="eight columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</section>
			<section id="features_classroom" class="twelve columns section-pad">
				<h1 class="four columns">In Your Classroom:</h1>
					<p class="eight columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</section>
			<section id="features_conferences" class="twelve columns section-pad">
				<h1 class="four columns">At Your Conference:</h1>
					<p class="eight columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</section>	
			<section id="features_mobile" class="twelve columns section-pad">
				<h1 class="four columns">The Mobile Advantage: </h1>
					<p class="eight columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</section>
		</div>
	</div>
	
	
	

	
	<!-- Popup Content -->

	<div id="login" style="opacity: 0.75; display: none; margin: 20px">
		<div id="login-wrapper">
			<form id="loginForm" method="post" action="login.php">
			<h1>Log in to access your account, or <a id="logFormSignup" href="signup.php">sign up</a> to create polls of your own.</h1>
			<hr>

				<fieldset>
					<span class="field">
						<input id="userEmail" type="input" class="form-text" name="userEmail" title="Email Address" placeholder="Email Address" autocomplete="off"></input>
						<div class="clear"></div>
					</span>
					<span class="field password">
						<input id="userPassword" type="text" name="userPassword" class="form-text" title="Password" placeholder="Password" autocomplete="off"></input>
						<a id="reset" href="#">Forgot your password?</a>
						<div class="clear"></div>
					</span>
				</fieldset>
				<hr>
				<fieldset class="form-action">
					<input type="submit" value="Submit" />
				</fieldset>
				</form>
			</div>
		</div>
	</div>

	</body>

	<!-- Load Javascript -->
	<script>
	$(document).foundationTopBar();
	</script>

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