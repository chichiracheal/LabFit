<?php
session_start();
require_once "../classes/General.php";
require_once "../classes/Test.php";
if(isset($_POST["btnadd"])){
    
    $test =($_POST['test']);
    $adate =($_POST['appt']);
    $time =($_POST['time']);
    $status =($_POST['status']);
    $msg =($_POST['message']);
    $alltest = implode(",",$test);
    $id = $_POST["id"];
    //validate

    //instantiate
    $apt1 = new Test;
    $response = $apt1->update_appt($alltest,$adate,$time,$status,$msg,$id);
    if($response){
        header("location:../admin_apptlist.php");
        exit();
    }else{
        header("location:../edit_appt.php");
        exit();
    }
}


?>