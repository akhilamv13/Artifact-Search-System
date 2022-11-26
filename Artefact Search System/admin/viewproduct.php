<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- molla/product-sticky.html  22 Nov 2019 10:03:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
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
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
</head>

<body>
    <?php
    require("db.class.php");
    $ob=new db_operations();
    $catname=$_SESSION['cat'];
    $pid=$_GET['pid'];
    ?>
    <div class="page-wrapper">
        <header class="header">

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
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../admin/adminindex.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="../admin/categories.php">Categories</a></li>
                        <li class="breadcrumb-item"><a href="">Product Types</a></li>
                        <li class="breadcrumb-item"><a href="">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product View</li>
                    </ol>

                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
                                    <?php
                                        $conn1=mysqli_connect("localhost","root","","$catname");
                    
                                        $query2="select * from productdet where pid='$pid'";
                                        $result1=mysqli_query($conn1,$query2);
                                        if(mysqli_num_rows($result1)>0){
                                            
                                        $rows=mysqli_fetch_assoc($result1);
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

                                        $conn2=mysqli_connect("localhost","root","","artefacts");
                    
                                        $query3="select * from sellerreg where sellerid='$sellerid'";
                                        $result2=mysqli_query($conn2,$query3);
                                        if(mysqli_num_rows($result2)>0){
                                            
                                        $row=mysqli_fetch_assoc($result2);
                                                //$sellerid=$row['0'];
                                                $fname=$row['fname'];    
                                                $lname=$row['lname'];    
                                                $email=$row['email'];
                                                $phone=$row['phone'];
                                                $pass=$row['password'];
                                                $shopname=$row['shopname'];
                                                $addr=$row['addr']; 
                                                $gender=$row['gender'];   
                                                $dob=$row['dob'];
                                                $age=$row['age'];
                                                $gst=$row['gst'];
                                                
                                        ?>
            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-separated">
                                   
                                    <figure class="product-separated-item">
                                        <img src="../seller/assets/images/products/<?php echo $img1; ?>" data-zoom-image="assets/images/products/single/sticky/1-big.jpg" alt="product image">

                                        <a href="#" id="btn-separated-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure>

                                    <figure class="product-separated-item">
                                        <img src="../seller/assets/images/products/<?php echo $img2; ?>" data-zoom-image="assets/images/products/single/sticky/2-big.jpg" alt="product image">
                                    </figure>

                                    <figure class="product-separated-item">
                                        <img src=".../seller/assets/images/products/<?php echo $img3; ?>" data-zoom-image="assets/images/products/single/sticky/3-big.jpg" alt="product image">
                                    </figure>

                                    <!-- <figure class="product-separated-item">
                                        <img src="assets/images/products/single/sticky/4.jpg" data-zoom-image="assets/images/products/single/sticky/4-big.jpg" alt="product image">
                                    </figure> -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details sticky-content">
                                    <h1 class="product-title"><?php echo $prodtitle; ?></h1><!-- End .product-title -->

                                    <div class="product-price">
                                        <span class="new-price">RS.<?php echo $price; ?>/-</span>
                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                        <p style="text-transform: uppercase;"><?php echo $stockstatus; ?> </p>
                                    </div><!-- End .product-content -->
                                    <div class="product-content">
                                        <label>Color: <?php echo $color; ?>
                                        </label>
                                    </div><!-- End .product-content -->


                                    <div class="accordion accordion-plus product-details-accordion" id="product-accordion">
                                        <div class="card card-box card-sm">
                                            <div class="card-header" id="product-desc-heading">
                                                <h2 class="card-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#product-accordion-desc" aria-expanded="false" aria-controls="product-accordion-desc">
                                                        Description
                                                    </a>
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="product-accordion-desc" class="collapse" aria-labelledby="product-desc-heading" data-parent="#product-accordion">
                                                <div class="card-body">
                                                    <div class="product-desc-content">
                                                        <p><?php echo $proddesc; ?></p>
                                                    </div><!-- End .product-desc-content -->
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->

                                        <div class="card card-box card-sm">
                                            <div class="card-header" id="product-info-heading">
                                                <h2 class="card-title">
                                                    <a role="button" data-toggle="collapse" href="#product-accordion-info" aria-expanded="true" aria-controls="product-accordion-info">
                                                        Additional Information
                                                    </a>
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="product-accordion-info" class="collapse show" aria-labelledby="product-info-heading" data-parent="#product-accordion">
                                                <div class="card-body">
                                                    <div class="product-desc-content">
                                                        <p><?php echo $prodkeyword; ?></p>
                                                    </div><!-- End .product-desc-content -->
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->
                                        <div class="card card-box card-sm">
                                            <div class="card-header" id="product-info-heading">
                                                <h2 class="card-title">
                                                    <a role="button" data-toggle="collapse" href="#product-accordion-avail" aria-expanded="true" aria-controls="product-accordion-avail">
                                                        Available At
                                                    </a>
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="product-accordion-avail" class="collapse show" aria-labelledby="product-info-heading" data-parent="#product-accordion">
                                                <div class="card-body">
                                                    <div class="product-desc-content">
                                                        <p><?php echo $availableat; ?></p>
                                                    </div><!-- End .product-desc-content -->
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->
                                        <div class="card card-box card-sm">
                                            <div class="card-header" id="product-info-heading">
                                                <h2 class="card-title">
                                                    <a role="button" data-toggle="collapse" href="#product-accordion-seller" aria-expanded="true" aria-controls="product-accordion-seller">
                                                        Seller Information
                                                    </a>
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="product-accordion-seller" class="collapse show" aria-labelledby="product-info-heading" data-parent="#product-accordion">
                                                <div class="card-body">
                                                    <div class="product-desc-content">
                                                        Seller Name : <p><?php echo $fname ; echo $lname; ?></p><br>
                                                        Seller Email : <p><?php echo $email ; ?></p><br>
                                                        Seller Phone : <p><?php echo $phone; ?></p><br>
                                                        Shop Name : <p><?php echo $shopname; ?></p><br>
                                                    </div><!-- End .product-desc-content -->
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->
                                </div><!-- End .product-details -->
                                <div class="product-details-action">
                                        <a href="../admin/verifyproduct.php?pid=<?php echo $pid ?>" class="btn btn-primary" onclick="return checkDelete()"><span>Verify Product</span></a>

                                        <div class="details-action-wrapper">
                                            <a href="../admin/deleteproduct.php?pid=<?php echo $pid ?>" class="btn btn-primary" onclick="return checkDelete()"><span>Delete Product</span></a>
                                            <!-- <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span> --></a>
                                        </div><!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->
                    <?php
                     }
                     }
                     ?>

                    <hr class="mt-3 mb-5">

            </div><!-- End .page-content -->
        </main><!-- End .main -->

        
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    
    

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.sticky-kit.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Do you really want to delete the product?');
}
</script>
<script language="JavaScript" type="text/javascript">
function checkVerify(){
    return confirm('Do you really want to verify the product?');
}
</script>
</body>


<!-- molla/product-sticky.html  22 Nov 2019 10:03:32 GMT -->
</html>