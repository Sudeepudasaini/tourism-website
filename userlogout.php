<?php
session_start();

// to clear all session variables by replacing with empty 
$_SESSION=array();

// destroy the session
session_destroy();

header("location:tourismfinal1.php");
exit();