<?php
	//check if a session exists,
	//and if it doesn't redirect to
	//index page
	session_start();
	if(!isset($_SESSION["access_token"])){
		header('Location: index.php');
	}
	
	//get access token from session
	$access_token = $_SESSION["access_token"];

	//url to request the user data
	$url = 'http://account.lab.fi-ware.org/user?access_token=' . $access_token;

	//request implementation
	$ch = curl_init($url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $output=curl_exec($ch);
    curl_close($ch);

    //response user data parsing and printing
    $user = json_decode($output,true);
    echo "User ID : " . $user["id"] . "<br />";
    echo "Nickname : " . $user["nickName"] . "<br />";
    echo "Display Name : " . $user["displayName"] . "<br />";
    echo "E-mail : " . $user["email"] . "<br />";

    //log out button
	echo "<a href='logout.php'>Log out</a>";
?>