<?php
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();
// Destroy the session
session_destroy();
// Redirect to the login page
// var_dump($_SESSION);
// die;
header('Location: /');
exit();
?>