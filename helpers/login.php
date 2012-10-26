<?php
function login() {
	if(empty($_POST['userEmail'])) {
		return false;
	} if(empty($_POST['userPassword'])) {
		return false;
	}
	
	$email = trim($_POST['userEmail']);
	$pass = trim($_POST['userPassword']);
	if(!$this->verifyLogin($email,$pass)) {
		return false;
	}
	session_start();
	$_SESSION[$this -> GetLoginSessionVar()] = $email;
	
	return true;
}

function verifyLogin($email, $pass) {
	if(!$this -> DBLogin()) {
		$this -> HandleError("Whoops! Login failed!");
		return false;
	}
	$email = $this -> SanitizeForSQL($email);
	$passmd5 = md5($pass);
	$query="";
	$result = mysql_query($query,$this->connection);
	if(!$result || mysql_num_rows($result) <= 0) {
		$this -> HandleError("UHHH OHHH! Your username or password is incorrect. Please try again.");
		return false;
	}
	return true;
}
?>