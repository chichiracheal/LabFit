<?php
session_start();
require_once "partials/admin_header.php";
require_once "classes/Test.php";

$test = new Test;
$depts = $test->fetch_depts();


?>
                <main>
                   

  <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Tests</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                              <li class="breadcrumb-item active"><a href="breakout.php">All Test</a></li>
                              <li class="breadcrumb-item active">Add Test</li>
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
        <form action="process/process_addtest.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Test </label>
            <input type="text" class="form-control" id="title" name="title">
             
          </div>
          <div class="mb-3">
            <label for="level" class="form-label">Department</label>
           <select name="level" id="level" class="form-control">
            <option value="">Select One</option>
            <?php
            foreach($depts as $d){
                $deptname = $d['dept_name'];
                $deptid = $d['dept_id'];
            echo "<option value='$deptid'>$deptname</option>";
            }
            ?>
           </select>
          </div>
          <div class="mb-3">
            <label for="des" class="form-label">Description </label>
            <input type="text" class="form-control" id="des" name="des">
             
          </div>
         
          <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="text" class="form-control" id="amount" name="amount">
             
          </div>
          <div class="mb-3">
            <label class="form-label" for="customFile">Upload Image</label>
            <input type="file" class="form-control" name="file" id="customFile">
          </div>
          
          <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="btnadd" value="Add" >Add Test</button>
          </div>
          
         
          
        </form>


                          </div>
                      </div>
                        
                    </div>


                </main>
                <?php

require_once "partials/admin_footer.php";

?>
