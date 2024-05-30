<?php
session_start();
require_once "admin_guard.php";
require_once "partials/admin_header.php";
require_once "classes/Test.php";

$apptt=new Test;
$a=$apptt->get_all_appts();
// $r=$appt->get_all_results();
?>


            
                <main>
                    <div class="container-fluid px-4">
                      

                        <?php
                          if(isset($_SESSION['admin_feedback'])){
                            
                            print "<p class='alert alert-success'>". $_SESSION['admin_feedback'] ."</p>";

                                unset($_SESSION['admin_feedback']);
                               
                          }
                          
                          ?>

                       
                        <div class="card my-4">
                         
                               <h3>Appointments List</h3>
                           
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Patient's Appointments
                            </div>
                            <div class="row ">
                              <div class="col-md-12">
                               <table class="table table-sm table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Pat Name</th>
      <th scope="col">Pat Email</th>
      <th scope="col">Pat Gender</th>
      <th scope="col">Test Id</th>
      <th scope="col">Appt Date</th>
      <th scope="col">Appt Time</th>
      <th scope="col">Appt Status</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
      <?php
  // if(!isset($r)){
    
  // }

?>
      <th scope="col">Result</th>

    </tr>
  </thead>
  <tbody>
    <tr>


    <?php
    if(is_array($a)){
      $sn=1;

      foreach($a as $appt){
 

?>

      <tr>
        <th scope="row"><?php print $sn ?></th>
        <td><?php print $appt['Patient_fname'].' '. $appt['Patient_lname'] ?></td>
        <td><?php print $appt['Patient_email'] ?></td>
        <td><?php print $appt['Patient_gender'] ?></td>
        <td><?php print $appt['Appt_test_id']?></td>
        <td><?php print $appt['Appt_date'] ?></td>
        <td><?php print $appt['Appt_time'] ?></td>
        <td><?php print $appt['Appt_status'] ?></td>
        <td><?php print $appt['Appt_note'] ?></td>
        <td>
        <a href="edit_appt.php?id=<?php print $appt['Appt_id'] ?>" class="btn btn-sm btn-outline-primary mb-2">View detail</a>
        <a onclick="return confirm('Are you sure you want to delete?')"
        href="delete_appt.php?id=<?php print $appt['Appt_id'] ?>" class="btn btn-sm btn-danger">Delete</a></td> 
        <td><?php
            $statss = $apptt->get_result_by_id($appt['Appt_id']);
            if(empty($statss)){         
           
        ?>
          
        
        <a href="result.php?id=<?php print $appt['Appt_id'] ?>" class="btn btn-sm btn-outline-primary mx-2">Upload</a><?php
       }else{
        echo "<p class='btn btn-success'>Uploaded</p>";
       } ?></td>
      </tr>





     <?php   
     $sn++;

      }


    }
    
    
    ?>

 </tbody>
</table>
</div>
                            </div>
                        </div>
                    </div>
                </main>
                
    
                <?php
                
                require_once "partials/admin_footer.php";
                
                ?>