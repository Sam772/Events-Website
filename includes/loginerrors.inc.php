<?php 
    // login error messages for any errors user encounters
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>All fields must be filled!</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login, please try again!</p>";
        }
        else if ($_GET["error"] == "notloggedin") {
            echo '<div class="text-danger"><p>You must be logged in to access the page!</p></div>';
        }
    }
?>