<?php
session_start();
require_once "admin_guard.php";
require_once "partials/admin_header.php";
require_once "classes/Test.php";



$test=new Test;
$t=$test->get_all_tests();

?>


           
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Tests</h1>

                        <?php
                          if(isset($_SESSION['admin_feedback'])){
                            
                            print "<p class='alert alert-success'>". $_SESSION['admin_feedback'] ."</p>";

                                unset($_SESSION['admin_feedback']);
                               
                          }
                          
                          ?>

                       
                        <div class="card mb-4">
                            <div class="card-body2">
                           
                               &nbsp;&nbsp; <a href="addtest.php" class="btn btn-outline-primary">Add New Test</a>
                               <i class="fa-regular fa-bell"></i>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Tests Added
                            </div>
                            <div class="row ">
                              <div class="col-md-12">
                               <table class="table table-sm table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Amount</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <tr>


    <?php
    if(is_array($t)){
      $sn=1;

      foreach($t as $test){


?>

      <tr>
        <th scope="row"><?php print $sn ?></th>
        <td><?php print $test['Test_name'] ?></td>
        <td><?php print $test['Test_description']?></td>
        <td><?php print $test['Test_amt'] ?></td>
        <td><img src="uploads/<?php print $test['Test_image'] ?>" height="40"></td>
        <td><a href="edit_test.php?id=<?php print $test['Test_id'] ?>" 
        class="btn btn-sm btn-outline-primary mb-1" >Edit</a> 
        <a onclick="return confirm('Are you sure you want to delete?')"
        href="delete_test.php?id=<?php print $test['Test_id'] ?>" class="btn btn-sm btn-danger">Delete</a> 
      </td>
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