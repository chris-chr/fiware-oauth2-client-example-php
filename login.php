<?php
	//application specific variables
	$clientId = "";
	$domain = "localhost";

	//redirect url for the user to authenticate 
	//itself using the fi-ware oauth
	$newURL = "http://account.lab.fi-ware.org/oauth2/authorize"
		. "?response_type=code"
		. "&client_id=". $clientId
		. "&state=xyz"
		. "&redirect_uri=http%3A%2F%2F".$domain
		. "%2Fcallback.php";

	//actual redirect
	header('Location: '.$newURL);
?>
