<?php 
    // register error messages for any errors user encounters
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>All fields must be filled!</p>";
        }
        else if ($_GET["error"] == "invalidusername") {
            echo "<p>Choose another username!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose an Aston email!</p>";
        }
        else if ($_GET["error"] == "invalidphonenumber") {
            echo "<p>Enter a real phone number!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords don't match!</p>";
        }
        else if ($_GET["error"] == "passwordtoosmall") {
            echo "<p>Passwords must be at least 8 characters and contain 1 lowercase, 1 uppercase and 1 number!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, please try again!</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username/Email has been taken, please choose a different one!</p>";
        }
    }
?>
