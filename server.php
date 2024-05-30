<?php
 require_once("admin/classes/Admin.php");
 
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(empty($fullname) || empty($email) || empty($message)){
        $resp = [
            "success" => false,
            "message" => "All Fields are required"
        ];
        echo json_encode($resp);
        die();
    }

   
    $insert = new Admin;
    $insertmsg = $insert->insert_message($fullname, $email,$message);
    if($insertmsg){
        $resp = [
            "success"=> true,
            "message"=> "Message Inserted Successfully"
        ] ;
        echo json_encode($resp);
    }else{  
        $resp = [ 
            "success"=> false,
            "message"=> "Message Insert Unssuccessfull Please Try Again"
        ];
        echo json_encode($resp);
    }
?>