<?php
session_start();
require_once "partials/admin_header.php";
require_once "classes/Test.php";

$test = new Test;
$tests = $test->fetch_tests();
if(isset($_GET["id"])){
    $tdetails = new Test;
    $det = $tdetails->get_appt_by_id($_GET["id"]);
  
}else{
    header("location:../breakout.php");
}
?>
                <main>
                   

  <div class="container-fluid px-4">
                        
                        <ol class="breadcrumb mb-4">
                           
                              <li class="breadcrumb-item active">Update Appointment</li>
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
        <form action="process/process_editappt.php" method="post" enctype="multipart/form-data">

        <h3>Appointment Form</h3>
   
       
    <div class="col-md-6 mb-3">
        <label for="lname">Available Test</label>
        
       
           <?php   
           $dett = explode(",", $det["Appt_test_id"]); 
          
foreach($tests as $test){
  $testname = $test["Test_name"];
  $testid = $test["Test_id"];
  $testamt = number_format($test['Test_amt'],2);
  


 if(isset($testid)){

    if($testid==$det["Appt_test_id"] || in_array($test["Test_id"], $dett)){
        echo "<br> <input type='checkbox' name='test[]' value='$testid' checked>$testname = &#8358;$testamt  <br>";

    }
 
}
}
?>
           </select>
       </div>

   
    <div class="form-group col-md-4 mt-4" id="add">
                  <label for="appt">Appointment Date</label>
                      <input type="date" name="appt" id="appt"  value="<?php echo $det['Appt_date'];?>" placeholder="Appointment date" class="form-control border-success noround">
                      
                  </div>

                  <div class="form-group col-md-4 mt-4" id="add">
                  <label for="time">Appointment Time</label>
                      <input type="time" name="time" id="time"  value="<?php echo $det['Appt_time'];?>" placeholder="Appointment date" class="form-control border-success noround">
                      
                  </div>

                  <div class="form-group col-md-4 mt-4" id="add">
                  <label for="status">Status</label>
                      <select name="status" id="status" value="<?php echo $det["Appt_status"];  ?>" class="form-control form-control-sm form-control-border" >
							<option >Select status</option>
                          <option>Confirmed</option>
                          <option >Declined</option>
                          <option >Completed</option>
                      </select>

                  </div>
        
                  <div class="form-group col-md-4 mt-4">
                  <label for="remark">Remark</label>
					<textarea name="message" id="" class="border-success noround"  value="" cols="30" rows="5" placeholder="Type your Message here..."></textarea>
					
				</div>

   <hr>
   

   <input type="hidden" name="id" value="<?php echo $det["Appt_id"];  ?>">

          <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="btnadd" value="Add" >Update!</button>
          </div>
          
         
          
        </form>


                          </div>
                      </div>
                        
                    </div>


                </main>
                <?php

require_once "partials/admin_footer.php";

?>
