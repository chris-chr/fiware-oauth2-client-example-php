<?php
	//check if a session exists,
	//and if it does redirect to
	//user page else login
	session_start();
	if(isset($_SESSION["access_token"])){
		header('Location: user.php');
	}
	echo "<a href='login.php'>Login</a>"
?>