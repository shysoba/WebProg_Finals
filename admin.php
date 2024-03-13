<?php
@include 'config.php';

if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_type = $_POST['p_type'];
   $p_price = $_POST['p_price'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_product/'.$p_image;
   $p_artist = $_POST['p_artist'];

   $add_query = mysqli_query($conn, "INSERT INTO `products` (product_name, product_type, price, image, artist) VALUES ('$p_name', '$p_type', '$p_price', '$p_image', '$p_artist')");

   if($add_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'Product added successfully';
      header('location:admin.php');
   } else {
      $message[] = 'Product could not be added';
      header('location:admin.php');
   }
}

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];    
   $update_p_type = $_POST['update_p_type'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];    
   $update_p_artist = $_POST['update_p_artist'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_product/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `products` SET product_name = '$update_p_name', product_type = '$update_p_type', price = '$update_p_price', image = '$update_p_image', artist = '$update_p_artist' WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'Product updated successfully';
      header('location:admin.php');
   } else {
      $message[] = 'Product could not be updated';
      header('location:admin.php');
   }
}

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ");
    if($delete_query){
       header('location:admin.php');
       $message[] = 'Product has been deleted';
    } else {
       header('location:admin.php');
       $message[] = 'Product could not be deleted';
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
<link rel="stylesheet" href="assets/css/php.css">

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
										<li><a href="gallery.php">Gallery</a></li>
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
	<div class="breadcrumb-section breadcrumb-bg-about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>ADMIN ONLY</p>
						<h1>UPDATE PRODUCTS</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
 

<div class="container">
    <section>
        <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
            <h3>Add a New Product</h3>
            <input type="text" name="p_name" placeholder="Enter the product name" class="box" required>            
            <input type="text" name="p_type" placeholder="Enter the product type" class="box" required>
            <input type="number" name="p_price" min="0" placeholder="Enter the product price" class="box" required>            
            <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>            
            <input type="text" name="p_artist" placeholder="Enter artist name" class="box" required>   
            <input type="submit" value="Add the product" name="add_product" class="btn">
        </form>
    </section>
        
<section class="display-product-table">
    <table>
        <thead>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Type</th>
            <th>Product Price</th>      
            <th>Product Artist</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
                while($row = mysqli_fetch_assoc($select_products)){
            ?>
            <tr>
                <td><img src="uploaded_product/<?php echo $row['image']; ?>" height="100" alt=""></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['product_type']; ?></td>
                <td>₱<?php echo $row['price']; ?></td>         
                <td><?php echo $row['artist']; ?></td>
                <td>
                    <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this product?');"> <i class="fas fa-trash"></i> Delete </a>
                    <a href="admin.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> Update </a>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='6' class='empty'>No product added</td></tr>";
            }
            ?>
        </tbody>
    </table>
</section>

<section class="edit-form-container">
    <?php
    if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];
        $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
        if(mysqli_num_rows($edit_query) > 0){
            while($fetch_edit = mysqli_fetch_assoc($edit_query)){
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <img src="uploaded_product/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
        <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
        <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['product_name']; ?>">
        <input type="text" class="box" required name="update_p_type" value="<?php echo $fetch_edit['product_type']; ?>">
        <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
        <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">      
        <input type="text" class="box" required name="update_p_artist" value="<?php echo $fetch_edit['artist']; ?>">
        <input type="submit" value="Update the product" name="update_product" class="btn">
        <button type="button" id="close-edit" class="option-btn" onclick="cancelUpdate()">Cancel</button>
    </form>
    <script>
        function cancelUpdate() {
            document.querySelector('.edit-form-container').style.display = 'none';
            document.querySelector('.edit-form-container form').reset();
        }
    </script>
    <?php
            }
        }
        echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
    }
    ?>
</section>

</div>

<!-- custom js  -->
<script src="script.js"></script>
</body>
</html>
