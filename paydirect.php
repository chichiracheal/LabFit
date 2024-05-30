<?php
session_start();
require_once "user_guard.php";
require_once "classes/Paystack.php";
require_once "classes/Transaction.php";
require_once "classes/User.php";

$pay = new Paystack;
$trans = new Transaction;
$reference = isset($_SESSION['refno'])? $_SESSION['refno']: 0;
 //$reference = isset($_GET['reference'])? $_GET['reference']: 0;
// print_r($reference);
$data = $trans->get_transaction_byref($reference);
$confirmation_from_paystack = $pay->paystack_verify($reference);

   $id=$data2['trans-id'];
if($confirmation_from_paystack ){                                                          
$data2= $trans->update_payment_status("paid",$id);                                                                                                  
    $_SESSION['feedback'] = '<div class="alert alert-success"> Payment completed successfully</div>';
    header("location:trans_history.php");
    exit();                          
   
}else{
  $data2= $trans->update_payment_status("failed",$id);   
$_SESSION['errormsg'] = "Invalid Transaction ID Supplied";
header("location:payall.php");
exit();                         
}                                   
?>