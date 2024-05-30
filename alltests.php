<?php
session_start();
  require_once "user_guard.php";
  require_once "classes/User.php";

  $user = new User;
  $data = $user->get_user_by_id($_SESSION['useronline']);

  $test = new User;
 $t = $test->get_all_tests();

 
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
			
			
			
<div class="album py-5 " style="background: linear-gradient(45deg, #1192d7,#bbd1ea) ;
  ">
    <div class="container" id="testarea">
<div class="row">
	  
<div class="layout" id="breakout">
  
  <div class="container-fluid px-4 pt-5" id="custom-cards" style="background-color: white;">
   <div style="width:86%; margin:auto">
	<h2 class="heading" >All Available Tests</h2>

	<div class="row row-cols-1 row-cols-lg-4 align-items-stretch g-4 py-5">
	  <?php
		if(is_array($t)){
		  foreach($t as $test){
			$tamt = number_format($test['Test_amt'],2);
			?>
			   <div class="col">
	   <img src="admin/uploads/<?php echo $test['Test_image'];?>" class="img-fluid bk" alt="">    
	   <div class="deets"><h6><?php echo $test['Test_name'];?></h6>
		
	  <p><?php echo "&#8358;$tamt";?></p>                  
	   </div>  
	   </div>


			<?php
		  }
		}

	  ?>
	 
		  
	</div>
	<hr>
	<div style="text-align: center;"><a href="appointment.php" class="btn btn-primary" style="text-decoration: none;">Book Appointment</a></div>
	<br>
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