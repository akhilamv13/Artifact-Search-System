<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- molla/category-4cols.html  22 Nov 2019 10:02:52 GMT -->
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
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
</head>

<body>
    <?php
    require("db.class.php");
    $ob=new db_operations();
    $catname=$_SESSION['cat'];
    $prodtype=$_GET['prodtype'];
    $_SESSION['prodtype']=$prodtype;
    ?>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index.html" class="logo">
                            <img src="../seller/assets/images/classimax.png" alt="" width="105" height="25">
                        </a>

                    </div><!-- End .header-left -->

                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Products<span>View By Product Type</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../admin/adminindex.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="../admin/categories.php">Categories</a></li>
                        <li class="breadcrumb-item"><a href="">Product Type</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-12">
                            
                        <div class="products mb-3">
                        <div class="row justify-content-center">
                        <div class="gallery">
        <div class="container">  
            <!--<h3 class="w3agileits-title">Destinations</h3> -->
            <div class="gallery-grids-top">
                <div class="gallery-grids">
                                <div class="table-responsive">
                        <table class="table" border="1">
                          <thead class=" text-primary">
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Product ID</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Product Title</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Product image</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Brand</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">View More</th>
                          </thead>
      
                          <tbody>
                            <?php
                              
                                        $conn1=mysqli_connect("localhost","root","","$catname");
                    
                                        $query2="select * from productdet where prodtype='$prodtype' and status=0";
                                        $result1=mysqli_query($conn1,$query2);
                                        if(mysqli_num_rows($result1)>0){
                                            
                                            while($rows=mysqli_fetch_assoc($result1))
                                            {
                                                $sellerid=$rows['sellerid'];
                                                $pid=$rows['pid'];
                                                $prodtype=$rows['prodtype'];
                                                $prodtitle=$rows['prodtitle'];
                                                $brand=$rows['brand'];
                                                $proddesc=$rows['proddesc'];
                                                $prodkeyword=$rows['prodkeyword'];
                                                $color=$rows['color'];
                                                $price=$rows['price'];
                                                $img1=$rows['img1'];
                                                $img2=$rows['img2'];
                                                $img3=$rows['img3'];
                                                $stockstatus=$rows['stockstatus'];
                                                $availableat=$rows['availableat'];
                                                $status=$rows['status'];
                              ?>
                            <tr>
                              <td><center style="font-size: 1.1em;color: #282828;"><?php echo $pid; ?></center></td>
                        
                               <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><?php echo $prodtitle; ?></center></td>

                              <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><img src="../seller/assets/images/products/<?php echo $img1; ?>" style="width: 100px;" alt="Product image" class="product-image"></center></td>

                              <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><?php echo $brand; ?></center></td>

                              <form method="post" action="../admin/viewproduct.php?pid=<?php echo $pid ?>"><td><center style="font-size: 1.1em;color: #282828;"><button class="btn btn-outline-primary-2">View More</button></center></td></form>
                            </tr>
                              <?php 
                               
                                }
                                }
                                
                              ?>

                          </tbody>  
                        </table>     

                      </div>

                    <div class="clearfix"> </div>   
                    <script src="js/lightbox-plus-jquery.min.js"></script>  
                </div> 
            </div> 
        </div>
    </div>
    </div>


                		</div><!-- End .col-lg-9 -->
                		
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wNumb.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>


<!-- molla/category-4cols.html  22 Nov 2019 10:02:55 GMT -->
</html>