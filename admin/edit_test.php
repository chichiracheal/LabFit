<?php
session_start();
require_once "partials/admin_header.php";
require_once "classes/Test.php";

$test = new Test;
$tests = $test->fetch_depts();

if(isset($_GET["id"])){
    $tdetails = new Test;
    $det = $tdetails->get_test_by_id($_GET["id"]);
 
}else{
    header("location:../breakout.php");
}
?>
                <main>
                   

  <div class="container-fluid px-4">
                        
                        <ol class="breadcrumb mb-4">
                            
                              <li class="breadcrumb-item active"><a href="breakout.php">All Test</a></li>
                              <li class="breadcrumb-item active">Edit Test</li>
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
        <form action="process/process_edittest.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="title" class="form-label">Test</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $det['Test_name'];?>">
             
          </div>
          <div class="mb-3">
            <label for="level" class="form-label">Department</label>
           <select name="level" id="level" class="form-control">
            <option value="">Select One</option>
            <?php
            foreach($tests as $ts){
                $deptname = $ts['dept_name'];
                $deptid = $ts['dept_id'];
                $curdept =$deptid==$det["Test_dept"]? "selected" : "";
            echo "<option value='$deptid'$curdept>$deptname</option>";
            }
            ?>
           </select>
          </div>
           
          
          <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $det['Test_amt'];?>">
             
          </div>
          
          <input type="hidden" name="id" value="<?php echo $det["Test_id"];  ?>">

          <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="btnadd" value="Add" >Update Test</button>
          </div>
          
         
          
        </form>


                          </div>
                      </div>
                        
                    </div>


                </main>
                <?php

require_once "partials/admin_footer.php";

?>
