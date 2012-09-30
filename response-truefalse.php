<!DOCTYPE html>
<head>
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/styles/form.css" media="screen"> 
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</head>

<body>
<h3>Response</h3>

You selected: <?php echo $_POST["cars"];?></br></br>

The correct answer is: False

<ul>
	<li>
		<a href="question-truefalse.php">Return</a>
	</li>
</ul>
</body>

</html>