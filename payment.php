<?php
session_start();
require_once "user_guard.php";
require_once "classes/User.php";
require_once "classes/Transaction.php";

$t = new Transaction;
if(isset($_SESSION['appointment']) && !empty($_SESSION['appointment'])){
    $ref = "Labfit" . time().rand();
    $_SESSION['refno'] = $ref;
    $trxid = $t->insert_transaction($ref,$_SESSION['useronline'], $_SESSION['appointment']);

    if($trxid){

        header("location:checkout.php");
        exit();
    }else{
        $_SESSION['errormsg'] = "Please try checking out again";
    header("location:payall.php");
    exit();
    }
}
else{
    $_SESSION['errormsg'] = "Please add to payroll";
    header("location:appt_detail.php");
    exit();
}

?>