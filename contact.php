<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">

	<!-- title -->
	<title>DALOY STUDIO</title>

	<!-- typing -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/images/logo.png">
	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/d9f0577b97.js" crossorigin="anonymous"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<!-- lightbox -->
	<link rel="stylesheet" href="assets/css/lightbox/css/lightbox.min.css">
	<!-- icon pack -->
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<!-- wowmin trans -->	
	<script src="assets/js/wow.min.js"></script>

</head>
<body>
	

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="assets/images/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="index.php">Home</a>
								</li>
								<li><a href="about.php">About</a></li>
								
								<li><a href="gallery.php">Gallery</a></li>								
								<li><a href="shop.php">Shop</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li>
									<div class="header-icons">
									<li><a class="user" href="login.php"><i class="fa-solid fa-user"></i></a>
										<li><a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"><span>
											<?php $cart_count_query = mysqli_query($conn, "SELECT COUNT(*) AS cart_count FROM `cart`");
											$cart_count_result = mysqli_fetch_assoc($cart_count_query);
											echo $cart_count_result['cart_count'];?>
										</span></i></a>
										<ul class="sub-menu">
											<li><a href="cart.php">Cart</a></li>
											<li><a href="checkout.php">Check Out</a></li>											
										</ul>
									</div>
								</li>								
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>GET IN TOUCH</p>
						<h1>CONTACT</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Talk to Us! </h2>
						<p>We love hearing from our customers and we value your feedback. Send us your questions, comments, or feedback so we can serve you better. </p>
                        <p>Daloy Studio is currently open and available for a multitude of work, ranging from long-term contract work to one-off commissions. 
							Please note that we reserve the right to decline any work we deem inappropriate, such as not-safe-for-work (NSFW) content or anything pertaining to cryptocurrency, such as non-fungible tokens ("NFTs"/"digital collectibles").</p>
					</div>

				 	<div id="form_status"></div>
					<div class="contact-form">
					<form method="post" action="mail.php" id="contact">
							<p>
								<input type="text" placeholder="Name" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone">
								<input type="text" placeholder="Subject" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
							<button type="submit" name="send" id="contact-submit">Submit</button>
						</form>
					</div>
				</div>


				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i>Where to Next?</h4>
							<p>Visit our booth page for future latags <br> <a href="gallery.php"> > Here</a></p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Shop Hours</h4>
							<p>MON - FRIDAY: 9 AM to 10 PM <br> SAT - SUN: 10 AM to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +63 994 250 9964 <br> Email: daloystudio@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61754.12300890549!2d120.94456073521806!3d14.676774669387129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b300571de93d%3A0xc3ac422905bf7264!2sDaloy%20Studio!5e0!3m2!1sen!2sph!4v1710589446145!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
	<!-- end google map section -->


	
	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">© DALOY STUDIO</h2>
						<p>Established in <br> Valenzuela, Philippines</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li><a href="https://instagram.com/daloystudio"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="https://facebook.com/daloystudio"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/daloystudio"><i class="fa-brands fa-twitter"></i></a></li>
							<li><a href="https://www.tiktok.com/@daloystudio"><i class="fa-brands fa-tiktok"></i></a></li>
					  </ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Email Us!</h2>
						<p>Do you have any questions or suggestions?<br><br><a href="mailto:daloystudio@gmail.com">DALOYSTUDIO@GMAIL.COM</a></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box madeby">
						<h2 class="widget-title">꒰ᐢ. .ᐢ꒱₊˚⊹</h2>
						<p>🍜 Made by <a href="https://bowlup.carrd.co">Soba</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- form validation js -->
	<script src="assets/js/form-validate.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	
</body>
</html>