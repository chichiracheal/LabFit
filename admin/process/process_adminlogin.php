<?php
error_reporting(E_ALL);
session_start();
require_once "../classes/Admin.php";
require_once "../classes/General.php";
$admin = new Admin;
//retrieve form data and santize
if(isset($_POST['btnlogin'])){
    $username = General::sanitize($_POST['username']);
    $email = General::sanitize($_POST['email']);
    $pwd = General::sanitize($_POST['password']);
    $result = $admin->admin_login($username,$email,$pwd);
    if($result == 1){//login is correct, session has been set
        //$_SESSION['admin_online'] = $result;
        header("location:../admin_dashboard.php");
        exit();
    }else{//login is invalid,feedback already set 
        header("location:../index.php");
        exit();
    }
}else{
    $_SESSION['admin_errormsg'] = "Please complete the form";
    header("location:../index.php");
    exit();
}




?>