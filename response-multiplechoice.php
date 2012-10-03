<!DOCTYPE html>
<head>
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/styles/form.css" media="screen"> 
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</head>

<body>
<h3>Response</h3>

Your preferred operating system is: <?php echo $_GET["operatingSystem"];?></br></br>

<?php
	
	$fileName = "multiplechoice.txt";
	$fileHandle = fopen($fileName, 'a') or die("can't open file, bummer...");
	
	for ($counter = 1; $counter <= 1; $counter++) {
		$stringData  = $_GET["operatingSystem"] . "\n";
		fwrite($fileHandle, $stringData);
	}
	fclose($fileHandle);
	 

?>
<ul>
	<li>
		<a href="question-multiplechoice.php">Return</a>
	</li>
</ul>
</body>

</html>
