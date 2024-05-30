<?php
session_start();
  require_once "partials/header.php";
  require_once "admin/classes/Test.php";

  $test = new Test;
  $t = $test->get_all_tests();
?>
 <!-- from here till topmost top as header.php-->



					<!-- banner section -->
          <section class="hero py-5" style=" background: url(assets/static/Images/bg2.webp)no-repeat; background-size: cover;">
	<div class="container" >
		<div class="row py-5 mt-5  animate__animated animate__backInLeft" style="background-color: rgba(0,0,0,0.7); height:inherit;" >
			<div class="col-md-6 py-5 text-center text-light"> 
				<h3 class="m-0">Tested Lab Experts</h3>
				<h1 style="font-family: Trirong, serif;">Latest Lab Technologies</h1>
				<div class="line my-4"></div>
				<p style="font-family: Sofia, sans-serif;">High-Quality & Reliable Laboratory Services</p>
				<a href="register.php" type="button" class="btn btn-outline-primary px-4 mt-2 mx-5" style="text-decoration:none;">Signup </a>
				
				<a href="loginpage.php" class="btn btn-light me-2 px-4 mt-2" 
				> LOG IN</a>
		  
			</div>
			<div class="col-md-6">
				<img src="assets/static/Images/bg5.webp" class="img-thumbnail" alt="hero img">

			</div>
		  </div>
</div>
  </section>
<!-- end banner section -->
					
					<!-- about section -->
  <section class="about py-5"style="background-image:linear-gradient(45deg,
                    rgba(0, 70, 66, 0.75),
                    rgba(0, 83, 156, 0.75)),  url('assets/static/images/bg4.webp'); background-size: cover;" id="aboutarea">
	<h2 class="heading  animate__animated animate__shakeY animate__delay-3s" >About Us</h2>
	<div class="line my-4"></div>
	<div class="container" >
		<div class="row py-5 animate__animated animate__backInLeft" style="background-color: hsl(0, 33%, 98%); height:inherit;" >
			<div class="col-md-5 ">
				
				<img src="assets/static/images/bg4.webp" alt="" class="img-fluid">

			</div>
			<div class="col-md-7 py-5 text-center text-dark"> 
				<h1 style="font-family: Trirong, serif;">Advanced Medical Laboratory Technologies</h1>
				<h3 style="font-family: Audiowide, sans-serif;color: #1192d7;">We employ the latest technology and innovations.</h3>
			<p style="font-family: Audiowide, sans-serif;">We offer  a wide range of reliable and accurate diagnostic</p>
			<p style="font-family: Audiowide, sans-serif;"> and  laboratory tests so everyone can enjoy a better and healthier life.</p>
			<a href="about.php" class="mbtn1 px-3 py-2" style="text-decoration: none;">Read More</a>
				


			</div>

		  </div>
</div>
  </section>
  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
	<p class="heading pt-5">Why Choose Us?</p>
  <div class="container" data-aos="fade-up">

	<div class="row mb-5">
	  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
		<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
		  <div class="icon"><i class="fas fa-user-md"></i></div>
		  <h4 class="title"><a href="">Professionals</a></h4>
		  <p class="description">Our team at +labFit are always ready to help you with your laboratory testing needs.</p>
		</div>
	  </div>

	  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
		<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
		  <div class="icon"><i class="far fa-hospital"></i></div>
		  <h4 class="title"><a href="">Experience</a></h4>
		  <p class="description">+LabFit was founded with great technical and business experience.We employ the latest technology and innovations.</p>
		</div>
	  </div>

	  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
		<div class="icon-box" data-aos="fade-up" data-aos-delay="300">
		  <div class="icon"><i class="fas fa-award"></i></div>
		  <h4 class="title"><a href="">Quality</a></h4>
		  <p class="description">We provide the highest level of quality testing along with personal level of services in the industry.</p>
		</div>
	  </div>

	  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
		<div class="icon-box" data-aos="fade-up" data-aos-delay="400">
		  <div class="icon"><i class="fas fa-flask"></i></div>
		  <h4 class="title"><a href="">Unique</a></h4>
		  <p class="description">We employ the latest technology and innovations.</p>
		</div>
	  </div>

	</div>

  </div>
</section><!-- End Featured Services Section -->




<div class="album py-5 "  style="background-image:linear-gradient(45deg,
                    rgba(0, 70, 66, 0.75),
                    rgba(0, 83, 156, 0.75)),  url('assets/static/images/bg4.webp'); background-size: cover;" >
    <div class="container-fluid" id="testarea">
<div class="row">
	  
<div class="layout" id="breakout">
  
  <div class="container-fluid px-4 pt-5" id="custom-cards" style="background-color: white;">
   <div style="width:86%; margin:auto">
	<h2 class="heading">Test Sessions</h2>

	
	<div class="row row-cols-1 row-cols-lg-4 align-items-stretch g-4 py-5 px-5"style=" box-shadow: 5px 5px 5px 5px #888888;">
	  <?php
		if(is_array($t)){
		  foreach($t as $test){
			$tamt = number_format($test['Test_amt'],2);
			?>
			   <div class="col box" id="test" >
	   <img src="admin/uploads/<?php echo $test['Test_image'];?>" class="img-fluid bk" alt="">    
	   <div class="deets"><h6><?php echo $test['Test_name'];?></h6>
		<p><?php echo "&#8358;$tamt";?></p> 
		<p><?php echo $test['Test_description'];?></p>
                              
	   </div>  
	   </div>


			<?php
		  }
		}

	  ?>
	 
		  
	</div>
	<hr>
	<a href="loginpage.php" class="btn btn-outline-primary btn-sm mx-5 mb-3">Make Appointment</a> 
	<br>
  </div>
  </div> 
</div>
			
			   </div>
		  
       <!-- end types of tests -->
    
		


	
	</div>
</div>


    </div>
  </div>

				
				<!-- doctors section starts -->
				<section class="about py-5 experts" id="doctorarea">
					<h2 class="heading  animate__animated animate__shakeY animate__delay-9s" >Meet Our Experts</h2>
					<div class="line my-4"></div>

					 <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
		<div class="swiper-image box">
			<img src="assets/static/Images/doc1.webp" alt="">
			<div class="image-content">
				<h2>Dr Rio Brown</h2>
				<div class="social">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>

				</div>

			</div>
		</div>
	  </div>
      <div class="swiper-slide">
		<div class="swiper-image box">
			<img src="assets/static/Images/mdoc.webp" alt="">
			<div class="image-content">
				<h2>Dr Rio Brown</h2>
				<div class="social">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>

				</div>
			</div>
		</div>
	  </div>
      <div class="swiper-slide">
		<div class="swiper-image box">
			<img src="assets/static/Images/doc3.webp" alt="">
			<div class="image-content">
				<h2>Dr Rio Brown</h2>
				<div class="social">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>

				</div>
			</div>
		</div>
	  </div>
      <div class="swiper-slide">
		<div class="swiper-image box">
			<img src="assets/static/Images/gallery-5.jpg" alt="">
			<div class="image-content">
				<h2>Dr Rio Brown</h2>
				<div class="social">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>

				</div>
			</div>
		</div>
	  </div>
      <div class="swiper-slide">
		<div class="swiper-image box">
			<img src="assets/static/Images/mdoc.webp" alt="">
			<div class="image-content">
				<h2>Dr Rio Brown</h2>
				<div class="social">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>

				</div>
			</div>
		</div>
	  </div>
      <div class="swiper-slide">
		<div class="swiper-image box">
			<img src="assets/static/Images/doc3.webp" alt="">
			<div class="image-content">
				<h2>Dr Rio Brown</h2>
				<div class="social">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>

				</div>
			</div>
		</div>
	  </div>
      <div class="swiper-slide">
		<div class="swiper-image box">
			<img src="assets/static/Images/doc1.webp" alt="">
			<div class="image-content">
				<h2>Dr Rio Brown</h2>
				<div class="social">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>

				</div>
			</div>
		</div>
	  </div>
      <div class="swiper-slide">
		<div class="swiper-image box">
			<img src="assets/static/Images/mdoc.webp" alt="">
			<div class="image-content">
				<h2>Dr Rio Brown</h2>
				<div class="social">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>

				</div>
			</div>
		</div>
	  </div>
      <div class="swiper-slide">
		<div class="swiper-image box">
			<img src="assets/static/Images/doc3.webp" alt="">
			<div class="image-content">
				<h2>Dr Rio Brown</h2>
				<div class="social">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>

				</div>
			</div>
		</div>
	  </div>
	  <div class="swiper-slide">
		<div class="swiper-image box">
			<img src="assets/static/Images/doc1.webp" alt="">
			<div class="image-content">
				<h2>Dr Rio Brown</h2>
				<div class="social">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>

				</div>
			</div>
		</div>
	  </div>
	  <div class="swiper-slide">
		<div class="swiper-image box">
			<img src="assets/static/Images/doc3.webp" alt="">
			<div class="image-content">
				<h2>Dr Rio Brown</h2>
				<div class="social">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>

				</div>
			</div>
		</div>
	  </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

				
				</section>
				<!-- doctors section ends -->


				<!-- Feedbacks section -->
				<!-- ======= Testimonials Section ======= -->
				<section id="testimonials" class="testimonials"  style="background: linear-gradient(45deg, #1192d7,#bbd1ea) ; ">
					<div class="container" data-aos="fade-up">
			  
					  <div class="section-title">
						<h2 class="heading">Our <span>Customers</span> Reviews</h2>
						<p><strong>What are Clients saying about us?</strong></p>
						<div class="line my-4"></div>
					  </div>
			  
					  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
						<div class="swiper-wrapper">
			  
						  <div class="swiper-slide">
							<div class="testimonial-item">
							  <p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
	
								<br>
								I've had a beautiful experience with +LabFit.
								Good customer services with expert doctors.Stressless experience
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							  </p>
							  <img src="assets/static/Images/cust.jpeg" class="testimonial-img" alt="">
							  <h3>Goodluck Agu</h3>
							  
							</div>
						  </div><!-- End testimonial item -->
			  
						  <div class="swiper-slide">
							<div class="testimonial-item">
							  <p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>

							<br>
							I've had a beautiful experience with +LabFit.
							Good customer services with expert doctors.Stressless experience
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							  </p>
							  <img src="assets/static/Images/cust4.jpeg" class="testimonial-img" alt="">
							  <h3>Marie Shun</h3>
							  
							</div>
						  </div><!-- End testimonial item -->
			  
						  <div class="swiper-slide">
							<div class="testimonial-item">
							  <p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>

							<br>
							I've had a beautiful experience with +LabFit.
							Good customer services with expert doctors.Stressless experience
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							  </p>
							  <img src="assets/static/Images/cust3.jpeg" class="testimonial-img" alt="">
							  <h3>Rachel Alli</h3>
							
							</div>
						  </div><!-- End testimonial item -->
			  
						  <div class="swiper-slide">
							<div class="testimonial-item">
							  <p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>

							<br>
							I've had a beautiful experience with +LabFit.
							Good customer services with expert doctors.Stressless experience
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							  </p>
							  <img src="assets/static/Images/cust2.jpeg" class="testimonial-img" alt="">
							  <h3>Allen King</h3>
							 
							</div>
						  </div><!-- End testimonial item -->
			  
						  <div class="swiper-slide">
							<div class="testimonial-item">
							  <p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>

							<br>
							I've had a beautiful experience with +LabFit.
							Good customer services with expert doctors.Stressless experience
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							  </p>
							  <img src="assets/static/Images/cust.jpeg" class="testimonial-img" alt="">
							  <h3>Jan John </h3>
							 
							</div>
						  </div><!-- End testimonial item -->
			  
						</div>
						<div class="swiper-pagination"></div>
					  </div>
			  
					</div>
				  </section><!-- End Testimonials Section -->
			  
				<!-- Feedbacks ends -->

				<!-- contact section starts -->
<section class="contact" id="contactarea" style="background-image: url('assets/static/images/bg2.webp'); background-size: cover">
	<div class="content">
	<h2 class="heading pt-5  animate__animated animate__shakeY animate__delay-15s" >Contact Us</h2>
	
</div>
	<div class="line my-4"></div>
	<div class="container" id="contactContainer">
		<div class="row"  >
		<p style="text-align: center;color: #1192d7;font-size: 30px;font-weight: bolder;">Please use the form below to reach us.</p>
	
			  <div class="col-md-6">
	
				<div class="row">
				  <div class="col-md-12">
					<div class="info-box">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					  <h3>Our Address</h3>
					  <p>Marina, Lagos Island Lagos, Nigeria</p>
					</div>
				  </div>
				  <div class="col-md-6">
					<div class="info-box mt-4">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					  <h3>Email Us</h3>
					  <p>chiracheal5@gmail.com<br>contact@example.com</p>
					</div>
				  </div>
				  <div class="col-md-6">
					<div class="info-box mt-4">
					  <i class="fa fa-phone" aria-hidden="true"></i>
					  <h3>Call Us</h3>
					  <p>+2348166239095<br>+234 7032249981</p>
					</div>
				  </div>
				</div>
	
			  </div>
	
		
			<?php
	require_once "partials/contact.php";

?>
		</div>
	</div>
				</section>
				<!-- contact section ends -->

	
    <!--conversation call to action-->
<div class="container-fluid mt-5" id="conversation" style="background:#bbd1ea;">
      <h3 class="py-4 border-bottom heading  my-4">Our Gallery</h3>
      <div class="row row-cols-1 row-cols-lg-4 align-items-stretch g-4 py-5">
      <div class="col">
       <img src="assets/static/images/gallery-6.jpg" class="img-fluid jiji" alt="">    
       <div class="deets">
        <h6>Hematology department</h6>
       </div>  
       </div>

    <div class="col">
       <img src="assets/static/images/gallery-7.jpg" class="img-fluid jiji" alt="">    
       <div class="deets">
        <h6>CT department</h6>
       </div>  
       </div>
      <div class="col">
       <img src="assets/static/images/gallery-2.jpg" class="img-fluid jiji" alt="">    
       <div class="deets">
        <h6>Microbiology department</h6>
       </div>  
       </div>
     <div class="col">
       <img src="assets/static/images/gallery-1.jpg" class="img-fluid jiji" alt="">    
       <div class="deets">
        <h6>Surgical Pathology</h6>
       </div>  
       </div>
          
    </div>
  </div> 
 </div>
 <!--end partner hotel-->

 <!-- From here till end as footer.php-->
 <?php
  require_once "partials/footer.php";
  ?>

  