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
                        <li class="breadcrumb-item active" aria-current="page">Registration</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link active" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="false">Register</a>
							    </li>
							    <!-- <li class="nav-item">
							        <a class="nav-link " id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">Register</a>
							    </li> -->
							</ul>
							<div class="tab-content">
							    <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
							    	<form name="reg" action="../seller/otpgeneration.php" method="post">
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
                                        <div class="form-group">
                                            <label for="new-password">Password</label>
                                            <input type="password" class="form-control" name="password" minlength="8"  maxlength="15" id="pswd" required="">
                                        </div>

							    		<div class="form-group">
                                            <label for="confirm-password">Confirm New Password</label>
                                            <input type="password" class="form-control"  name="cpassword" id="confirmpswd" minlength="8" maxlength="15"  required="">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="confirm-password">Confirm New Password</label>
                                            <input type="password" class="form-control"  name="cpassword" id="confirmpswd" minlength="8" maxlength="15"  required=""><br>
                                             <label style=""><a href="../seller/addcategory.php" required="" method="post">Verify email </a> </label>
                                        </div> -->
                                        <<!-- div class="form-group">
                                            <label for="confirm-password">Enter OTP</label>
                                            <input type="password" class="form-control"  name="otp" id="otp" minlength="8" maxlength="15"  required="">
                                        </div> -->
                                        <input type="checkbox" id="brand1" value="" required="">
                                        <label for="brand1"><span></span>I accept the terms of use</label> 
                                        <br>
							    		<div class="form-footer">
							    			<button type="submit" name="next" class="btn btn-outline-primary-2">
			                					<span>Next</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>
							    		</div><!-- End .form-footer -->
							    	</form>
							    	<div class="form-choice">
							    	</div><!-- End .form-choice -->
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


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>