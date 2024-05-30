<?php
error_reporting(E_ALL);
require_once "Db.php";

class Transaction extends Db{
    private $dbconn;

    public function __construct(){
        $this->dbconn = $this->connect();
    }

    public function get_transaction_byref($ref){
        $query = "SELECT * FROM transaction JOIN trans_details ON trans_id=det_transid JOIN appointment ON trans_details.appt_id = appointment.Appt_id WHERE trans_ref=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$ref]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
  

    public function get_transaction_amt($ref){
        $query = "SELECT trans_totamt FROM transaction WHERE trans_ref=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$ref]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $amt= $result['trans_totamt'];
        return $amt;
    }

    public function get_appt_amt($id){
        $query = "SELECT Test_amt FROM tests JOIN appointment ON Test_id=Appt_test_id WHERE Appt_id=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $amt= $result['Test_amt'];
        return $amt;
    }
    
    public function insert_transaction($ref,$userid,$appt){
        $query = "INSERT INTO transaction(trans_ref,trans_by) VALUES(?,?)";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$ref,$userid]);
        $id = $this->dbconn->lastInsertId();

        //insert into transaction details table
        $amount = 0;
        foreach($appt as $apptid=>$qty){
            $test_amt = $this->get_appt_amt($apptid);
        $query2 = "INSERT INTO trans_details(appt_id,det_amt,det_transid,det_qty) VALUES(?,?,?,?)";
        $stmt2 = $this->dbconn->prepare($query2);
        $stmt2->execute([$apptid, $test_amt,$id,$qty]);
        $amount = $amount + $test_amt*$qty;
        }
        $query3 = "UPDATE transaction SET trans_totamt=? WHERE trans_id=?";
        $stmt3 = $this->dbconn->prepare($query3);
        $stmt3->execute([$amount,$id]);
        
   

    $query4="INSERT INTO payments(Pay_by,Pay_amt,Pay_ref,Pay_transid) VALUES (?,?,?,?)";
    $stmt = $this->dbconn->prepare($query4);
    $result= $stmt->execute([$userid,$amount,$ref,$id]);
    return $id;

}

    public function update_payment_status($status,$id){
        $query = "UPDATE `payments` SET `Pay_status` = ? WHERE `payments`.`Pay_id` = ?";
        $stmt3 = $this->dbconn->prepare($query);
        $stmt3->execute([$status,$id]);
        return $id;
    }
}
?>