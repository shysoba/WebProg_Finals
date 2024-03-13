<?php
@include 'config.php';

$where = '';

if(isset($_GET['type'])){
    $type = $_GET['type'];
    $where = " WHERE product_type = '$type'";
}

if(isset($_GET['artist_product'])){
    $artist_product = explode("|", $_GET['artist_product']);
    $artist = $artist_product[0];
    $where = " WHERE artist = '$artist' ";
}

// Fetch products based on the constructed WHERE clause
$select_products = mysqli_query($conn, "SELECT * FROM `products`" . $where);
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- MAIN style -->
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
								
								<li><a href="booths.php">Art Fairs</a>
									<ul class="sub-menu">
										<li><a href="exhibits.php">Exhibits</a></li>
										<li><a href="booths.php">Booths</a></li>
									</ul>
								</li>								
								<li><a href="shop.php">Shop</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li>
									<div class="header-icons">
										<li><a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
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
	<div class="breadcrumb-section breadcrumb-bg-shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>View our products</p>
						<h1>SHOP</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

<!-- products -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<!-- Filter buttons -->
					<div class="product-filters">
						<ul>
							<li class="<?php echo (!isset($_GET['type']) || $_GET['type'] == 'all') ? 'active' : ''; ?>"><a href="shop.php">All</a></li>
							<li class="<?php echo isset($_GET['type']) && $_GET['type'] == 'zine' ? 'active' : ''; ?>"><a href="shop.php?type=zine">Zines</a></li>
							<li class="<?php echo isset($_GET['type']) && $_GET['type'] == 'sticker' ? 'active' : ''; ?>"><a href="shop.php?type=sticker">Stickers</a></li>
							<li class="<?php echo isset($_GET['type']) && $_GET['type'] == 'print' ? 'active' : ''; ?>"><a href="shop.php?type=print">Prints</a></li>
						</ul>
					</div>

				<!-- Filter dropdown -->
				<div class="product-filters">
					<form action="shop.php" method="GET">
						<select name="artist_product">
							<option value="">By Artist</option>
							<?php
							// Fetch distinct artists
							$select_artists = mysqli_query($conn, "SELECT DISTINCT artist FROM `products`");
							while($fetch_artist = mysqli_fetch_assoc($select_artists)){
								echo "<option value='" . $fetch_artist['artist'] . "'>" . $fetch_artist['artist'] . "</option>";
							}
							?>
						</select>
						<input type="submit" value="Filter">
					</form>
				</div>
            </div>
        </div>
        
        <div class="row product-lists">
            <?php
            if(mysqli_num_rows($select_products) > 0){
                while($fetch_product = mysqli_fetch_assoc($select_products)){
            ?>
            <div class="col-lg-4 col-md-6 text-center <?php echo $fetch_product['product_type']; ?>">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.php"><img src="uploaded_product/<?php echo $fetch_product['image']; ?>" alt=""></a>
                    </div>
                    <h2 id="product_artist"><?php echo $fetch_product['artist']; ?></h2>
                    <h1 id="product_name"><?php echo $fetch_product['product_name']; ?></h1>
                    <h3 id="product_type"><?php echo $fetch_product['product_type']; ?></h3>
                    <p id="product_type">₱<?php echo $fetch_product['price']; ?></p>
                    <!-- Form to add product to cart -->
                    <form action="shop.php" method="post">						
						<input type="hidden" name="artist" value="<?php echo $fetch_product['artist']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_name']; ?>">
                        <input type="hidden" name="product_type" value="<?php echo $fetch_product['product_type']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                        <input type="submit" class="btn" id="addtocart"value="Add to Cart" name="add_to_cart">
                    </form>
                </div>
            </div>
            <?php
                }
            } else {
                echo "<div class='col-lg-12 text-center'>No products available</div>";
            }
            ?>
        </div>
    </div>
</div>


	<!-- icon carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/images/abowlofsoba.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/images/akosidahon.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/images/arabellat.jpg" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/images/daloy.jpg" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/images/demitlog.jpg" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/images/doman.jpg" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/images/kimkimm.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/images/lakimataa.jpg" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/images/likhaniclintt.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/images/lovurhi.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- end icon carousel -->


	
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

</body>
</html>