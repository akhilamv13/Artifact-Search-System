<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
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
</head>

<body>
<?php
require("db.class.php");
$sellerid=$_SESSION['sellerid'];
?>
    <div class="page-wrapper">
        <header class="header">
            

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        

                        <a href="index.html" class="logo">
                            <img src="../seller/assets/images/classimax.png" alt="" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../seller/sellerhome.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="../seller/addproduct.php">Add Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add category</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="false">Add Category</a>
							    </li>
							    <!-- <li class="nav-item">
							        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">Register</a>
							    </li> -->
							</ul>
							<div class="tab-content">
							    
							    <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
							    	<form method="post" action="../seller/addcatback.php">
							    		<div class="form-group">
							    			<label for="register-email-2" style="color:#c96">Category</label>
							    			<input type="text" class="form-control"  name="category" required="" autocomplete="off">
							    		</div><!-- End .form-group -->
                      <div class="form-group">
                        <label for="register-email-2" style="color:#c96">Category Image</label>
                        <input type="file" class="form-control"  name="catimg" required="" autocomplete="off">
                      </div>
							    		<div class="form-group">
							    			<label for="register-password-2" style="color:#c96">Product Type</label>
							    			<input type="text" class="form-control" name="prodtype" required="" autocomplete="off">
							    		</div><!-- End .form-group -->
                      <div class="form-group">
                        <label for="register-email-2" style="color:#c96">Product Image</label>
                        <input type="file" class="form-control"  name="prodimg" required="" autocomplete="off">
                      </div>
							    		<div class="form-footer">
							    			<button type="submit" class="btn btn-outline-primary-2" name="sub">
			                					<span>Add Category</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>

			                				<!-- <div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="register-policy-2">
												<label class="custom-control-label" for="register-policy-2">Remember Password</label>
											</div> --><!-- End .custom-checkbox -->
                                           
							    		</div><!-- End .form-footer -->
							    	</form>
							    </div><!-- .End .tab-pane -->
							</div><!-- End .tab-content -->
						</div><!-- End .form-tab -->
            		</div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->

        <footer class="footer">
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    
    

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


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>