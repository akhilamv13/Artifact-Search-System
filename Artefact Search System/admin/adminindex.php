<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- molla/about.html  22 Nov 2019 10:03:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Classimax</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php
require_once("db.class.php");
$ob=new db_operations();
$email=$_SESSION['email'];
// $usertype="select * from sellerreg where email='$email'";
// $user=$ob->db_read($usertype);
// $arr=mysqli_fetch_array($user);
// $_SESSION['sellerid']=$arr['sellerid'];
// $fname=$arr['fname'];

?>
    <div class="page-wrapper">
        <header class="header">

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <a href="index.html" class="logo">
                            <img src="../seller/assets/images/classimax.png" alt="" width="105" height="25">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="../admin/adminindex.php">Home</a>
                                </li>
                                <li>
                                    <a href="../admin/addcategory.php">Add Category</a>
                                </li>
                                <li>
                                    <a href="../admin/categories.php">Categories</a>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Seller</a>

                                    <ul>
                                        <li><a href="../admin/unverifiedseller.php">Unverified Seller</a></li>
                                        <li><a href="../admin/verifiedseller.php">Verified Sellers</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Seller's Option</a>

                                    <ul>
                                        <li><a href="../admin/categoryseller.php">Categories by seller</a></li>
                                        <li><a href="../admin/producttypeseller.php">Product Type By Seller</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="../admin/login.php" style="margin-left: 400%;">Logout</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
                <div class="container">
                    <h1 class="page-title">Welcome <br><h1 style="color: #c96;text-transform: uppercase;"></h1></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
<br>
            <div class="page-content pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <h2 class="title">Our Vision</h2><!-- End .title -->
                            <p>>Witnessing tremendous growth for the past 5 years, retailers are moving towards online selling.Take a step forward to promote your products online.Our vision is to provide you a place to introduce or promote your products to the world through online.</p>
                        </div><!-- End .col-lg-6 -->
                        
                        <div class="col-lg-6">
                            <h2 class="title">Our Mission</h2><!-- End .title -->
                            <p>Through Classimax people can familiarize or know about your products . Through this you can receive orders from every part of the country and follow the simple steps to fulfill the orders. </p>
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->

                    <div class="mb-5"></div><!-- End .mb-4 -->
                </div><!-- End .container -->

                <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 mb-3 mb-lg-0">
                                <h2 class="title">Who We Are</h2><!-- End .title -->
                               <!-- <p class="lead text-primary mb-3">Pellentesque odio nisi, euismod pharetra a ultricies <br>in diam. Sed arcu. Cras consequat</p>--><!-- End .lead text-primary -->
                                <p class="mb-2">Classimax is an search system that promotes many product lines, including media (books, movies, music, and software), apparel, baby products, consumer electronics, beauty products, gourmet food, groceries, health and personal care products, industrial & scientific supplies, kitchen items, jewelry, watches, lawn and garden items, musical instruments, sporting goods, tools, automotive items, toys and games, and farm supplies and consulting services. </p>

                                <a href="blog.html" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                                    <span>VIEW OUR NEWS</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .col-lg-5 -->

                            <div class="col-lg-6 offset-lg-1">
                                <div class="about-images">
                                    <img src="assets/images/about/img-1.jpg" alt="" class="about-img-front">
                                    <img src="assets/images/about/img-2.jpg" alt="" class="about-img-back">
                                </div><!-- End .about-images -->
                            </div><!-- End .col-lg-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light-2 pt-6 pb-6 -->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="brands-text">
                                <h2 class="title">The world's premium design brands in one destination.</h2><!-- End .title -->
                                <!-- <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nis</p> -->
                            </div><!-- End .brands-text -->
                        </div><!-- End .col-lg-5 -->
                        <div class="col-lg-7">
                            <div class="brands-display">
                                <div class="row justify-content-center">
                                    <div class="col-6 col-sm-4">
                                        <a href="#" class="brand">
                                            <img src="assets/images/brands/1.png" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="#" class="brand">
                                            <img src="assets/images/brands/2.png" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="#" class="brand">
                                            <img src="assets/images/brands/3.png" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="#" class="brand">
                                            <img src="assets/images/brands/4.png" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="#" class="brand">
                                            <img src="assets/images/brands/5.png" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="#" class="brand">
                                            <img src="assets/images/brands/6.png" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="#" class="brand">
                                            <img src="assets/images/brands/7.png" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="#" class="brand">
                                            <img src="assets/images/brands/8.png" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->

                                    <div class="col-6 col-sm-4">
                                        <a href="#" class="brand">
                                            <img src="assets/images/brands/9.png" alt="Brand Name">
                                        </a>
                                    </div><!-- End .col-sm-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .brands-display -->
                        </div><!-- End .col-lg-7 -->
                    </div><!-- End .row -->

                    <hr class="mt-4 mb-6">

                    <h2 class="title text-center mb-4">Meet Our Team</h2><!-- End .title text-center mb-2 -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="member member-anim text-center">
                                <figure class="member-media">
                                    <img src="assets/images/team/member-1.jpg" alt="member photo">

                                    <figcaption class="member-overlay">
                                        <div class="member-overlay-content">
                                            <h3 class="member-title">Samanta Grey<span>Founder & CEO</span></h3><!-- End .member-title -->
                                            <!-- <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>  -->
                                            <div class="social-icons social-icons-simple">
                                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            </div><!-- End .soial-icons -->
                                        </div><!-- End .member-overlay-content -->
                                    </figcaption><!-- End .member-overlay -->
                                </figure><!-- End .member-media -->
                                <div class="member-content">
                                    <h3 class="member-title">Samanta Grey<span>Founder & CEO</span></h3><!-- End .member-title -->
                                </div><!-- End .member-content -->
                            </div><!-- End .member -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="member member-anim text-center">
                                <figure class="member-media">
                                    <img src="assets/images/team/member-2.jpg" alt="member photo">

                                    <figcaption class="member-overlay">
                                        <div class="member-overlay-content">
                                            <h3 class="member-title">Bruce Sutton<span>Sales & Marketing Manager</span></h3><!-- End .member-title -->
                                            <!-- <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>  -->
                                            <div class="social-icons social-icons-simple">
                                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            </div><!-- End .soial-icons -->
                                        </div><!-- End .member-overlay-content -->
                                    </figcaption><!-- End .member-overlay -->
                                </figure><!-- End .member-media -->
                                <div class="member-content">
                                    <h3 class="member-title">Bruce Sutton<span>Sales & Marketing Manager</span></h3><!-- End .member-title -->
                                </div><!-- End .member-content -->
                            </div><!-- End .member -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="member member-anim text-center">
                                <figure class="member-media">
                                    <img src="assets/images/team/member-3.jpg" alt="member photo">

                                    <figcaption class="member-overlay">
                                        <div class="member-overlay-content">
                                            <h3 class="member-title">Janet Joy<span>Product Manager</span></h3><!-- End .member-title -->
                                            <!-- <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>  -->
                                            <div class="social-icons social-icons-simple">
                                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            </div><!-- End .soial-icons -->
                                        </div><!-- End .member-overlay-content -->
                                    </figcaption><!-- End .member-overlay -->
                                </figure><!-- End .member-media -->
                                <div class="member-content">
                                    <h3 class="member-title">Janet Joy<span>Product Manager</span></h3><!-- End .member-title -->
                                </div><!-- End .member-content -->
                            </div><!-- End .member -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="mb-2"></div><!-- End .mb-2 -->

               <!--  <div class="about-testimonials bg-light-2 pt-6 pb-6">
                    <div class="container">
                        <h2 class="title text-center mb-3">What Customer Say About Us</h2> --><!-- End .title text-center -->

                        <!-- <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "1200": {
                                        "nav": true
                                    }
                                }
                            }'>
                            <blockquote class="testimonial text-center">
                                <img src="assets/images/testimonials/user-1.jpg" alt="user">
                                <p>“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque aliquet nibh nec urna. <br>In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. ”</p>
                                <cite>
                                    Jenson Gregory
                                    <span>Customer</span>
                                </cite>
                            </blockquote> --><!-- End .testimonial -->

                            <!-- <blockquote class="testimonial text-center">
                                <img src="assets/images/testimonials/user-2.jpg" alt="user">
                                <p>“ Impedit, ratione sequi, sunt incidunt magnam et. Delectus obcaecati optio eius error libero perferendis nesciunt atque dolores magni recusandae! Doloremque quidem error eum quis similique doloribus natus qui ut ipsum.Velit quos ipsa exercitationem, vel unde obcaecati impedit eveniet non. ”</p>

                                <cite>
                                    Victoria Ventura
                                    <span>Customer</span>
                                </cite>
                            </blockquote> --><!-- End .testimonial -->
                        <!-- </div> --><!-- End .testimonials-slider owl-carousel -->
                    <!-- </div> --><!-- End .container -->
                <!-- </div> --><!-- End .bg-light-2 pt-5 pb-6 -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

    </div><!-- End .page-wrapper -->

    
    <!-- Sign in / Register Modal -->
    

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/about.html  22 Nov 2019 10:03:54 GMT -->
</html>