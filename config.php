<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("143898494365-16gh2lbnom6ocpe73cngq5gji65pqbq3.apps.googleusercontent.com.com");
	$gClient->setClientSecret("tWoF5iZ-76l4xxcoiLoCwQBT");
	$gClient->setApplicationName("glogin");
	$gClient->setRedirectUri("http://localhost/GoogleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
