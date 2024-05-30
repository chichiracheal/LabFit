<!-- FOOTER -->

				<!-- footer starts -->
        <footer>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3 segment-one">
					<h3>+LabFit</h3>
					<p>We employ the latest technology and innovations. We offer  a wide range of reliable and accurate diagnostic 
						and  laboratory tests so everyone can enjoy a better and healthier life.</p>
				</div>
			<div class="col-md-3 segment-two">
				<h2>Useful Links</h2>
				<ul>
					<li> 
						<a  href="index.php">Home </a>
					</li>
					<li>
						<a  href="#aboutarea">About Us</a>
					</li>
					<li>
						<a href="#contactarea">Contact Us</a>
					</li>
					<li>
						<a  href="#testarea">Tests
						</a>
						
					</li>
					<li>
						<a href="#appointment">Appointment</a>
					</li>
				</ul>
			</div>
			<div class="col-md-3 segment-three">
				<h2>Follow Us</h2>
				<p>Follow us on our social media platforms to keep updated.</p>
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
			<div class="col-md-3 segment-four">
				<h2>Our Newsletter</h2>
				<form>
					<div class="mb-3">
					  
					  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					  
					</div>
				   
					<button type="submit" class="btn btn-primary">Subscribe</button>
					<p class="float-end"><a href="index.php" style="color:#FF5714">Back to top</a></p>
				  </form>
			</div>
			</div>
		</div>
	</div>
	<p class="footer-bottom-text">All Right Reserved by  &copy;LabFit.<?php   echo date("Y")  ; ?></p>
</footer>

  <!-- footer ends -->
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
		  <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body" style="background-color: #bbd1ea;">
		  <div class="row mb-3">
	  
			  
	  </div><div class="form-floating pb-3">
				  <input type="firstname" name="fistname" id="firstname" class="form-control" placeholder="Enter your fullname" required="required"/>
			  <label for="firstname" class="col-sm-2 col-form-label"> Fullname
			  </label>
			  </div>
  
						  <div class="form-floating">
				  <input type="password" name="password" id="pass" class="form-control" placeholder="Enter your password" required="required"/>
			  <label for="email" class="col-sm-2 col-form-label">Password
			  </label>
			  </div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Login</button>
		</div>
	  </div>
	</div>
  </div>
			<script type="text/javascript" src="assets/static/bootstrap/js/bootstrap.bundle.min.js"></script>	
			<script src="jquery-3.7.1.min.js"></script>
			<script src="script.js"></script>
			<!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

	
  
  </script>

  <script>
	       
     
  /**
   * Testimonials slider
   */
   new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  </script>
		</body>

</html>