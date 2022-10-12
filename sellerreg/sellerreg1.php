<?php session_start();?>
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
<?php
   require("db.class.php");
   $ob=new db_operations();
$_SESSION['fname']=$_POST['fname'];
$_SESSION['lname']=$_POST['lname'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['password']=$_POST['password'];
   $email=$_POST['email'];
  $phone=$_POST['phone'];
   $sel1="select * from registration where email='$email'";
    $sel2="select * from registration where phone='$phone'";
   $res1=$ob->db_read($sel1);
   $res2=$ob->db_read($sel2);
   if(mysqli_num_rows($res1))
      {
         ?>
         </script>;
         <script>
            alert("User already exist");
            window.location='sellerreg.php'
         </script>;
         <?php
      }
      if(mysqli_num_rows($res2))
      {?>
         <script>
            alert("mobile number already exists");
            window.location='sellerreg.php'
         </script>;
         <?php
      }
      ?>

<script>
    function visiblility1(){
      var idproof1=(document.sellserreg.idproof.value);
      if(idproof1=="aadhar")
      {

        document.getElementById('view1').style.visibility="visible";
        document.getElementById('view2').style.visibility="hidden";
        document.getElementById('view3').style.visibility="hidden"; 
        document.sellserreg.idcard.value=0;
        document.sellserreg.drivlic.value=0;
        document.sellserreg.aadhar.value=0;

      }
      else if(idproof1=="idcard")
      {

        document.getElementById('view1').style.visibility="hidden";
        document.getElementById('view2').style.visibility="visible";
        document.getElementById('view3').style.visibility="hidden";
        document.sellserreg.idcard.value=0;
        document.sellserreg.drivlic.value=0;
        document.sellserreg.aadhar.value=0;

      }
      else
      {

        document.getElementById('view1').style.visibility="hidden";
        document.getElementById('view2').style.visibility="hidden";
        document.getElementById('view3').style.visibility="visible";
        document.sellserreg.aadhar.value=0;
        document.sellserreg.idcard.value=0;
        document.sellserreg.drivlic.value=0;
      }
    }
  </script>
  <script>
    function agecalc()
    {
      var date1=new Date();
      var date2=new Date(document.getElementById("dob").value);
      var myage=date1.getFullYear()-date2.getFullYear();
      var k=date1.getMonth()-date2.getMonth();
      if(k<0 || (k==0 && date1.getDate()<date2.getDate()))
      {
        myage--;
      }

      document.sellserreg.age.value= myage;
      //document.getElementById('view').style.visibility="visible";

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
					<form validate="true" name="sellserreg" action="backend.php" method="post">
						<!-- First Name -->
						<div class="form-group">
						    <label for="first-name">Address</label>
						    <input type="text" class="form-control" name="addr" required=""  onkeyup="lettersOnly(this)" maxlength=25 autocomplete="off">
						</div>
            <!-- <div class="form-group">
                <label for="first-name">Country</label>
                &nbsp; &nbsp; &nbsp;
                <select name="country" id="country" style="width:350px;height:40px" required="">
                               <option value="">Select Country</option>
                         <?php
                        //$contryData="select country_id,country_name from country";
                        //$result=$ob->db_read($contryData);
                        
                        //if(mysqli_num_rows($result)>0)
                          {
                              //while($arr=mysqli_fetch_assoc($result))
                                {
                             ?>
                          <option value="<?php //echo $arr['country_name']; ?>">
                           <?php //echo $arr['country_name']; ?>
                          </option>
                       <?php 
                           }  }
                       ?>
                            </select>
            <span></span>
            </div>
						<div class="form-group">
						    <label for="state">State</label>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
             <select name="state" id="state" style="width:350px;height:40px" required="">
                                <option value="" class="name" id="state" disabled selected hidden>Select...</option>
                            </select>
            <span></span>
            </div>
						<div class="form-group">
						    <label for="city">City</label>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
             <select name="city" id="city" style="width:350px;height:40px" required="">
                                <option value="" class="name" id="city" disabled selected hidden>Select...</option>
                            </select>
            <span></span>
						</div> -->
						<!-- New Password -->
						<div class="form-group">
						    <label for="new-password">Gender</label>
            &nbsp; &nbsp; &nbsp;
            <input type="radio" name="gender" value="male">
            <label for="male"><span></span>Male</label> 
            &nbsp; &nbsp; &nbsp;
            <input type="radio" name="gender" value="female">
            <label for="female"><span></span>Female</label>
            &nbsp; &nbsp; &nbsp;
            <input type="radio" name="gender" value="others">
            <label for="others"><span></span>Others</label>
						</div>
						<!-- Confirm New Password -->
						<div class="form-group">
						    <label for="dob">Date of Birth</label>
            &nbsp &nbsp &nbsp &nbsp
            <input type="date" name="dob" id="dob" onblur="agecalc()" required=""> 
            <label></label>
            <span></span>
						</div>
            <div class="form-group">
                <label for="age">Age</label>
                &nbsp &nbsp &nbsp &nbsp
                <input type="text" name="age" id="age" required=""> 
            <span></span>
            </div>
            <div class="form-group">
                <label for="gst">GST Number</label>
                <input type="text" class="form-control"  name="gst" minlength="12"  maxlength="12" id="aadhar" required="">
            </div>
            <div class="form-group">
                <label for="idproof">ID Proof Type</label>
                &nbsp &nbsp
                <select name="idproof" id="idproof" onchange="visiblility1()" style="width:350px;height:40px">
                <option>-------------SELECT YOUR ID PROOF--------------</option>
                                <option value="aadhar" name="aadhark">AADHAR NUMBER</option>
                                <option value="idcard" name="idcardk">ID CARD NUMBER</option>
                                <option value="drivlic" name="drivlick">DRIVING LICENCE NUMBER</option>
                            </select>
            <span></span>
            </div>
            <div class="form-group" style="visibility: hidden;" id="view1">
                <label for="aadhar">Aadhar</label>
                <input type="text" class="form-control" name="aadhar" minlength="12"  maxlength="12" id="aadhar" required="">
            </div>
            <div class="form-group" style="margin-top: -50px;visibility: hidden;" id="view2">
                <label for="idcard">ID Card</label>
                <input type="text" class="form-control" name="idcard" id="idcard" minlength="8" maxlength="15" required="">
            </div>
            <div class="form-group" style="margin-top: -50px;visibility: hidden;" id="view3">
                <label for="drivlic">Driving Licence</label>
                <input type="text" class="form-control" name="drivlic" id="drivlic" minlength="8" maxlength="15" required="">
            </div>
            <input type="submit" class="btn btn-transparent" value="Register">
						
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
            <p>Copyright © 2016. All Rights Reserved</p>
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