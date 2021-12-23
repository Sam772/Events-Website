<?php

if (isset($_POST["submit"])) {

	$username = $_POST["username"];
	$psw = $_POST["psw"];

	require_once 'database.inc.php';
	require_once 'functions.inc.php';

	// error handlers for not logging in correctly
	if (emptyInputLogin($username, $psw) !== false) {
		header("location: ../login.php?error=emptyinput");
		exit();
	}
	// user is logged in
	loginUser($conn, $username, $psw);
}
else {
	header("location: ../login.php");
	exit();
}