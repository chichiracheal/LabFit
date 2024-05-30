<?php
error_reporting(E_ALL);


if(!isset($_SESSION['admin_online'])){
    $_SESSION['admin_errormsg']= "You need to login";
    header("location:index.php");
    exit();
}


?>