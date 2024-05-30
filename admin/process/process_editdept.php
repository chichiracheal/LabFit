<?php
session_start();
require_once "../classes/General.php";
require_once "../classes/Test.php";
if(isset($_POST["btnadd"])){
    $name = General::sanitize($_POST['title']);
    $id = $_POST["id"];
    //validate

    //instantiate
    $ts1 = new Test;
    $response = $ts1->update_dept($name,$id);
    if($response){
        header("location:../dept.php");
        exit();
    }else{
        echo "unable to update department";
    }
}


?>