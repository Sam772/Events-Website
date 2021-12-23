<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Aston Events</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
</head>
<body>

<!---------- nav bar ---------->
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container-fluid">
    	<a class="navbar-brand"><img src="images/logo5.png"></a>
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     	  <i class="fa fa-bars"></i>
    	</button>
    	<div class="collapse navbar-collapse" id="navbarNav">
      		<ul class="navbar-nav ml-auto">
            <?php 
              if (isset($_SESSION["username"])) {
              echo "<li class='nav-item'><a class='nav-link'>WELCOME " . $_SESSION['username'] . "</a></li>";
              }
            ?>
        		<li class="nav-item">
          			<a class="nav-link" href="index.php">HOME</a>
        		</li>
        		<li class="nav-item">
         			<a class="nav-link" href="events.php">EVENTS</a>
        		</li>
        		<li class="nav-item">
         			<a class="nav-link" href="schedule.php">SCHEDULE</a>
        		</li>
            <?php 
              if (isset($_SESSION["username"])) {
                echo "<li class='nav-item'><a class='nav-link' href='profile.php'>PROFILE</a></li>";
                echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>LOGOUT</a></li>";
              }
              else {
                echo "<li class='nav-item'><a class='nav-link' href='register.php'>REGISTER</a></li>";
                echo "<li class='nav-item'><a class='nav-link' href='login.php'>LOGIN</a></li>";
              }
            ?>
     		</ul>
    	</div>
 	</div>
</nav>
</section>