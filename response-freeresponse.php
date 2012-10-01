<!DOCTYPE html>
<head>
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/styles/form.css" media="screen"> 
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</head>

<body>
<h3>Response</h3>

<?php echo $_POST["coffeeResponse"];?></br></br>

<?php
	

	
	$fileName = "freeresponse.txt";
	$fileHandle = fopen($fileName, 'a') or die("can't open file, bummer...");

	for ($counter = 1; $counter <= 1; $counter++) {
		$stringData = $_POST["coffeeResponse"] . "\n";
		
	//	$arr = array(
	//		"Author" => "Jimmy Dempsey",
	//		"Response" => $_POST["coffeeResponse"]
	//	);
 		
	//	$stringData = json_encode($arr) . "\n";
				
		fwrite($fileHandle, $stringData);
	}
	
	fclose($fileHandle);
	 

?>

<ul>
	<li>
		<a href="question-freeresponse.php">Return</a>
	</li>
</ul>
</body>

</html>