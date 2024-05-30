<?php
session_start();
require_once "admin_guard.php";
require_once "partials/admin_header.php";
require_once "classes/Test.php";

$patient=new Test;
$p=$patient->get_all_patients();

?>


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Registered Patients</h1>

                        <?php
                          if(isset($_SESSION['admin_feedback'])){
                            
                            print "<p class='alert alert-success'>". $_SESSION['admin_feedback'] ."</p>";

                                unset($_SESSION['admin_feedback']);
                               
                          }
                          
                          ?>

                       
                        <div class="card mb-4">
                            <div class="card-body2">
                           
                               &nbsp;&nbsp; <a href="addpat.php" class="btn btn-outline-primary">Add Patients</a>
                               <i class="fa-regular fa-bell"></i>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Active Patients
                            </div>
                            <div class="row ">
                              <div class="col-md-12">
                               <table class="table table-sm table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Dob</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>


    <?php
    if(is_array($p)){
      $sn=1;

      foreach($p as $pat){
 

?>

      <tr>
        <th scope="row"><?php print $sn ?></th>
        <td><?php print $pat['Patient_fname'].' '. $pat['Patient_lname'] ?></td>
        <td><?php print $pat['Patient_email']?></td>
        <td><?php print $pat['Patient_gender'] ?></td>
        <td><?php print $pat['Patient_dob'] ?></td>
        <td><?php print $pat['Patient_phone'] ?></td>
        <td><a onclick="return confirm('Are you sure you want to delete?')"
        href="delete_pat.php?id=<?php print $pat['Patient_Id'] ?>" class="btn btn-sm btn-danger">Delete</a></td> 
        
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