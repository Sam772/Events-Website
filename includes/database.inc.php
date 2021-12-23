<?php 

// Database connection

// Aston connection
// $serverName = "localhost";
// $databaseUsername = "u-200087238";
// $databasePassword = "6oCkU0JWrkCyXSc";
// $databaseName = "u_200087238_db";

// local connection
$serverName = "localhost";
$databaseUsername = "root";
$databasePassword = "";
$databaseName = "loginsystem";

$conn = new mysqli($serverName, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
	die("Something went wrong with the connection: " . $conn->connect_error);
}

