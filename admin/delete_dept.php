<?php

require_once "classes/Test.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $del1 = new Test;
    $response = $del1->delete_dept($id);

    if($response){
        echo "Deleted successfully";
        header("location:dept.php");
        exit();
    }else{
        echo "sorry unable to delete department";
    }
}



?>