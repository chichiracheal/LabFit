<?php
    session_start();
    require_once "../classes/utilities.php";
    require_once "../classes/User.php";

    $user = new User;
    if(isset($_POST['btnlogin'])){
        $email = sanitizer($_POST['email']);
        $pwd = sanitizer($_POST['pwd']);
        if(empty($email)|| empty($pwd)){
            $_SESSION['errormsg'] = "All fields are required";                                                                                                                                                                                                   
            header("location:../loginpage.php");
            exit();
       }
        $data = $user->login($email,$pwd); 
        if($data){
            $_SESSION['useronline'] = $data;
            header("location:../dashboard.php");
            exit();
        }else{
            header("location:../loginpage.php");
        }
    }else{
        $_SESSION['errormsg'] = "Please complete the form";
        header("location:../loginpage.php");
        exit();
    }
?>