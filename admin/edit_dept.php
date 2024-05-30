<?php
session_start();
require_once "partials/admin_header.php";
require_once "classes/Test.php";

$test = new Test;

if(isset($_GET["id"])){
    $tdetails = new Test;
    $det = $tdetails->get_dept_by_id($_GET["id"]);
   
}else{
    header("location:../dept.php");
}
?>
                <main>
                   

  <div class="container-fluid px-4">
                        
                        <ol class="breadcrumb mb-4">
                            
                              <li class="breadcrumb-item active"><a href="dept.php">All Departments</a></li>
                              <li class="breadcrumb-item active">Edit Department</li>
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
        <form action="process/process_editdept.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="title" class="form-label">Department</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $det['dept_name'];?>">
             
          </div>
          
          <input type="hidden" name="id" value="<?php echo $det["dept_id"];  ?>">

          <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="btnadd" value="Add" >Update Dept!</button>
          </div>
          
         
          
        </form>


                          </div>
                      </div>
                        
                    </div>


                </main>
                <?php

require_once "partials/admin_footer.php";

?>
