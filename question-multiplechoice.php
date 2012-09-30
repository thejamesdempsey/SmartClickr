<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/styles/form.css" media="screen">
	
	<script>
		function displayResult(operatingSystem) {
			document.getElementById("result").value = operatingSystem
		}
	</script>
	 
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
		<form name="responseForm" action="response-multiplechoice.php" method="POST" onsubmit="return validateResponse()">	
			
			<!-- begin question -->	
			<fieldset>
				<label for="question" class="form-text">Question</label>
					<h4>What operating system do you use on your main computer?</h4>
			</fieldset><!-- end question -->
			
			<div>
				<hr>
			</div>	
					
			<!-- begin response textarea -->
			<fieldset id="answer-multiplechoice">
				<label for="response" class="form-text">Response</label>
				<ul>	
					<li><label><input type="radio" name="operatingSystem" value="Windows"/> Windows</label></li>
					<li><label><input type="radio" name="operatingSystem" value="Mac OSX"/> Mac OSX</label></li>	
					<li><label><input type="radio" name="operatingSystem" value="Linux"/> Linux</label></li>	
					<li><label><input type="radio" name="operatingSystem" value="Chromium"/> Chromium</label></li>	
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
<script>


</script>