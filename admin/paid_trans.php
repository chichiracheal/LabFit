<?php
session_start();
require_once "admin_guard.php";
require_once "partials/admin_header.php";
require_once "classes/Test.php";

$pay=new Test;
$p=$pay->get_all_payments();

?>


            
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Patients Transactions</h1>

                        <?php
                          if(isset($_SESSION['admin_feedback'])){
                            
                            print "<p class='alert alert-success'>". $_SESSION['admin_feedback'] ."</p>";

                                unset($_SESSION['admin_feedback']);
                               
                          }
                          
                          ?>

                       
                        <div class="card mb-4">
                            <div class="card-body2">
                           
                               &nbsp;&nbsp; 
                               <i class="fa-regular fa-bell"></i>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Payments <Details></Details>
                            </div>
                            <div class="row ">
                              <div class="col-md-12">
                               <table class="table table-sm table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Total Paid Amt</th>
      <th scope="col">Ref_code</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>


    <?php
    if(is_array($p)){
      $sn=1;

      foreach($p as $pay){
 

?>

      <tr>
        <th scope="row"><?php print $sn ?></th>
        <td><?php print $pay['Patient_fname'].' '. $pay['Patient_lname'] ?></td>
        <td><?php print $pay['Patient_email']?></td>
        <td><?php print $pay['Pay_amt'] ?></td>
        <td><?php print $pay['Pay_ref'] ?></td>
        <td><?php print $pay['Pay_date'] ?></td>
        <td><a href="edit_pay.php?id=<?php print $pay['Pay_id'] ?>" 
        class="btn btn-sm btn-primary mb-1" >Edit Status</a></td> 
        
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