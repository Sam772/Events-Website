<?php

	// functions for our php register/login pages

	// register functions
  // checks if any field is empty
 function emptyInputRegister($username, $email, $phno, $psw, $repeatpsw) {
 	$input;
 	if (empty($username) || empty($email) || empty($phno) || empty($psw) || empty($repeatpsw)) {
 		$input = true;
 	}
 	else {
 		$input = false;
 	}
 	return $input;
 }

 // checks if username is inputted correctly
 function invalidUsername($username) {
 	$input;
 	if (!preg_match("/^[a-zA-Z0-9_ -]*$/", $username)) {
 		$input = true;
 	}
 	else {
 		$input = false;
 	}
 	return $input;
 }

 // checks if email is an aston email
 function invalidEmail($email) {
 	$input;
 	if (!strpos($email, "aston.ac.uk")) {
 		$input = true;
 	}
 	else {
 		$input = false;
 	}
 	return $input;
 }

  // checks if phone number is valid
  function invalidPhno($phno) {
   $input;
   if (!preg_match("/^[0-9]*$/", $phno)) {
      $input = true;
   }
   else {
      $input = false;
   }
   return $input;
 }

 // checks if passwords match
 function pswMatch($psw, $repeatpsw) {
 	$input;
 	if ($psw !== $repeatpsw) {
 		$input = true;
 	}
 	else {
 		$input = false;
 	}
 	return $input;
 }

 function pswLength($psw) {
  $uppercase = preg_match('@[A-Z]@', $psw);
  $lowercase = preg_match('@[a-z]@', $psw);
  $number    = preg_match('@[0-9]@', $psw);
  
  $input;
  if(!$uppercase || !$lowercase || !$number || strlen($psw) < 8) {
    $input = true;
  }
  else {
    $input = false;
  }
  return $input;
 }

   // checks if username or email are already taken
   function userExists($conn, $username, $email) {
      // prepare and bind
   	$stmt = $conn->prepare("SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;");

   	$stmt->bind_param("ss", $username, $email);

      // execute and close
   	$stmt->execute();

   	$inputData = $stmt->get_result();

   	if ($row = $inputData->fetch_assoc()) {
   		return $row;
   	}
   	else {
   	$input = false;
   	return $input;
   }
   $stmt->close();
}

   // if user has inputted everything correctly account is made
   function createUser($conn, $username, $email, $phno, $psw) {
      // prepare and bind
   	$stmt = $conn->prepare("INSERT INTO users (usersName, usersEmail, usersPhno, usersPsw) VALUES (?, ?, ?, ?);");

   	$hashedpsw = password_hash($psw, PASSWORD_DEFAULT);

   	$stmt->bind_param("ssss", $username, $email, $phno, $hashedpsw);

       // execute and close
   	$stmt->execute();
      
   	$stmt->close();
    $conn->close();

   	header("location: ../login.php?error=none");
   	exit();
}

 // login functions
 // checks if all fields have inputs
 function emptyInputLogin($username, $psw) {
 	$input;
 	if (empty($username) || empty($psw)) {
 		$input = true;
 	}
 	else {
 		$input = false;
 	}
 	return $input;
 }

 // logins in user if username and password input are correct
 function loginUser($conn, $username, $psw) {
 	$userExists = userExists($conn, $username, $username);

 	if ($userExists === false) {
 		header("location: ../login.php?error=wronglogin");
 		exit();
 	}

 	$pswHashed = $userExists["usersPsw"];
 	$checkPsw = password_verify($psw, $pswHashed);

 	if ($checkPsw === false) {
 		header("location: ../login.php?error=wronglogin");
 	}
 	else if ($checkPsw === true) {
 		session_start();
 		$_SESSION["userid"] = $userExists["usersId"];
 		$_SESSION["username"] = $userExists["usersName"];
 		header("location: ../index.php");
 		exit();
 	}
 
 }

 // functions for bookings
 function BookingOne($conn) {
   // variables for checking if booking already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 1;

   $stmt = $conn->query("SELECT userId, eventId FROM bookings WHERE userId='$userid' AND eventId='$eventid';");

   // if info already exists then page refreshes and no data is added
   if ($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO bookings (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // execute and close
   $stmt->execute();


   $stmt->close();
   $conn->close();
   // display alerts
   echo '<script type="text/javascript">alert("Booking Successful!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already booked this event!");
     history.back();</script>';
   }
   exit();
 }

 function BookingTwo($conn) {
   // variables for checking if booking already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 2;

   $stmt = $conn->query("SELECT userId, eventId FROM bookings WHERE userId='$userid' AND eventId='$eventid';");

   // if info already exists then page refreshes and no data is added
   if ($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO bookings (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // execute and close
   $stmt->execute();

   $stmt->close();
   $conn->close();
   // display alerts
    echo '<script type="text/javascript">alert("Booking Successful!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already booked this event!");
     history.back();</script>';
   }
   exit();
 }

  function BookingThree($conn) {
   // variables for checking if booking already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 3;

   $stmt = $conn->query("SELECT userId, eventId FROM bookings WHERE userId='$userid' AND eventId='$eventid';");

   // if info already exists then page refreshes and no data is added
   if ($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO bookings (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // execute and close
   $stmt->execute();

   $stmt->close();
   $conn->close();
   // display alerts
   echo '<script type="text/javascript">alert("Booking Successful!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already booked this event!");
     history.back();</script>';
   }
   exit();
 }

  function BookingFour($conn) {
   // variables for checking if booking already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 4;

   $stmt = $conn->query("SELECT userId, eventId FROM bookings WHERE userId='$userid' AND eventId='$eventid';");

   // if info already exists then page refreshes and no data is added
   if ($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO bookings (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // execute and close
   $stmt->execute();

   $stmt->close();
   $conn->close();
   // display alerts
   echo '<script type="text/javascript">alert("Booking Successful!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already booked this event!");
     history.back();</script>';
   }
   exit();
 }

  function BookingFive($conn) {
   // variables for checking if booking already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 5;

   $stmt = $conn->query("SELECT userId, eventId FROM bookings WHERE userId='$userid' AND eventId='$eventid';");

   // if info already exists then page refreshes and no data is added
   if ($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO bookings (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // execute and close
   $stmt->execute();

   $stmt->close();
   $conn->close();
   // display alerts
   echo '<script type="text/javascript">alert("Booking Successful!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already booked this event!");
     history.back();</script>';
   }
   exit();
 }
  function BookingSix($conn) {
   // variables for checking if booking already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 6;

   $stmt = $conn->query("SELECT userId, eventId FROM bookings WHERE userId='$userid' AND eventId='$eventid';");

   // if info already exists then page refreshes and no data is added
   if ($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO bookings (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // execute and close
   $stmt->execute();

   $stmt->close();
   $conn->close();
   // display alerts
   echo '<script type="text/javascript">alert("Booking Successful!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already booked this event!");
     history.back();</script>';
   }
   exit();
 }

  // functions for likes
  function likeOne($conn) {
   // variables for checking if like already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 1;

   $stmt = $conn->query("SELECT userId, eventId FROM likes WHERE userId='$userid' AND eventId='$eventid';");

   // if info already exists then page refreshes and no data is added
   if ($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO likes (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // execute and close
   $stmt->execute();
  
   $stmt->close();
   $conn->close();
   // display alerts
   echo '<script type="text/javascript">alert("You liked this event!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already liked this event!");
     history.back();</script>';
   }
   exit();
 }

  function likeTwo($conn) {
   // variables for checking if like already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 2;

   $stmt = $conn->query("SELECT userId, eventId FROM likes WHERE userId='$userid' AND eventId='$eventid';");
   // if info already exists then page refreshes and no data is added
   if($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO likes (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // execute and close
   $stmt->execute();

   $stmt->close();
   $conn->close();
   // display alerts
   echo '<script type="text/javascript">alert("You liked this event!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already liked this event!");
     history.back();</script>';
   }
   exit();
 }
  function likeThree($conn) {
   // variables for checking if like already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 3;

   $stmt = $conn->query("SELECT userId, eventId FROM likes WHERE userId='$userid' AND eventId='$eventid';");
   // if info already exists then page refreshes and no data is added
   if($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO likes (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // execute and close
   $stmt->execute();

   $stmt->close();
   $conn->close();
   // display alerts
   echo '<script type="text/javascript">alert("You liked this event!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already liked this event!");
     history.back();</script>';
   }
   exit();
 }
  function likeFour($conn) {
   // variables for checking if like already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 4;

   $stmt = $conn->query("SELECT userId, eventId FROM likes WHERE userId='$userid' AND eventId='$eventid';");
   // if info already exists then page refreshes and no data is added
   if($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO likes (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // execute and close
   $stmt->execute();

   $stmt->close();
   $conn->close();
   // display alerts
   echo '<script type="text/javascript">alert("You liked this event!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already liked this event!");
     history.back();</script>';
   }
   exit();
 }
  function likeFive($conn) {
   // variables for checking if like already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 5;

   $stmt = $conn->query("SELECT userId, eventId FROM likes WHERE userId='$userid' AND eventId='$eventid';");
   // if info already exists then page refreshes and no data is added
   if($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO likes (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // execute and close
   $stmt->execute();

   $stmt->close();
   $conn->close();
   // display alerts
   echo '<script type="text/javascript">alert("You liked this event!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already liked this event!");
     history.back();</script>';
   }
   exit();
 }
  function likeSix($conn) {
   // variables for checking if like already exists in database
   $userid = $_SESSION['userid'];
   $eventid = 6;

   $stmt = $conn->query("SELECT userId, eventId FROM likes WHERE userId='$userid' AND eventId='$eventid';");
   // if info already exists then page refreshes and no data is added
   if($stmt->num_rows == 0) {
   // prepare and bind
   $stmt = $conn->prepare("INSERT INTO likes (userId, eventId) VALUES (?, ?);");

   $stmt->bind_param("ii", $userid, $eventid);

   // variable for the session information
   $userid = $_SESSION['userid'];
   $eventid = 6;

   // execute and close
   $stmt->execute();

   $stmt->close();
   $conn->close();
   // display alerts
   echo '<script type="text/javascript">alert("You liked this event!");
     history.back();</script>';
   } else {
   echo '<script type="text/javascript">alert("You have already liked this event!");
     history.back();</script>';
   }
   exit();
 }