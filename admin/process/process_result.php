<?php
session_start();
error_reporting(E_ALL);
require_once "../classes/General.php";
require_once "../classes/Test.php";


if($_POST['btnadd']){
    $pre = $_FILES['prescription'];
    $file = $_FILES['file'];
    $id = $_POST['id'];
    //validate the form to ensure that fields are not empty
    $errors = [];
    
     if($_FILES['file']['name']==""){
        array_push($errors,"Please select a file to upload");
     }
     if($errors){
        $_SESSION['admin_errormsg'] = $errors;
        header("location:../result.php");
        exit();
     }
     else{
        $res = new Test;
        $chk=$res->add_result($id,$pre,$file);
        // var_dump($chk);
        // die();
        if($chk){
            header("location:../admin_apptlist.php");
            exit();
        }else{
            $_SESSION['admin_errormsg'] = "Fail to upload files";
            header("location:../result.php");
        }
    }
}else{
    $_SESSION['admin_errormsg'] = "Please complete the form";
    header("location:../result.php");
    exit();
}

?>