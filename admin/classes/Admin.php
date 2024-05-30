<?php
    require_once "Db.php";
    class Admin extends Db
    {
        private $dbconn;
        public function __construct()
        {
            $this->dbconn = $this->connect();
        }
        public function admin_logout(){
            unset($_SESSION['admin_online']);
            session_destroy();
            header("location:index.php");
            exit();
        }
        public function admin_login($username,$email,$password){
            try{
    
                $query = "SELECT * FROM admin WHERE Admin_username=?";
                $stmt =$this->dbconn->prepare($query);
                $result = $stmt->execute([$username]);
                $record = $stmt->fetch(PDO::FETCH_ASSOC);
                if($record){
                    $hashed = $record['Admin_password'];
                    $chk = password_verify($password,$hashed);
                    if($chk){
                        $_SESSION['admin_online'] = $record['Admin_id'];
                        return 1;
                    }else{
                        $_SESSION['admin_errormsg'] = "Invalid credentials"; 
                        return 0; 
                    }
                }else{
                    $_SESSION['admin_errormsg'] = "Invalid credentials"; 
                    return 0; 
                 }
            }catch(PDOException $p){
                $SESSION['admin_errormsg'] = $p->getMessage();
                return 0;
            }catch(Exception $e){
                $SESSION['admin_errormsg'] = $e->getMessage();
                return 0;
            }
        }
        public function insert_message($name, $email,$message){
            $sql = "INSERT INTO messages(msg_fullname, msg_email,msg_content) VALUES(?, ?,?)";
            $stmt = $this->dbconn->prepare($sql);
            $response = $stmt->execute([$name, $email,$message]);    
            return $response;
        
    }
    public function fetch_messages(){
        $sql = "SELECT * FROM messages";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $response;
    }
    }
    
       
      







?>