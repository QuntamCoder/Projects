<?php
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page (replace "login.html" with your actual login page)
header("Location: indexmain.html");
exit();
?>
