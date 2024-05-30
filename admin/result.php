<?php
session_start();
require_once "partials/admin_header.php";
require_once "classes/Test.php";

if(isset($_GET["id"])){
  $adetails = new Test;
  $det = $adetails->get_appt_by_id($_GET["id"]);
 
}else{
  //header("location:../result.php");
}
?>
                <main>
                   

  <div class="container-fluid px-4">
                        
                        <ol class="breadcrumb mb-4">
                            
                              
                              <li class="breadcrumb-item active">Edit Result</li>
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
        <form action="process/process_result.php" method="post" enctype="multipart/form-data">
         
         
          <div class="row">
            <div class="form-group col-md-12">
                <label for="prescription" class="control-label">Prescription <small><em>(If Any)</em></small></label>
                <input type="file" name="prescription" accept="application/msword, .doc, .docx, .txt, application/pdf" id="prescription" class="form-control form-control-border" >
            </div>
        </div>
          <div class="mb-3">
            <label class="form-label" for="customFile">Upload Result</label>
            <input type="file" class="form-control" name="file" id="customFile">
          </div>
          <input type="hidden" name="id" value="<?php echo $det["Appt_id"];  ?>">

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
