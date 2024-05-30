<?php

    error_reporting(E_ALL);
    require_once('Db.php');

    class User extends Db
    {
        private $dbconn;

        public function __construct()
        {
            $this->dbconn = $this->connect();
        }

        public function get_all_tests(){
            $query = "SELECT * FROM tests";
            $stmt = $this->dbconn->prepare($query);
            $stmt->execute();
            $record = $stmt->fetchAll();
            return $record;
        }
        public function login($email,$password){
            try{
                $query = "SELECT * FROM patients WHERE Patient_email=? LIMIT 1";
                $stmt = $this->dbconn->prepare($query);
                $stmt->execute([$email]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
               if($result){
                $hashed = $result['Patient_password'];
                $chk = password_verify($password,$hashed); 
                if($chk){
                    return $result['Patient_Id'];
                }else{
                    $_SESSION['errormsg'] = "Invalid credential"; 
                    return 0;
                }
               }else{
                $_SESSION['errormsg'] = "Invalid credentials";
                return 0;
               }
            
            }catch(Exception $e){
                $_SESSION['errormsg'] = "An Error Occurred";
                return 0;
            }
        }
        public function get_user_by_id($id){
            try{
                $query = "SELECT * FROM patients WHERE Patient_Id =?";
                $stmt = $this->dbconn->prepare($query);
                $stmt->execute([$id]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
            }catch(PDOException $e){
                $_SESSION['errormsg']= $e->getMessage();
                return 0;
            }catch(Exception $e){
                $_SESSION['errormsg'] = "An Error Occurred";
                return 0;
            }
        }
        public function logout(){
            session_unset();
            session_destroy();
        }
         public function insert_user($fname,$lname,$email,$gender,$dob,$phone,$pwd){
            try{
               
                $query = "INSERT INTO patients(Patient_fname,Patient_lname,Patient_email,Patient_gender,Patient_dob,Patient_phone,Patient_password) VALUES(?,?,?,?,?,?,?)";
                $stmt = $this->dbconn->prepare($query);
                $hashed = password_hash($pwd,PASSWORD_DEFAULT);
                $result = $stmt->execute([$fname,$lname,$email,$gender,$dob,$phone,$hashed]);
                $id = $this->dbconn->lastInsertId();
                return $id;
            }
            catch(PDOException $e){
                $_SESSION['errormsg'] = "An Error Occurred";
                return 0;
            }
            catch(Exception $e){
                $_SESSION['errormsg'] = "An Error Occurred";
                return 0;
            }
         }

       
    public function update_profile($fname,$mname,$lname,$gender,$dob,$phone,$id){
        $sql = "UPDATE patients SET Patient_fname =?,Patient_mname=?,Patient_lname=?,Patient_gender=?,Patient_dob=?,Patient_phone=? WHERE Patient_Id =?";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute([$fname,$mname,$lname,$gender,$dob,$phone,$id]);
        $res = $stmt->execute([$fname,$mname,$lname,$gender,$dob,$phone,$id]);
        return $res;
    }

    public function get_all_appts($id){
        $query = "SELECT * FROM appointment JOIN tests ON Test_id = Appt_test_id Where Appt_by=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$id]);
        $record = $stmt->fetchAll();
        return $record;
    }

    public function get_all_trans($id){
        $query = "SELECT * FROM transaction JOIN payments ON Pay_transid = trans_id Where trans_by=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$id]);
        $record = $stmt->fetchAll();
        return $record;
    }

    public function get_all_results($id){
        $query = "SELECT * FROM result JOIN appointment ON Appt_id = Res_appt_id Where Appt_by=?";
        $stmt = $this->dbconn->prepare($query);
        $stmt->execute([$id]);
        $record = $stmt->fetchAll();
        return $record;
    }
   
    }

?>