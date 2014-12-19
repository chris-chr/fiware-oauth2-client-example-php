<?php
	//gets the session 
	//variable and invalidates it
	session_start();
	$_SESSION = array();
	session_destroy();
	//redirect to index page
	header('Location: index.php');
?>