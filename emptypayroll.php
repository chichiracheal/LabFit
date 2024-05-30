<?php
session_start();
unset($_SESSION['appointment']);
header("location:payall.php");
        

?>