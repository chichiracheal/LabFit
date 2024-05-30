<?php
session_start();
  require_once "user_guard.php";
  require_once "classes/User.php";
 
  $user = new User;
  $data = $user->get_user_by_id($_SESSION['useronline']);

  $test = new User;
 $tests = $test->get_all_tests();

 
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
                <div class="container">
    <div class="row">
             <div class="col-md-12">
                
                <div class="row py-5 mt-5  animate__animated animate__backInLeft" style="background-color: rgba(0,0,0,0.7); height:inherit;" >
			<div class="col-md-6 py-5 text-center text-light"> 
				<h3 class="m-0">Tested Lab Experts</h3>
				<h1 style="font-family: Trirong, serif;">Latest Lab Technologies</h1>
				<div class="line my-4"></div>
				<p style="font-family: Sofia, sans-serif;">High-Quality & Reliable Laboratory Services</p>
				
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  				Make An Appointment
			</button>
			</div>
			<div class="col-md-6">
				<img src="assets/static/Images/bg5.webp" class="img-thumbnail" alt="hero img">

			</div>
		  </div>
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







	<!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




















	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appointment Form</h5>
        <div class="content " style="background-color: white;padding:">
    
    <?php
if(isset($_SESSION['errormsg'])){
  echo "<div class='alert alert-danger'>".$_SESSION['errormsg']."</div>";
  unset($_SESSION['errormsg']);
}

?>
   
 </div>
        <button type="button" class=" btn btn-close btn-primary" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <div class="row mb-3">
	
			
	</div>
     <form enctype="multipart/form-data" method="post" action="process/process_appt.php">
        <input type="hidden" name="id" value="<?php echo $_SESSION['useronline'];?>">
    <div class="col-md-10 mb-3">
        <label for="lname">Available Test</label>
        
       
           <?php
$con = mysqli_connect("localhost","root","","lab_fit");
$sql = "SELECT * FROM tests";
$sql1 = mysqli_query($con,$sql);
if(mysqli_num_rows($sql1)>0){
foreach($sql1 as $test){
  $testname = $test["Test_name"];
  $testid = $test["Test_id"];
  $testamt = number_format($test['Test_amt'],2);
 if(isset($testid)){

  echo "<br> <input type='checkbox' name='test[]' value='$testid'>  $testname = &#8358;$testamt  <br>";
 }
}
}else{
    echo "No available test";
}
?>
           </select>
       </div>

   
    <div class="form-group col-md-4 mt-4" id="add">
                  <label for="appt">Appointment Date</label>
                      <input type="date" name="appt" id="appt" value="" placeholder="Appointment date" class="form-control border-success noround">
                      
                  </div>

                  <div class="form-group col-md-4 mt-4" id="add">
                  <label for="time">Appointment Time</label>
                      <input type="time" name="time" id="time" value="" placeholder="Appointment date" class="form-control border-success noround">
                      
                  </div>

                  <div class="form-group col-md-4 mt-4">
					<input type="hidden" name="status" value="pending">
					
				</div>
        
                  <div class="form-group col-md-4 mt-4">
					<textarea name="message" id="" class="border-success noround" cols="30" rows="5" placeholder="Type your Message here..."></textarea>
					
				</div>

   <hr>

   <div class="mb-3"> 
      <button type="submit" name="btnsubmit"  class="btn btn-primary" >Submit Appointment</button>
      <a href="emptyappt.php" class="btn btn-danger">Cancel</a>
    </div>
</form>
   
   
    
      <div class="modal-footer">
       
       
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/static/bootstrap/js/bootstrap.bundle.min.js"></script>	
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