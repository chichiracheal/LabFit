<?php
session_start();
require_once "../classes/General.php";
require_once "../classes/Test.php";
if(isset($_POST["btnadd"])){
    $name = General::sanitize($_POST['title']);
    $dept = $_POST['level'];
    $description = $_POST['des'];
    $amount = $_POST['amount'];
    $id = $_POST["id"];
    //validate

    //instantiate
    $ts1 = new Test;
    $response = $ts1->update_test($name,$dept,$description,$amount,$id);
    if($response){
        header("location:../breakout.php");
        exit();
    }else{
        echo "unable to update test";
    }
}


?>