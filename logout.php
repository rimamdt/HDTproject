<?php
session_start();
<<<<<<< HEAD
session_destroy(); // Destroy all sessions
=======
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

>>>>>>> ae4577d4c58e5476b4929cfb404778a994042a53
header("Location: login.php"); // Redirect to login page
exit();
?>
