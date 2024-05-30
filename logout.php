<?php
error_reporting(E_ALL);
session_start();

require_once "classes/User.php";

$user = new User;
$user->logout();
header("location:loginpage.php");
exit();
?>