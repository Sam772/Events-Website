<?php
// Register an account php

if (isset($_POST["submit"])) {

	$username = $_POST["username"];
	$email = $_POST["email"];
	$phno = $_POST["phno"];
	$psw = $_POST["psw"];
	$repeatpsw = $_POST["repeatpsw"];

	require_once 'database.inc.php';
	require_once 'functions.inc.php';

	// error handlers for not inputting information correctly

	if (emptyInputRegister($username, $email, $phno, $psw, $repeatpsw) !== false) {
		header("location: ../register.php?error=emptyinput");
		exit();
	}
	if (invalidUsername($username) !== false) {
		header("location: ../register.php?error=invalidusername");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: ../register.php?error=invalidemail");
		exit();
	}
	if (invalidPhno($phno) !== false) {
		header("location: ../register.php?error=invalidphonenumber");
		exit();
	}
	if (pswMatch($psw, $repeatpsw) !== false) {
		header("location: ../register.php?error=passwordsdontmatch");
		exit();
	}
	if (pswLength($psw) !== false) {
		header("location: ../register.php?error=passwordtoosmall");
		exit();
	}
	 if (userExists($conn, $username, $email) !== false) {
		header("location: ../register.php?error=usernametaken");
		exit();
	}
	// user is created
	createUser($conn, $username, $email, $phno, $psw);
}
else {
	header("location: ../register.php");
	exit();
}

