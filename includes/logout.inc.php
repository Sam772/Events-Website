<?php
	
session_start();
session_unset();
session_destroy();
echo '<script type="text/javascript">alert("You have logged out!");
     window.location.href = "../index.php";</script>';
exit();