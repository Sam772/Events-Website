<?php
session_start();

	include_once 'database.inc.php';
	include_once 'functions.inc.php';

// if user books event, their userid and the eventid will be added to booking table
if (isset($_POST['bookingOne'])) {
	BookingOne($conn);
}
if (isset($_POST['bookingTwo'])) {
	BookingTwo($conn);
}
if (isset($_POST['bookingThree'])) {
	BookingThree($conn);
}
if (isset($_POST['bookingFour'])) {
	BookingFour($conn);
}
if (isset($_POST['bookingFive'])) {
	BookingFive($conn);
}
if (isset($_POST['bookingSix'])) {
	BookingSix($conn);
}