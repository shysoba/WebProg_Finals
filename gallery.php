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
  <!-- gallery css -->
  <link rel="stylesheet" href="gallery.css">
  <!-- gsap link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

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
<div class="breadcrumb-section-gallery breadcrumb-bg-gallery">
  <div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
            <div class="breadcrumb-text">
                <h1>GALLERY</h1>
            </div>
        </div>
    </div>
  </div>
</div><br>
<!-- end breadcrumb section -->

	<!-- iframe section -->
	<!-- wahahsdhahhahahhellpp!!! -->
	<div class="iframe-section">
		<iframe src="assets/gallery/gallery_b.html" frameborder="0" style="width: 100%; height: 60vh; overflow: hidden; margin-top:10px; margin-bottom:10px;"></iframe>
		<iframe src="assets/gallery/gallery_g.html" frameborder="0" style="width: 100%; height: 70vh; overflow: hidden;"></iframe>
	</div>
	<!-- end iframe section -->



	<!-- product section -->
	<div class="product-section mt-100 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="blue-text">Ready to</span> Order?</h3>
						<p>View pieces made by our artists individually.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="shop.php"><img src="assets/images/zines.jpg" alt=""></a>
						</div>
						<p class="product-price">Zines</p>
						<a href="shop.php?type=zine" class="cart-btn"><i class="fas fa-shopping-cart"></i> Go to Zines</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="shop.php"><img src="assets/images/stickers.jpg" alt=""></a>
						</div>
						<p class="product-price">Stickers</p>
						<a href="shop.php?type=sticker" class="cart-btn"><i class="fas fa-shopping-cart"></i> Go to Stickers</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="shop.php"><img src="assets/images/prints.jpg" alt=""></a>
						</div>
						<p class="product-price">Prints </p>
						<a href="shop.php?type=print" class="cart-btn"><i class="fas fa-shopping-cart"></i> Go to Prints</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->


  
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
	<!-- main js -->
	<script src="assets/js/main.js"></script>
  <!-- gallery scr -->
  <script src="assets/js/gallery.js"></script>
  <script src="assets/js/showcase.js"></script>
  </body>
</html>
