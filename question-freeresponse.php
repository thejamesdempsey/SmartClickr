<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/styles/form.css" media="screen"> 
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
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
		<form name="responseForm" action="response-freeresponse.php" method="POST" onsubmit="return validateForm()">	
			
			<!-- begin question -->	
			<fieldset>
				<label for="question" class="form-text">Question</label>
					<h4>How do you like your coffee?</h4>
			</fieldset><!-- end question -->
			
			<div>
				<hr>
			</div>	
					
			<!-- begin response textarea -->
			<fieldset id="answer-freeresponse">
				<label for="response" class="form-text">Response</label>
					<textarea id="coffeeResponse" name="coffeeResponse" placeholder="For example -- Starbucks Veranda Blend, room for cream and sugar"></textarea>
					<p class="form-help">Please keep responses to 140 characters or less</p>
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
function validateForm() {
	var response = document.forms["responseForm"]["coffeeResponse"].value;
	if (response == null || response == "") {
		alert("Please enter a response");
		return false;
	} else if (response.length > 140 ) {
		alert("Please keep your response to 140 characters or less");
		return false;
	}
}

</script>

</html>