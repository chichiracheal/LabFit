<?php
session_start();
error_reporting(E_ALL);
require_once "user_guard.php";
require_once "classes/User.php";
require_once "classes/Pay.php";
$id = isset($_GET['id'])?$_GET['id'] : 0;

if($id){
    $py = new Pay;
    $py->payroll($id);
    header("location:payall.php");
}else{
    header("location:appt_detail.php");
    exit();
}
?>