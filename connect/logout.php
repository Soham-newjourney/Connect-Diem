<?php
if(session_status() == PHP_SESSION_NONE) session_start();

// Destroy all session data
$_SESSION = [];
session_unset();
session_destroy();

// Redirect to homepage or login page
header("Location: index.php");
exit;
