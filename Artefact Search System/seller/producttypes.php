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
    $sellerid=$_SESSION['sellerid'];
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
        			<h1 class="page-title">Products<span>View By Category</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../seller/sellerindex.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Types</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-12">
                            <form action="#" method="post">
                            <br><br><br>
                            <div class="row">
                                    
                                    <div class="col-md-9 pr-1">
                                        <div class="form-group">
                                            
                                            <select name="catname" id="catname" class="form-control" required="" style="height: 3em;">
                                            <option value="">Select Category</option>
                                            <?php 
                                            $query= "select * from category";
                                            $result= mysqli_query($conn,$query);
                                            while ($row= mysqli_fetch_array($result)) { ?>
                                            <option value="<?php echo $row['catname']; ?>"><?php echo $row['catname'] ?></option>
                                            <?php
                                             } 
                                             $category=$row['catname'];
                                            echo $category;
                                            ?>
                                            </select>
                                          <span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-1">
                                      <div class="form-group">
                                          <input type="submit" name="sub"  style="width: 20em; height: 3em;" class="btn btn-primary " value="View Products" >
                                      </div>
                                    </div>
                            </div>
                        </form>

                        <div class="products mb-3">
                        <div class="row justify-content-center">
                        <div class="gallery">
        <div class="container">  
            <!--<h3 class="w3agileits-title">Destinations</h3> -->
            <div class="gallery-grids-top">
                <div class="gallery-grids">
                    <div class="row">
                         <?php
                                    if(isset($_POST['sub']))
                                    {
                                        $catname=$_POST['catname'];
                                        $_SESSION['catname']=$_POST['catname'];
                                        $conn1=mysqli_connect("localhost","root","","$catname");
                    
                                        $query2="select * from product";
                                        $result1=mysqli_query($conn1,$query2);
                                        if(mysqli_num_rows($result1)>0){
                                            
                                            while($rows=mysqli_fetch_assoc($result1))
                                            {
                                                $prodid=$rows['prodid'];
                                                $prodtype=$rows['prodtype'];
                                                $prodimg=$rows['prodimg'];
                                        ?>
                        
                        <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="">
                            <div class="product product-7 text-center">
                            <figure class="product-media">
                                                <a href="../seller/products.php?prodtype=<?php echo $prodtype ?>">
                                                    <img src="assets/images/producttype/<?php echo $prodimg ?>" alt="Product image" class="product-image">
                                                </a>
                                                <?php echo $prodtype ?>

                                                <div class="product-action">
                                                    <a href="../seller/products.php?prodtype=<?php echo $prodtype ?>" class="btn-product btn-quickview"><span><?php echo $prodtype ?></span></a>

                                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                         </div>
                     </div>
                    
                        </div>
                         
                        <?php
                                 }
                                  }
                                  }
                                ?>
                       <br>
                       <br>
                    </div>
                    <div class="clearfix"> </div>   
                    <script src="js/lightbox-plus-jquery.min.js"></script>  
                </div> 
            </div> 
        </div>
    </div>
    </div>


                			<!-- <nav aria-label="Page navigation">
							    <ul class="pagination justify-content-center">
							        <li class="page-item disabled">
							            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
							                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
							            </a>
							        </li>
							        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
							        <li class="page-item"><a class="page-link" href="#">2</a></li>
							        <li class="page-item"><a class="page-link" href="#">3</a></li>
							        <li class="page-item-total">of 6</li>
							        <li class="page-item">
							            <a class="page-link page-link-next" href="#" aria-label="Next">
							                Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
							            </a>
							        </li>
							    </ul>
							</nav> -->
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