<?php
session_start();

// Unset the session 
session_unset();

// Destroy the unset and current session
session_destroy();

header("Location: Login.php");

?>
