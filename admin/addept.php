<?php
session_start();
require_once "partials/admin_header.php";
require_once "classes/Test.php";

$test = new Test;

?>
                <main>
                   

  <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Department</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                              <li class="breadcrumb-item active"><a href="breakout.php">All Departments</a></li>
                              <li class="breadcrumb-item active">Add Department</li>
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
        <form action="process/process_addept.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Departments</label>
            <input type="text" class="form-control" id="title" name="title">
             
          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="btnadd" value="Add" >Add</button>
          </div>
          
        </form>


                          </div>
                      </div>
                        
                    </div>


                </main>
                <?php

require_once "partials/admin_footer.php";

?>
