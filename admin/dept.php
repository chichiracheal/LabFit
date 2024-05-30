<?php
session_start();
require_once "admin_guard.php";
require_once "partials/admin_header.php";
require_once "classes/Test.php";



$dept=new Test;
$d=$dept->get_all_depts();

?>


          
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Departments</h1>

                        <?php
                          if(isset($_SESSION['admin_feedback'])){
                            
                            print "<p class='alert alert-success'>". $_SESSION['admin_feedback'] ."</p>";

                                unset($_SESSION['admin_feedback']);
                               
                          }
                          
                          ?>

                       
                        <div class="card mb-4">
                            <div class="card-body2">
                           
                               &nbsp;&nbsp; <a href="addept.php" class="btn btn-outline-primary">Add New Department</a>
                               <i class="fa-regular fa-bell"></i>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Departments Added
                            </div>
                            <div class="row ">
                              <div class="col-md-12">
                               <table class="table table-sm table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Name</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>


    <?php
    if(is_array($d)){
      $sn=1;

      foreach($d as $dept){


?>

      <tr>
        <th scope="row"><?php print $sn ?></th>
        <td><?php print $dept['dept_name'] ?></td>
       
        <td><a href="edit_dept.php?id=<?php print $dept['dept_id'] ?>" 
        class="btn btn-sm btn-outline-primary mb-1" >Edit</a> 
        <a onclick="return confirm('Are you sure you want to delete?')"
        href="delete_dept.php?id=<?php print $dept['dept_id'] ?>" class="btn btn-sm btn-danger">Delete</a> 
        
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