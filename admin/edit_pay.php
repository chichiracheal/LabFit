<?php
session_start();
require_once "partials/admin_header.php";
require_once "classes/Test.php";

$test = new Test;


if(isset($_GET["id"])){
    $tdetails = new Test;
    $det = $tdetails->get_pay_by_id($_GET["id"]);
 
}else{
    header("location:../paid_trans.php");
}
?>
                <main>
                   

  <div class="container-fluid px-4">
                        
                        <ol class="breadcrumb mb-4">
                            
                              <li class="breadcrumb-item active"><a href="breakout.php">Confirm payments</a></li>
                              <li class="breadcrumb-item active">Edit Payment Status</li>
                        </ol>
                      <div class="row">
                          <div class="col">
                <?php
                
                if(isset($_SESSION['admin_errormsg']) && is_array($_SESSION['admin_errormsg'])){
                    $errormsg = $_SESSION['admin_errormsg'];
                    foreach($errormsg as $error)
                    echo "<div class='alert alert-danger'>".$error."</div>";
                    unset($_SESSION['admin_errormsg']);
                    
                }
                if(isset($_SESSION['admin_errormsg']) && !is_array($_SESSION['admin_errormsg'])){
                    echo "<div class='alert alert-danger'>".$_SESSION['admin_errormsg']."</div>";
                    unset($_SESSION['admin_errormsg']);
                }
                ?>
        <form action="process/process_editpay.php" method="post" enctype="multipart/form-data">
          
          <div class="mb-3">
            <label for="status" class="form-label">Payment Status</label>
            <select name="status" id="status" value="<?php echo $det["Pay_status"];  ?>" class="form-control form-control-sm form-control-border" >
							<option >Select status</option>
                          <option>paid</option>
                          <option >failed</option>
                        
                      </select>
          </div>
           
          
          
          
          <input type="hidden" name="id" value="<?php echo $det["Pay_id"];  ?>">

          <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="btnadd" value="Add" >Update Status</button>
          </div>
          
         
          
        </form>


                          </div>
                      </div>
                        
                    </div>


                </main>
                <?php

require_once "partials/admin_footer.php";

?>
