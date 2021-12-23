<?php
session_start();
	
	include_once 'database.inc.php';
	include_once 'functions.inc.php';
	
// if user likes event, their userid and the eventid will be added to likes table
if (isset($_POST['likeOne'])) {
	LikeOne($conn);
}
if (isset($_POST['likeTwo'])) {
	LikeTwo($conn);
}
if (isset($_POST['likeThree'])) {
	LikeThree($conn);
}
if (isset($_POST['likeFour'])) {
	LikeFour($conn);
}
if (isset($_POST['likeFive'])) {
	LikeFive($conn);
}
if (isset($_POST['likeSix'])) {
	LikeSix($conn);
}