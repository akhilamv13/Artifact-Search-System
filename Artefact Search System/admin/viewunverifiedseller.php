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
    <
<?php
  require("db.class.php");
  $ob=new db_operations();
  $sellerid=$_GET['sellerid'];
   $sel2="select * from sellerreg where sellerid='$sellerid'";
   $res2=$ob->db_read($sel2);
  $row=mysqli_fetch_array($res2);
  $sellerid=$row['sellerid'];
  $fname=$row['fname'];    
  $lname=$row['lname'];    
  $email=$row['email'];
  $phone=$row['phone'];
  $pass=$row['password'];
  $shopname=$row['shopname'];
  $country=$row['country_name'];
  $state=$row['state_name'];
  $city=$row['city_name'];
  $addr=$row['addr']; 
  $gender=$row['gender'];   
  $dob=$row['dob'];
  $age=$row['age']; 
  $gst=$row['gst'];   
  $idproof=$row['idproof'];
  $aadhar=$row['aadhar'];
  $idcard=$row['idcard'];
  $drivlic=$row['drivlic'];

  $sel21="select * from country where country_id='$country_name'";
  $res21=$ob->db_read($sel21);
  $arr21=mysqli_fetch_array($res21);
  $sel3="select * from state where state_id='$state_name'";
  $res3=$ob->db_read($sel3);
  $arr3=mysqli_fetch_array($res3);
  $sel4="select * from city where city_id='$city_name'";
  $res4=$ob->db_read($sel4);
  $arr4=mysqli_fetch_array($res4);
  ?>
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
                        <li class="breadcrumb-item"><a href="../admin/adminindex.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Seller Verification</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box" style="max-width: 100%;">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <h3>Profile</h3>
                                    <hr>
                                </li>
                            </ul>
                        <div class="card-body">
                <!-- <form name="details" action="#" method="POST"> -->
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label style="color:#c96">First Name</label>
                        <input type="text" name="fname" class="form-control"  disabled="" value="<?php echo $fname ?>" required="">
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label style="color:#c96">Last Name</label>
                        <input type="text"  name="lname" class="form-control" disabled="" value="<?php echo $lname ;?>" required="" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                       <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1" style="color:#c96">Email Id</label>
                        <input type="email"  name="email" class="form-control"  disabled=""  value="<?php echo $email ?>">
                      </div>
                    </div>

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1" style="color:#c96">Phone</label>
                        <input type="email"  name="phone" class="form-control"  disabled=""  value="<?php echo $phone ?>">
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label style="color:#c96">Country</label>
                        <input type="text"  name="country" class="form-control" placeholder="country" disabled="" maxlength="13"  required="" value="<?php echo $arr21['country_name'];?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label style="color:#c96">State</label>
                        <input type="text"  name="state"  class="form-control" placeholder="state"  minlength="8" maxlength="15" required="" value="<?php echo $arr3['state_name'];?>" disabled="">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                         <label style="color:#c96">City</label>
                        <input type="text"  name="city"  class="form-control" placeholder="city" minlength="8" maxlength="15" required="" value="<?php echo $arr4['city_name'];?>" disabled="">
                      </div>
                    </div>
                  </div>

                  <br>
                  <div class="row">
                    <div class="col-md-9 pr-1">
                      <div class="form-group">
                        <label style="color:#c96">Address</label>
                        <textarea name="addr" class="form-control"  disabled="" style="min-height:10px;"><?php echo $addr ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label style="color:#c96">Shop Name</label>
                        <input type="text"  name="shopname" class="form-control"  disabled="" required="" style="min-height:65px;"  value="<?php echo $shopname ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label style="color:#c96">Gender</label>
                        <input type="text"  name="gender" class="form-control"  disabled="" value="<?php echo $gender ?>" required="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label style="color:#c96">Date Of Birth</label>
                        <input type="text"  name="dob" class="form-control" disabled="" value="<?php echo $dob ?>" required="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label style="color:#c96">Age</label>
                        <input type="text"  name="age" class="form-control"  disabled="" value="<?php echo $age ?>" required="" >
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label style="color:#c96">GST Number</label>
                        <input type="text"  name="gst" class="form-control"  disabled="" required="" value="<?php echo $gst ?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label style="color:#c96">ID Proof Type</label>
                        <input type="text"  name="idproof" class="form-control"  disabled="" required="" value="<?php echo $idproof ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label style="color:#c96">ID Number</label>
                        <input type="text"  name="idnum" class="form-control" disabled="" required="" onload="findid();">
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    
                    <div class="col-md-6 pr-1">
                      <a href="../admin/verifyseller.php?sellerid=<?php echo $sellerid ?>">
                      <input type="submit"  style="margin-left: 200px; width: 20em; height: 3em;" class="btn btn-primary " value="Verify" onclick="return checkVerify()" >
                    </a>
                    
                    </div>
                  
                  
                    <div class="col-md-6 pr-1">
                      <a href="../admin/deleteseller.php?sellerid=<?php echo $sellerid ?>">
                        <input type="submit"  style="margin-left: 100px; width: 20em; height: 3em;" class="btn btn-primary" value="Delete" onclick="return checkDelete()" >
                      </a>
                    </div>
                   
                  </div>
                <!-- </form> -->
                
              </div>
                    </div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->

        <footer class="footer">
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    

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


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>