<?php
error_reporting(E_ALL);
session_start();

require_once "../user_guard.php";
require_once "../classes/User.php";
require_once "../classes/utilities.php";

    if(isset($_POST['btnsubmit'])){
            $fname = sanitizer($_POST['fname']);
            $mname =sanitizer($_POST['mname']);
            $lname =sanitizer($_POST['lname']);
            $gender =($_POST['gender']);
            $dob =($_POST['dob']);
            $phone = sanitizer($_POST['phone']);

    
    $user = new User;
    $check = $user->update_profile($fname,$mname,$lname,$gender,$dob,$phone,$_SESSION['useronline']);
    if($check){
        $_SESSION['feedback'] = '<div class="alert alert-success"> Profile updated Successfully</div>';
        header("location:../profile.php");
        exit();
    }else{
        $_SESSION['errormsg'] = '<div class="alert alert-danger">Fail to update profile</div>';
        header("location:../profile.php");
        exit();
    }

    }else{
        $_SESSION['errormsg'] = "Please complete the form";
        header("location:../profile.php");
        exit();
    }

?>