<?php
  session_start();
  require_once "user_guard.php";
  require_once "classes/User.php";
  
  $user = new User;
  $data = $user->get_user_by_id($_SESSION['useronline']);
  
  
$appt=new User;
$a=$appt->get_all_results($_SESSION['useronline']);
 
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
      <style>
        table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

      </style>
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
			
			
			<div class="main-content container">
			
		
                    <div class="container col-md-12 py-5">

     
<div class="content mt-2" style="background-color: white;padding:3em">
    <h3>List of My Appointments</h3>
    <table class="table table-sm table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S/N</th>
    
     
      <th scope="col">Appt Date</th>
     
      <th scope="col">Status</th>
      <th scope="col">Result</th>
      <th scope="col">Doc_comment</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
    if(is_array($a)){
      $sn=1;

      foreach($a as $appt){


?>

      <tr>
        <th scope="row"><?php print $sn ?></th>
        
       
        
        <td><?php print $appt['Result_date'] ?></td>
        
        <td class="text-danger"><?php print $appt['Appt_status'] ?></td>
        <td><a download="<?php print $appt['Result_img'] ?>" href="#" class="btn btn-success">Download result</a></td>
        <td><a download="<?php print $appt['Doc_comment'] ?>" href="#" class="btn btn-outline-info">Prescription</a></td>
        <td>
        <a onclick="return confirm('Are you sure you want to delete?')"
        href="delete_result.php?id=<?php print $appt['Result_id'] ?>" class="btn btn-sm btn-danger">Delete</a></td> 
        
      </tr>





     <?php   
     $sn++;

      }


    }else{
      echo "<div class='alert alert-info'> No Appointment made yet</div>";
    }
    
    
    ?>


 </tbody>
</table>
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









  