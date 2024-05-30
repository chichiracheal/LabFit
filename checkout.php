<?php
  session_start();
  require_once "user_guard.php";
  require_once "classes/Transaction.php";
  

  $reference = isset($_SESSION['refno'])? $_SESSION['refno']:0;
  if(!$reference){
    header("location:appt_detail.php");
  }
 
  $t = new Transaction;
  $appts = $t->get_transaction_byref($reference);

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

    <h1>Confirm Payment Here</h1>
    <div class="content">
    <?php
     echo "<div class='alert alert-info noround text-center mt-2'>Your transaction reference number is <b>$reference</b> <br>,
      copy it and quote it when contacting us on this transaction. 
       After clicking on the Make payment button below, you will be directed to a page to enter your card details in order to complete the transaction</div>";
        echo "<table class='table table-sm table-hover table-striped'>
            <tr>
            <th>S/N</th>
            <th>Appt Date</th>
            <th>Amount</th>
            <th>Qty</th>
                     
            </tr>";
        $sn = 1;   $amount =  0; $total = 0;
        foreach($appts as $detapt){   
          
             $test_amt = $detapt['det_amt']; 
             $testdate = $detapt['Appt_date']; 
             
             $testamt = number_format($detapt['det_amt'],2); 
             $total = $total + ($test_amt * $detapt['det_qty']);
             $test_qty = $detapt['det_qty'];
             echo "<tr>
             <td>$sn</td>
             <td>$testdate</td>
             <td>$testamt</td>
             <td> $test_qty </td>
         </tr>";  
         $sn ++ ;   
        }
        $formated_total = number_format($total,2);
        echo "<tr><td><b>TOTAL</b></td><td colspan='2></td><td align='left'> $formated_total</td><td colspan='2'></td></tr>";
        echo "</table>";   

if(isset($appts) && !empty($appts)){
   
  echo "<p align='center'><a href='pay.php' class='btn btn-success btn-lg noround'>Confirm Payment</a></p>";
}
?>
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









  