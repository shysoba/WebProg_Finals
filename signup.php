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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!-- owl carousel -->
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
    
    <!-- typing script -->
    <script>
        $(document).ready(function () {
        // declared array of studio's main colors
        let colors = ['#89BDE5', '#6E92CD', '#AAC0F0', '#3260AA', '#437AD2'];
        // declared array of fonts to be used
        // soba: indecisive lng tlga ak...
        let fonts = ['DOS', 'Fake Receipt', 'Mario', 'PoppinsB', 'Sprayers', 'Swiss', 'Poppins'];

        // initializes typed.js lib for typing effect
        let typed = new Typed('.typing', {
            strings: ['daloy', 'Daloy Studio', 'daloy studio', 'DALOY'],
            typeSpeed: 100,
            backSpeed: 30,
            loop: true,

            // changes color and font of the string randomly from color and font arrays
            preStringTyped: function (arrayPos) {
            let color = colors[Math.floor(Math.random() * colors.length)];
            let font = fonts[Math.floor(Math.random() * fonts.length)];

            $('.typing').css({
                'color': color,
                'font-family': font
            });
            }
        });
        });
    </script>
    <!-- end typing script-->

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

    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <!-- typing -->
                            <div class="tagline">
                                <span class="typing"></span>
                            </div>
                            <!-- typing end-->
                            <div class="hero-btns">
                                <a href="about.php" class="boxed-btn">ABOUT US</a>
                                <a href="shop.php" class="bordered-btn">SHOP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    
    <!-- signup section -->
    <div class="signup-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title text-center">
                        <h3><span class="blue-text">Sign</span> Up</h3>
                        <p>Please fill in the form below to create an account.</p>
                    </div>

                    <!-- Signup Form -->
                    <form action="signup_process.php" method="post" class="signup-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                        </div>
                        <button type="submit" class="boxed-btn">Sign Up</button>
                    </form>
                    <!-- End Signup Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- end signup section -->

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
