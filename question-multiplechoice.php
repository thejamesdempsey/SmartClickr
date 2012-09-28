<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/styles/form.css" media="screen"> 
</head>
<body>
	<!-- begin main navigation -->
	<div>
		<nav>
			<ul>
				<li>
					<a href="index.php">Return to Questions Menu</a>
				</li>
			</ul>
		<nav>
	</div><!-- end main navigation -->
	<div><hr></div>
	<!-- begin question/answer container -->
	<div >	
		<!-- begin form -->
		<form action="#" method="POST">	
			
			<!-- begin question -->	
			<fieldset>
				<label for="question" class="form-text">Question</label>
					<h4>What operating system do you use on your main computer?</h4>
			</fieldset><!-- end question -->
			
			<div>
				<hr>
			</div>	
					
			<!-- begin response textarea -->
			<fieldset id="answer-truefalse">
				<label for="response" class="form-text">Response</label>
				<ul>	
					<li><label><input type="radio" name="operatingsystem"/> Windows</label></li>
					<li><label><input type="radio" name="operatingsystem"/> Mac OSX</label></li>	
					<li><label><input type="radio" name="operatingsystem"/> Linux</label></li>	
					<li><label><input type="radio" name="operatingsystem"/> Chromium</label></li>	
				</ul>
			</fieldset>	<!-- end response textarea -->
			
			<div>
				<hr>
			</div>
						
			<!-- begin submit -->	
			<fieldset class="form-actions">
				<input type="submit" value="Submit" />
			</fieldset><!-- end submit -->	
				
		</form><!-- end form -->
		
	</div><!-- end question/answer container -->

</body>