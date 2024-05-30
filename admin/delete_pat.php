<?php
session_start();
require_once "classes/Test.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $del1 = new Test;
    $response = $del1->delete_pat($id);

    if($response){
       $_SESSION['feedback'] = '<div class="alert alert-success"> Delete successfully</div>';
        header("location:patients.php");
        exit();
    }else{
        echo "sorry unable to delete";
        header("location:patients.php");
        exit();
    }
}



?>