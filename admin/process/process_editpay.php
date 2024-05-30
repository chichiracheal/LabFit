<?php
session_start();
require_once "../classes/General.php";
require_once "../classes/Test.php";
if(isset($_POST["btnadd"])){
    $status =($_POST['status']);
    $id = $_POST["id"];
    
    $pay1 = new Test;
    $response = $pay1->update_pay($status,$id);
    if($response){
        header("location:../paid_trans.php");
        exit();
    }else{
        header("location:../edit_pay.php");
        exit();
    }
}


?>