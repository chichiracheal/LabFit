<?php
session_start();
error_reporting(E_ALL);
require_once "../classes/General.php";
require_once "../classes/Test.php";


if($_POST['btnadd']){
    $name = General::sanitize($_POST['title']);
    $dept = $_POST['level'];
    $description = $_POST['des'];
    $amount = $_POST['amount'];
    $file = $_FILES['file'];
    //validate the form to ensure that fields are not empty
    $errors = [];
    if(empty($name)){
       array_push($errors,"Please specify the test name");
    }
    if(empty($dept)){
        array_push($errors,"Please specify the department");
     }
     if($_FILES['file']['name']==""){
        array_push($errors,"Please select a file to upload");
     }
     if($errors){
        $_SESSION['admin_errormsg'] = $errors;
        header("location:../addtest.php");
        exit();
     }
     else{
        $test = new Test;
        $chk=$test->add_newtest($name,$dept,$description,$amount,$file);

        if($chk){
            header("location:../breakout.php");
            exit();
        }else{
            header("location:../addtest.php");// display $_SESSION ['admin_errormsg']
            //within addtopic.php
        }
    }
}else{
    $_SESSION['admin_errormsg'] = "Please complete the form";
    header("location:../addtest.php");
    exit();
}

?>