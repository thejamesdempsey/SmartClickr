<!DOCTYPE html>
<head>
	<title> SmartClickr | Poll Smart </title>
	<meta name="description" content="The Official Site for SmartClickr -- A better way to poll and answer questions">
	<meta http-eqiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" type="text/css" href="assets/styles/screen.css" media="screen"> 
	
	<!-- Add jQuery library -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</head>
<body>
	<div id="trialContainer"class="wrapper">
		<header id="trialHeader" class="container global">
			<h2><a href="index.php">SmartClickr</a></h2>
			<ul>
				<li>
					<a id="back" href="index.php">Go back to SmartClickr.com</a>
				</li>
			</ul>
		</header>
	</div>
	
	<div id="trialcontainer" class="container">
<form action="#">
	<fieldset>
		<label for="email">Email</label>
		<input type="text" id="email" class="form-text" />
	</fieldset>
	
	<fieldset>
		<label for="confirm_email">Confirm Email</label>
		<input type="email" id="confirm_email" class="form-text" />
	</fieldset>
	
	<fieldset>
		<label for="password">Password</label>
		<input type="text" id="password" class="form-text" />
	</fieldset>
	
	<fieldset>
		<label for="confirm_password">Confirm Password</label>
		<input type="email" id="confirm_password" class="form-text" />
	</fieldset>
	
	<fieldset class="radio">
		<label for="notifications">Account Type</label>
		<ul>
			<li><label><input type="radio" name="notifications" /> Administrator</label></li>
			<li><label><input type="radio" name="notifications" /> Participant</label></li>
		</ul>
		<p class="form-help">Admin accounts can create polls while participant accounts can only vote on polls. Admin account will be charged after the first month while participant accounts are free</p>
	</fieldset>

	<fieldset class="check">
		<label><input type="checkbox" /> I accept the terms of service and lorem ipsum.</label>
	</fieldset>

	<fieldset class="form-actions">
		<input type="submit" value="Submit" />
	</fieldset>
</form>	
</div>
</div>
</body>		
