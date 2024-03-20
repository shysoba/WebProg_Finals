<?php

include 'config.php';

if(isset($_POST['update_update_btn'])){
    $update_value = mysqli_real_escape_string($conn, $_POST['update_quantity']);
    $update_id = mysqli_real_escape_string($conn, $_POST['update_quantity_id']);
    $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
    if($update_quantity_query){
        header('location:cart.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if(isset($_GET['remove'])){
    $remove_id = mysqli_real_escape_string($conn, $_GET['remove']);
    $remove_query = mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
    if($remove_query){
        header('location:cart.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if(isset($_GET['delete_all'])){
    $delete_all_query = mysqli_query($conn, "DELETE FROM `cart`");
    if($delete_all_query){
        header('location:cart.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
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
	<div class="breadcrumb-section breadcrumb-bg-cart">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>HANDMADE WITH CARE</p>
						<h1>CART</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<div class="container">
    <section class="cart-section text-center mt-150 mb-150">
        <div class="table-responsive">
            <table class="cart-table">
			<thead class="cart-table-head">
				<tr class="table-head-row">
					<th class="product-remove"></th>
					<th class="product-image">Product Image</th>
					<th class="product-name">Name</th>
					<th class="product-type">Type</th> 
					<th class="product-price">Price</th>
					<th class="product-quantity">Quantity</th>
					<th class="product-total">Total</th>
				</tr>
			</thead>
			<tbody>

         <?php 
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>
         <tr class="table-body-row">
            <td class="product-remove"><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Remove item from cart?')"><i class="far fa-window-close"></i></a></td>
            <td class="product-image"><img src="uploaded_product/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td class="product-name"><?php echo $fetch_cart['name']; ?></td>
            <td class="product-type"><?php echo $fetch_cart['type']; ?></td>
            <td class="product-price">₱<?php echo number_format($fetch_cart['price']); ?></td>
            <td class="product-quantity">
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="Update" name="update_update_btn">
               </form>   
            </td>
            <td class="product-total">₱<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
         </tr>

         <?php
            $grand_total += $sub_total;  
            }
         }
         ?>
         <tr class="table-bottom">
            <td colspan="3"><a href="shop.php" class="boxed-btn">Continue Shopping</a></td>
            <td colspan="2"><strong>Total: </strong> ₱<?php echo $grand_total; ?></td>
         </tr>
      </tbody>
   </table><br>

   <div class="cart-buttons">
      <a href="checkout.php" class="boxed-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">Proceed to Checkout</a>
   </div><br>

</section>

</div>

</div>

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
   <!-- custom JavaScript file link -->
   <script src="js/script.js"></script>
   

</body>
</html>