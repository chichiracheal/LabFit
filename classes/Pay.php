<?php
require_once "Db.php";
class Pay extends Db{

    public function add($id){
        if(isset($_SESSION['appointment'])){
            array_push($_SESSION['appointment'],$id);
        }else{
            $_SESSION['appointment'] = [];
            array_push($_SESSION['appointment'],$id);
        }
    }

    public function payroll($id){
        if(isset($_SESSION['appointment'])){
            if(array_key_exists($id,$_SESSION['appointment'])){
                $existing_qty = $_SESSION['appointment'][$id];
                $_SESSION['appointment'][$id] = $existing_qty + 1;
            }else{
                $_SESSION['appointment'][$id] = 1;
            }
        }else{
            $_SESSION['appointment'][$id] = 1;
            
        }
    }
   
}

?>