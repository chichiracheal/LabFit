<?php

    error_reporting(E_ALL);
    session_start();
    require_once('../classes/User.php');
    require_once('../classes/utilities.php');
    $user = new User;
    
    if(isset($_POST['btnregister'])){
       
        $firstname = sanitizer($_POST['fname']);
        $lastname = sanitizer($_POST['lname']);
        $email = sanitizer($_POST['email']);
        $gender = sanitizer($_POST['gender']);
        $dob = sanitizer($_POST['dob']);
        $phone = sanitizer($_POST['phone']);
        $pwd = sanitizer($_POST['pwd']);
        $cpwd = sanitizer($_POST['cpwd']);

        if(empty($firstname)|| empty($lastname)|| empty($email) || empty($gender)|| empty($dob)|| empty($phone)|| empty($pwd)|| empty($cpwd)){
            $_SESSION['errormsg'] = "All fields are required";                                                                                                                                                                                                   
            header("location:../register.php");
            exit();
        }else{
           $chk = $user ->insert_user($firstname,$lastname,$email,$gender,$dob,$phone,$pwd);
           if($chk){
            $_SESSION['useronline'] = $chk;
            header("location:../dashboard.php");
           }else{
            header("location:../register.php");
           }

        }
        if($pwd != $cpwd){
            $_SESSION['errormsg'] = "Password does not match";
            header("location:../register.php");
            exit();
        }
       
    }else{           
        $_SESSION['errormsg'] = "Please fill the form";                                                                                                                                                                                                   
        header("location:../register.php");
        exit();
    }                                 
                
?>                                                                                                                                                