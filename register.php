<?php
session_start();

require_once "partials/header.php";
?>
<!DOCTYPE html>
<html>
		<head >
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="keywords" content="A medical laboratory management system.">
			<meta name="description" content="High-Quality and Reliable Laboratory Services.">
			<meta name="author" content="Racheal Agu">
			<meta property="og:title" content="+LabFit website"> <!--Facebook-->
			<meta property="og:description" content="For better documentation of medical Lab Results.">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
			<link href="assets/static/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
			<link href="fontawesome.css/css/all.min.css" rel="stylesheet" type="text/css"/>
 			 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
				
				
				<title>+LabFit Registration page</title>
				<style  type="text/css">
					
					.navbar a{
						color:white;
						font-weight: 600;
						margin-right: 15px;

					}

					.navbar a:hover{
						color:white;
						text-decoration: underline;
						text-decoration-color: #FF5D22;
						font-size:1rem;
						background-color: transparent;

					}
					.icon a{
						color: beige;
						background-color: #FF5D22;
						border-radius: 10px;
						font-size: 1rem;
						text-decoration: none;
						font-family: Trirong, serif;
					}
					.hero{
						background: url(Images/bg2.webp)no-repeat;
						background-size: cover;
						height: 100vh;
						width:100% ;
					}
					.mbtn1{
						height: 50px;
						width:25%;
						outline: none;
						border: none;
						color:white;
						background-color: #2e4493;
						border-radius: 50px;
						transition: all 0.4s;
						font-family: Trirong, serif;
					}
					.mbtn1:hover{
						background-color: #FF5D22;
					}
					.mbtn2{
						height: 50px;
						width:25%;
						outline: none;
						border: 1px solid #2e4493;
						color:#2e4493;
						background-color:white;
						border-radius: 50px;
						transition: all 0.4s;
						font-family: Trirong, serif;
					}
					.mbtn2:hover{
						background-color: #FF5D22;
					}
					.line{
						height: 6px;
						width: 40%;
						background-color: #2e4493;
						
					}
					.heading{
						font-size: 3rem;
						text-align: center;
						color: black;
						text-transform: uppercase;
						font-weight: bolder;
						margin-bottom: 3rem;
						font-family: Trirong, serif;
					}
					
	.social{
		font-size: 20px;
	}
	.social i{
		margin: 1rem 1rem;
		background: #1192d7;
		color:white;
		padding:0.5rem;
		transition: 0.5s;
	}
	.social i:hover{
		transform: scale(1.1);
		background-color: #FF5D22;
		cursor: pointer;
	}
	
	.footerlinks{
						color:white;
						font-weight: 600;
						

					}

	.footerlinks:hover{
		transform: scale(1.1);
		background-color: #FF5D22;
		cursor: pointer;
		padding: 0.3em 1rem;
		border-radius: 40%;
					}
.form-container{
	display:flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.7)),url(assets/static/Images/about.jpg);
}
.wrapper{
	position: relative;
	width: 750px;
	height: 450px;
	background: #fff;
	box-shadow: 2px 4px 8px 2px rgba(0,0,0,0.3);
}
.wrapper .form-box{
	position: absolute;
	width: 100%;
	height: 100%;
	top:0;
	
	display: flex;
	flex-direction: column;
	justify-content: center;
}

.wrapper .form-box{
	left: 0;
	padding: 0 40px;
}
.form-box h2{
	font-size: 2rem;
	color: #fff;
	text-align: center;
}
.form-box .input-box{
	position: relative;
	width: 100%;
	height: 50px;
	
	margin: 25px 0;
}
.input-box input{
	width: 100%;
	height: 100%;
	background: transparent;
	border: none;
	outline: none;
	border-bottom:2px solid #fff;
	font-size: 16px;
	color: #999;
	font-weight: 500;
	padding-right: 23px;
	transition: 0.5s;
}

#add input{
	background: transparent;
	border-bottom-color:#FF5D22 ;
	outline: none;
	border-bottom:2px solid #ff5d22;
	font-size: 16px;
	color: #999;
	font-weight: 500;
	/* padding-right: 23px; */ 
	transition: 0.5s;
}

#add select{
	background: transparent;
	border-bottom-color:#FF5D22 ;
	outline: none;
	border-bottom:2px solid #ff5d22;
	font-size: 16px;
	color: #999;
	font-weight: 500;
		transition: 0.5s;
}


.input-box input:focus,
.input-box input:valid{
	border-bottom-color:#FF5D22 ;
}


.input-box label{
	position: absolute;
	top: 50%;
	left: 0;
	transform: translateY(-50%);
	color: #fff;
	pointer-events: none;
	transition: 0.5s;
}
.input-box input:focus~label,
.input-box input:valid~label{
	top: -10px;
	color: #fff;
}
.input-box i{
	position: absolute;
	top: 50%;
	right: 0;
	transform: translateY(-50%);
	color: #fff;
	font-size: 20px;
	transition: 0.5s;
}
.input-box input:focus~i,
.input-box input:valid~i{
	color: #1192d7;
}

.btn3{
	position: relative;
	cursor: pointer;
	width: 100%;
	height: 45px;
	background: transparent;
	border: 2px solid #1192d7;
	border-radius:5%;
	outline: none;
	font-size: 16px;
	color: #fff;
	font-weight: 600;
	z-index: 1;
	overflow: hidden;
	
}
.btn3::before{
	content: '';
	position: absolute;
	top: -100%;
	left: 0;
	width: 100%;
	height: 300%;
	background: linear-gradient(#081b29, #1192d7,#081b29, #1192d7);
	z-index: -1;
	transition: 0.5s;
}
.btn3:hover:before{
	top: 0;
}
.form-box .logreg-link{
	font-size: 15px;
	color: #fff;
	text-align: center;
	margin: 20px 0 10px;

}
.logreg-link p a{
	color: #1192d7;
	text-decoration: none;
	font-weight: 700;
	text-transform: uppercase;
}
.logreg-link p a:hover{
	color: #FF5D22;
	text-decoration: underline;

}
				</style>
    <link href="assets/static/heroes.css" rel="stylesheet">
  </head>
  <body>
         
<main class="form-signin w-100 m-auto">
 


	<!-- register form starts -->
	<div class="container pt-4 my-5">
        <div class="row my-4">
        <div class="col-12"  id="register">
		
		<div class="form-container ">
		<div class="wrapper my-5" style="height: 800px;">
			<div class="form-box login">
				<h2 style="color:#999;">Create Account</h2>

				<?php
if(isset($_SESSION['errormsg'])){
  echo "<div class='alert alert-danger'>".$_SESSION['errormsg']."</div>";
  unset($_SESSION['errormsg']);
}

?>
				<form action="process/process_signup.php" method="post"> 
					<div class="input-box">
          <input type="text" name="fname" class="form-control" id="floatingfname" placeholder="Enter your Firstname">
      <label for="floatingfname">Firstname</label>
						<i class="fa fa-user"></i>
					</div>
          
					<div class="input-box">
          <input type="text" name="lname" class="form-control" id="floatinglname" placeholder="Enter your Lastname">
      <label for="floatinglname">Lastname</label>
						<i class="fa fa-user"></i>
					</div>
					<div class="input-box">
          <input type="email" class="form-control" id="floatingInput" placeholder="Enter your email" name="email">
      <label for="floatingInput">Email address</label>
						<i class="fa fa-envelope"></i>
	
					</div>

					<div class="row">
                  <div class="form-group col-md-4 mt-4" id="add">
                      <select name="gender" id="gender" class="form-control form-control-sm form-control-border" >
							<option value="">Select Gender</option>
                          <option>Male</option>
                          <option>Female</option>
                      </select>
                      
                  </div>
                  <div class="form-group col-md-4 mt-4" id="add">
                      <input type="date" name="dob" id="dob" placeholder="(optional)" class="form-control form-control-sm form-control-border">
                      
                  </div>
                  <div class="form-group col-md-4 mt-4" id="add">
                      <input type="text" name="phone" id="contact" placeholder="Enter your phone no"  class="form-control form-control-sm form-control-border">
                      
                  </div>
              </div>
            
             
					<div class="input-box">
          <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Enter your Password">
      <label for="floatingPassword">Password</label>
						<i class="fa fa-lock"></i>
	
					</div>

					<div class="input-box">
          <input type="password" name="cpwd" class="form-control" id="floatingPassword" placeholder="Confirm Password">
      <label for="floatingPassword">Confirm Password</label>
						<i class="fa fa-lock"></i>
	
					</div>
          <button class="btn3" type="submit" name="btnregister" value="register" >Create Account</button>
					
					<div class="logreg-link">
          <p style="color:#999;"> Have an account? <a href="loginpage.php"class="register-link" id="exist">Login</a>   </p>
						
					</div>
				</form>
			</div>
		</div>
		</div>
		</div>
		</div>
	</div>
	</div>

	
	
	<!-- register form ends -->
				<!-- footer starts -->
  
<!-- FOOTER -->
<footer class="container-fluid" style="height:100px; line-height:100px;">
  <p class="float-end"><a href="index.php" style="color:#FF5714">Back to Homepage</a></p>
  <p>All Right Reserved by  &copy;LabFit.2024</p>
  
</footer>

</main>
<script src="assets/static/bootstrap/js/bootstrap.bundle.min.js"></script>
      
  </body>
</html>