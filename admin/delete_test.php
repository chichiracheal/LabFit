<?php

require_once "classes/Test.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $del1 = new Test;
    $response = $del1->delete_test($id);

    if($response){
        echo "Deleted successfully";
    }else{
        echo "sorry unable to delete";
    }
}



?>