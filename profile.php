<?php
  session_start();
  require_once "user_guard.php";
  require_once "classes/User.php";


  //for user to edit their profile
  $id = $_SESSION['useronline'];
  $user= new User;
  $deets= $user->get_user_by_id($id);

  
  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>User dashboard
		</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>
  



<div class="wrapper">


<div class="body-overlay"></div>

<?php
require_once "partials/dsidebar.php";
?>

        <div id="content">
		
		<?php
require_once "partials/topbar.php";
?>
			
			<div class="main-content">
			
		
                    <div class="container col-md-10 py-5">

     
<div class="content mt-2" style="background-color: white;padding:3em">
    <h3>Update Your Account</h3>
    <form enctype="multipart/form-data" method="post" action="process/process_profile.php">
     
   <div class="form-group row">
    <div class="col-md-6 mb-3">
        <label for="fname">First Name</label>
        <input class="form-control border-primary noround" id="fname" name="fname" value="<?php echo $deets["Patient_fname"];  ?>"required type="text"  >
    
    </div>
    <div class="col-md-6 mb-3">
        <label for="lname">Middle Name</label>
        <input class="form-control border-primary noround" id="mname" name="mname"value="<?php echo $deets["Patient_mname"];  ?>" required type="text"  >
    
    </div>
    <div class="col-md-6 mb-3">
        <label for="lname">Last Name</label>
        <input class="form-control border-primary noround" id="lname" name="lname"value="<?php echo $deets["Patient_lname"];  ?>" required type="text"  >
    
    </div>
</div>

    <div class="row">
                  <div class="form-group col-md-4 mt-4" id="add">
                  <label for="gender">Gender</label>
                      <select name="gender" id="gender" value="<?php echo $deets["Patient_gender"];  ?>" class="form-control form-control-sm form-control-border" >
							
                          <option>Male</option>
                          <option>Female</option>
                      </select>
                      
                  </div>
                  <div class="form-group col-md-4 mt-4" id="add">
                  <label for="dobe">Date of birth</label>
                      <input type="date" name="dob" id="dob" value="<?php echo $deets["Patient_dob"];  ?>" placeholder="(optional)" class="form-control form-control-sm form-control-border">
                      
                  </div>
                  <div class="form-group row">
    <div class="col-md-12 mb-3 mt-3">
        <label for="phone">Phone</label>
        <input class="form-control border-primary noround" id="phone" name="phone" value="<?php echo $deets["Patient_phone"];  ?>"required type="text" >
    
    </div>
</div>    
              </div>

   </div>
   <hr>

  
    <div class="mb-3"> 
      <input class="btn btn-primary" id="btnsubmit" name="btnsubmit" type="submit" value="Update Profile!">
      
    </div>
   
    </form>
 </div>


  </div>
                    </div>
                    </div>
                    </div>		
						
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; +LabFit2024</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>






	
  
    
   <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });


     
           
       
</script>
  
  



  </body>
  
  </html>









  