<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artefacts</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>


<body class="body-wrapper">

<script>
        window.onload = function (){
            document.getElementById("pswd").onchange = validatePassword;
            document.getElementById("confirmpswd").onchange = validatePassword;
        }
        function validatePassword(){
            var pass2 = document.getElementById("confirmpswd").value;
            var pass1 = document.getElementById("pswd").value;
            if(pass1 != pass2)
                document.getElementById("confirmpswd").setCustomValidity("Passwords Don't match");
            else
                document.getElementById("confirmpswd").setCustomValidity('');
        }
</script>

  

<section style="background-color: #f5f5f5;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg  navigation">
          <a class="navbar-brand" href="index.html">
            <!-- logo -->
            <img src="images/logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto main-nav ">
              <li class="nav-item active">
                <a class="nav-link" href="../mainhome/index.php">Home</a>
              </li>
              <!--
              <li class="nav-item">
                <a class="nav-link" href="dashboard.html">Dashboard</a>
              </li>-->


              <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Category <span><i class="fa fa-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <!-- <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="category.html">Category</a>
                  <a class="dropdown-item" href="single.html">Single Page</a>
                  <a class="dropdown-item" href="store-single.html">Store Single</a>
                  <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                  <a class="dropdown-item" href="user-profile.html">User Profile</a>
                  <a class="dropdown-item" href="submit-coupon.html">Submit Coupon</a>
                  <a class="dropdown-item" href="blog.html">Blog</a>
                  <a class="dropdown-item" href="single-blog.html">Single Post</a>
                </div> -->
              </li>
              <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Contact <span><!--<i class="fa fa-angle-down"></i>--></span>
                </a>
                <!-- Dropdown list -->


              <!--  <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>-->
              </li>
            </ul>
            <ul class="navbar-nav ml-auto mt-10">
              <li class="nav-item">
                <a class="nav-link login-button" href="../login/login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link login-button" href="../userreg/userreg.php">Register</a>
              </li>

              <li class="nav-item">
                <a class="nav-link add-button" href="../sellerreg/sellerreg.php"><!--<i class="fa fa-plus-circle"></i>-->Be the Seller</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
  

  </div>
</section>
<section style="background-color: #f5f5f5;">
  <div style="align-items: center;">
    <div class="col-lg-12 col-md-12">
      <div class="block d-flex" style="margin-left:25%;">
        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" style="width: 500px ; height: 40px;" id="search" name="search" placeholder="Search for store">
  
        <!-- Search Button -->
        <a href="search1.php"><button class="btn btn-main" style="height: 40px ; text-align:center;">SEARCH</button></a>
        
      </div>
    </div><br>

  </div>
</section>


				<div class="widget personal-info" style="padding: 100px 500px 500px;">
					<h6 class="widget-header user"><b><center>SELLER REGISTRATION</center></b></h6>
					<form validate="true" name="sellereg" action="sellerreg1.php" method="post">
						<!-- First Name -->
						<div class="form-group">
						    <label for="first-name">First Name</label>
						    <input type="text" class="form-control" name="fname" required=""  onkeyup="lettersOnly(this)" maxlength=25 autocomplete="off">
						</div>
            <div class="form-group">
                <label for="first-name">Last Name</label>
                <input type="text" class="form-control" name="lname" required=""  onkeyup="lettersOnly(this)" maxlength=25 autocomplete="off">
            </div>
						<div class="form-group">
						    <label for="new-email">Email</label>
						    <input type="email" class="form-control"  name="email" required="" pattern="[0-9a-z._%+-]+@[0-9a-z.-]+\.[a-z]{3,}$" maxlength="50"  autocomplete="off">
						</div>
						<div class="form-group">
						    <label for="first-name">Phone</label>
						    <input type="text" class="form-control" name="phone" required="" onfocus="(this.value='+91')" onkeypress="return isNumber(event)" minlength="13" maxlength="13" autocomplete="off">
						</div>
						<!-- New Password -->
						<div class="form-group">
						    <label for="new-password">Password</label>
						    <input type="password" class="form-control" name="password" minlength="8"  maxlength="15" id="pswd" required="">
						</div>
						<!-- Confirm New Password -->
						<div class="form-group">
						    <label for="confirm-password">Confirm New Password</label>
						    <input type="password" class="form-control"  name="cpassword" id="confirmpswd" minlength="8" maxlength="15"  required="">
						</div>
						<input type="checkbox" id="brand1" value="" required="">
						<label for="brand1"><span></span>I accept the terms of use</label> 
						<br>
            <input type="submit" class="btn btn-transparent" value="Next">
						
						<!-- <button id="submit" class="btn btn-transparent">Register</button> -->
					</form>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="images/logo-footer.png" alt="">
          <!-- description -->
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <a href="">
            <!-- Icon -->
            <img src="images/footer/phone-icon.png" alt="mobile-icon">
          </a>
          <p>Get the Dealsy Mobile App and Save more</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright ?? 2016. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="plugins/tether/js/tether.min.js"></script>
  <script src="plugins/raty/jquery.raty-fa.js"></script>
  <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
  <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
  <script src="plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="js/scripts.js"></script>
  <script>
        function isNumber(evt)
        {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ( charCode > 31 && (charCode < 48 || charCode > 57))
            {
                return false;
            }
            return true;
        }
    </script>
    <script>
        function lettersOnly(input){
            var regex = /[^a-z]/gi;
            input.value = input.value.replace(regex, ""); 

        }
    </script>
    <script>
      function alert1()
      {
        alert("Regesterd Successfully");
      }
    </script>

</body>

</html>