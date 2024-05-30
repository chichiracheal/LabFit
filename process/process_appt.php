<?php
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("localhost","root","","lab_fit");

require_once "../user_guard.php";
require_once "../classes/User.php";
require_once "../classes/utilities.php";

    if(isset($_POST['btnsubmit'])){
             $id = $_POST["id"];
            $test =$_POST['test'];
            $adate =$_POST['appt'];
            $time =$_POST['time'];
            $status =$_POST['status'];
            $msg = sanitizer($_POST['message']);

            foreach($test as $alltest){
            
             $query = "INSERT INTO `appointment` (`Appt_by`, `Appt_test_id`, `Appt_date`, `Appt_time`,`Appt_status`,`Appt_note`)
                 VALUES ('$id','$alltest','$adate','$time','$status','$msg')";
                $sql1 = mysqli_query($con,$query);

            }
            if($sql1){
                $_SESSION['feedback'] = '<div class="alert alert-success"> Appointment maked successfully</div>';
                 header("location:../appointment.php");
                 exit();
            }else{
                $_SESSION['errormsg'] = '<div class="alert alert-danger">Fail to make appointment</div>';
                    header("location:../appointment.php");
                   exit();
            }


     }else{
         $_SESSION['errormsg'] = "Please complete the form";
         header("location:../appointment.php");
         exit();
    }

?>