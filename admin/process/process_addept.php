<?php
session_start();
error_reporting(E_ALL);
require_once "../classes/General.php";
require_once "../classes/Test.php";


if($_POST['btnadd']){
    $name = General::sanitize($_POST['title']);
   
    //validate the form to ensure that fields are not empty
    $errors = [];
    if(empty($name)){
       array_push($errors,"Please specify the dept name");
    }
    
     if($errors){
        $_SESSION['admin_errormsg'] = $errors;
        header("location:../addept.php");
        exit();
     }
     else{
        $test = new Test;
        $chk=$test->add_newdept($name);

        if($chk){
            header("location:../dept.php");
            exit();
        }else{
            header("location:../addept.php");// display $_SESSION ['admin_errormsg']
            //within addtopic.php
        }
    }
}else{
    $_SESSION['admin_errormsg'] = "Please complete the form";
    header("location:../addept.php");
    exit();
}

?>