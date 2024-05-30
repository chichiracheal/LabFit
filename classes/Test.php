<?php
error_reporting(E_ALL);
require_once "Db.php";

class Test extends Db{
    private $dbconn;

    public function __construct(){
        $this->dbconn = $this->connect();
    }

    public function fetch_depts(){
        $sql = "SELECT * FROM departments";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetchAll();
        return $record;
    }

    public function fetch_tests(){
        $sql = "SELECT * FROM tests";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetchAll();
        return $record;
    }

    public function fetch_appts(){
        $sql = "SELECT * FROM departments";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetchAll();
        return $record;
    }

    public function get_all_tests(){
        $query = "SELECT * FROM tests";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute();
        $record = $stmt->fetchAll();
        return $record;
    }

    public function get_all_depts(){
        $query = "SELECT * FROM departments";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute();
        $record = $stmt->fetchAll();
        return $record;
    }

    public function get_all_patients(){
        $query = "SELECT * FROM patients";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute();
        $record = $stmt->fetchAll();
        return $record;
    }

    public function get_all_appts(){
        $query = "SELECT * FROM appointment JOIN patients JOIN tests ON Patient_Id=Appt_by AND Test_id = Appt_test_id";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute();
        $record = $stmt->fetchAll();
        return $record;
    }


    public function add_newtest($name,$dept,$description,$amount,$file){
       $original = $file['name'];
       $temp=$file['tmp_name'];
       $r = explode(".",$original);

       $newname = time().rand().".".end($r);
        move_uploaded_file($temp,"../uploads/$newname");

        //insert into db
        try{
        $query = "INSERT INTO tests(Test_name,Test_dept,Test_description,Test_amt,Test_image) VALUES(?,?,?,?,?)";
        $stmt = $this->dbconn->prepare($query);
        $result = $stmt->execute([$name,$dept,$description,$amount,$newname]);
        $_SESSION['admin_feedback']= "$name successfully added";
        return $result;
        }catch(Exception $e){
            $_SESSION['admin_errormsg']=$e->getMessage();
            return 0;
        }
  
    }


    public function add_result($id,$pre,$file){
        $original = $pre['name'];
       $temp=$pre['tmp_name'];
       $p = explode(".",$original);

       $new = time().rand().".".end($p);
        move_uploaded_file($temp,"../uploads/$new");

       $original = $file['name'];
       $temp=$file['tmp_name'];
       $r = explode(".",$original);

       $newname = time().rand().".".end($r);
        move_uploaded_file($temp,"../uploads/$newname");

        //insert into db
        try{
            
        $query = "INSERT INTO result(Res_appt_id,Doc_comment,Result_img) VALUES(?,?,?)";
        $stmt = $this->dbconn->prepare($query);
        $result = $stmt->execute([$id,$new,$newname]);
        $_SESSION['admin_feedback']= "result successfully uploaded";
        return $result;
        }catch(Exception $e){
            $_SESSION['admin_errormsg']=$e->getMessage();
            return 0;
        }
   
    }


    public function add_newdept($name){
       
        //insert into db
        try{
        $query = "INSERT INTO departments(dept_name) VALUES(?)";
        $stmt = $this->dbconn->prepare($query);
        $result = $stmt->execute([$name]);
        $_SESSION['admin_feedback']= "$name successfully added";
        return $result;
        }catch(Exception $e){
            $_SESSION['admin_errormsg']=$e->getMessage();
            return 0;
        }
    
    }

    //to delete
    public function delete_test($id){
        $query = "DELETE FROM tests WHERE Test_id=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$id]);
        $res = $stmt->execute([$id]);
        return $res;
    }

    //to delete
    public function delete_dept($id){
        $query = "DELETE FROM departments WHERE dept_id=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$id]);
        $res = $stmt->execute([$id]);
        return $res;
    }

     //to delete patients
     public function delete_pat($id){
        $query = "DELETE FROM patients WHERE Patient_Id=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$id]);
        $res = $stmt->execute([$id]);
        return $res;
    }


    //to edit
    public function get_test_by_id($id){
        $query = "SELECT * FROM tests WHERE Test_id=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

     //to edit
     public function get_appt_by_id($id){
        $query = "SELECT * FROM appointment WHERE Appt_id=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    public function get_user_appts($id){
        $query = "SELECT * FROM appointment JOIN tests ON Appt_test_id =Test_id WHERE Appt_id=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$id]);
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        return $record;
    }

     //to edit dept
     public function get_dept_by_id($id){
        $query = "SELECT * FROM departments WHERE dept_id=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //a method to update test
    public function update_test($name,$dept,$description,$amount,$id){
        $sql = "UPDATE tests SET Test_name =?,Test_dept=?, Test_description=?, Test_amt=? WHERE Test_id =?";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute([$name,$dept,$description,$amount,$id]);
        $res = $stmt->execute([$name,$dept,$description,$amount,$id]);
        return $res;
    }

    
    //a method to update appt
    public function update_appt($alltest,$adate,$time,$status,$msg,$id){
        $sql = "UPDATE appointment SET Appt_test_id =?,Appt_date=?, Appt_time=?, Appt_status=?, Appt_remark=? WHERE Appt_id =?";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute([$alltest,$adate,$time,$status,$msg,$id]);
        $res = $stmt->execute([$alltest,$adate,$time,$status,$msg,$id]);
        return $res;
    }

    

    public function update_dept($name,$id){
        $sql = "UPDATE departments SET dept_name =? WHERE dept_id =?";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute([$name,$id]);
        $res = $stmt->execute([$name,$id]);
        return $res;
    }
}

?>