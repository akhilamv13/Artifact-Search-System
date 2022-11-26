<?php
session_start();
require("db.class.php");
$ob=new db_operations();
$catname=$_GET['cat'];
$cat=$catname;
$_SESSION['cat']=$cat;
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
                        <li class="breadcrumb-item"><a href="../admin/adminindex.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="../admin/categories.php">Categories</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Type</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            			
                <div class="form-box" style="max-width: 100%;">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <h3>Add Product Type</h3>
                                    <hr>
                                </li>
                            </ul>
                        <div class="card-body">
                <form name="details" action="../admin/prodtype.php" method="POST">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <input type="text" name="prodtype" class="form-control" placeholder="Product Type"  required="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <input type="file"  name="prodimg" class="form-control" placeholder="Product Type image" required="" >
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <button class="btn btn-outline-primary-2" name="add">Add Product Types</button>
                      </div>
                    </div>
                  </div>
                </form>
                 <div class="table-responsive">
                        <table class="table" border="1">
                          <thead class=" text-primary">
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Product Type ID</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Product Type Name</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Product Type Image</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Unverified Products</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Verified Products</th>
                           
                          </thead>
      
                          <tbody>
                            <?php
                              
                                $conn1=mysqli_connect("localhost:3306","root","",$cat);
                                if (!$conn1) {
                                  die("Connection failed: " . mysqli_connect_error());
                                  }
                                $sel='select * from product';
                                $res=mysqli_query($conn1,$sel);
                                
                                  while ($rows = mysqli_fetch_array($res)) 
                                  {
                                    $id=$rows['0'];
                                    $prodtype=$rows['1']; 
                                    $prodimg=$rows['2'];
                              ?>
                            <tr>
                              <td><center style="font-size: 1.1em;color: #282828;"><?php echo $id; ?></center></td>
                        
                               <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><?php echo $prodtype; ?></center></td>

                              <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><img src="../seller/assets/images/producttype/<?php echo $prodimg; ?>" style="width: 100px;" alt="Product image" class="product-image"></center></td>

                              <td><center style="font-size: 1.1em;color: #282828;"><a href='../admin/products.php?prodtype=<?php echo $prodtype ?>'><button class="btn btn-outline-primary-2">Unverified Products</button></a></center></td>

                              <td><center style="font-size: 1.1em;color: #282828;"><a href='../admin/verifiedproducts.php?prodtype=<?php echo $prodtype ?>'><button class="btn btn-outline-primary-2">Verified Products</button></a></center></td>

                              
                            </tr>
                              <?php 
                               
                              
                                }
                                
                              ?>

                          </tbody>  
                        </table>     

                      </div>
                 
                
              </div>
                    </div><!-- End .form-box -->
              </div><!-- End .container -->
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
    <script>
        function validateEmail(sEmail)
        {
          var regEmail =  /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[A-Za-z0-9]?\.)+[A-Za-z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

         if(!sEmail.match(regEmail)){

            alert("invalid Email Address");

            return false;
         }
         return true;
     }        
    </script>
</body>


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>