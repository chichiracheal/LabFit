<?php
session_start();
  require_once "user_guard.php";
  require_once "classes/User.php";

  $user = new User;
  $data = $user->get_user_by_id($_SESSION['useronline']);
  $a=$user->get_all_appts($_SESSION['useronline']);
  $r=$user->get_all_results($_SESSION['useronline']);
  $t=$user->get_all_trans($_SESSION['useronline']);
  $ts=$user->get_all_tests();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>+labFit User dashboard
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
			
			<div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats" style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons">equalizer</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>My Appointments
                                    </strong></p>
                                    <h3 class="card-title">
                                        (<?php echo !empty($a) ? count($a) : "0";  ?>)</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="appt_detail.php">See details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats" style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);">
                                <div class="card-header">
                                    <div class="icon icon-rose">
                                       <span class="material-icons">library_books</span>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>My Results</strong></p>
                                    <h3 class="card-title">
                                    (<?php echo !empty($r) ? count($r) : "0";  ?>)
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="myresults.php">See details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats" style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                        <span class="material-icons">
                                        attach_money
                                        </span>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Transaction History</strong></p>
                                    <h3 class="card-title"> (<?php echo !empty($t) ? count($t) : "0";  ?>)</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Payments
                                        <a href="trans_history.php">See details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats" style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                    
                                    <span class="material-icons">
                                    follow_the_signs
                                    </span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Available Tests</strong></p>
                                    <h3 class="card-title"><?php echo !empty($ts) ? count($ts) : "0";  ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="alltests.php">See details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="row ">
                        <div class="col col-md-12">
                            <div class="card" style="min-height: 485px">
					<div class="content px-5 py-5">
                        <div class="row">
                            <div class="col-md-6">
                            <h3>Welcome  <?php echo ucfirst($data["Patient_fname"])?></h3>
                            <h5>LabFit is here to serve you Better</h5>
                        <p>This is your dashboard</p>
                            </div>
                            <div class="col-md-6">
                                <img src="assets/static/images/user.png" alt="" class="img-fluid">
                            <?php //echo $data["Patient_image"]?>
                            </div>
                        </div>
                       
                       </div>

                       <div style="background-color: #F5F7F9" class='manage-empty px-5 '>    
                        <img class="img-responsive mt-2" width="100" src="assets/thumb.png">
                        <h4>WHAT CAN YOU SAY ABOUT US?</h4>
                        <form action="review.php" class="login-form" style="padding-top: 1em" role="form" method="post" accept-charset="utf-8">
                        <div class="form-group has-feedback">                        
                            <div class="input-group">                                    
                                <input name="review" type="text" id="reviewField" class="form-control" placeholder="Enter Your Review" value="">                    
                                <span class="input-group-btn"><btn type="submit" class="btn btn-success">
                                        SUBMIT
                                    </btn></span>
                            </div>                                
                        </div>
                        </form>
                        <p><a href='index.php' class='btn btn-info'>VIEW TESTIMONIALS</a></p>
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





<!-- offcarvas -->

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Settings</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
     <div style="background-color: lightgreen;">
    	<img src="ladyshade.webp" style="border-radius:50%; width:200px;"/>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>...
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