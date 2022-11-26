<?php session_start();?>
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
<?php
   require("db.class.php");
   $ob=new db_operations();
   $fname=$_SESSION['fname'];
   $lname=$_SESSION['lname'];
   $email=$_SESSION['email'];
   $password=$_SESSION['password'];
   //echo $email;

      ?>

<script>
    function visiblility1(){
      var idproof1=(document.sellserreg.idproof.value);
      if(idproof1=="aadhar")
      {

        document.getElementById('view1').style.visibility="visible";
        document.getElementById('view2').style.visibility="hidden";
        document.getElementById('view3').style.visibility="hidden";
        document.sellserreg.aadhar.value=0; 
        document.sellserreg.idcard.value=0;
        document.sellserreg.drivlic.value=0;

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
							    	<form validate="true" name="sellserreg" action="../seller/regback.php" method="post">
                                        <div class="form-group">
                                            <label for="shop">Shop Name</label>
                                            <input type="text" class="form-control"  name="shopname" minlength="3"  maxlength="12" id="shopname" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                                <select type="text" name="country" id="country" class="form-control">
                                                    <option>Select Country</option>
                                                    <?php 
                                                       $query= "select * from country";
                                                       $result= mysqli_query($conn,$query);
                                                       while ($row= mysqli_fetch_array($result)) { ?>
                                                    <option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name'] ?></option>
                                                    <?php
                                                        $category=$row['country_name'];
                                                        echo $category;
                                                         } ?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                           <label for="state">State</label>
                                           <select type="text" id="state" name="state" class="form-control"></select>

                                        </div>
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <select name="city" id="city" class="form-control"></select>
                                        </div>

                                        <div class="form-group">
                                            <label for="first-name">Address</label>
                                            <input type="text" class="form-control" name="addr" required="" maxlength=25 autocomplete="off">
                                        </div>
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
                                        <div class="form-group">
                                            <label for="dob">Date of Birth</label>
                                            
                                            <input type="date" class="form-control" name="dob" id="dob" max="2003-04-15"  onblur="agecalc()" required=""> 
                                            <label></label>
                                            <span></span>
                                        </div>
							    		<div class="form-group">
                                            <label for="age">Age</label>
                                            
                                            <input type="text" class="form-control" name="age" id="age" required=""> 
                                            <span></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="gst">GST Number</label>
                                            <input type="text" class="form-control"  name="gst" minlength="12"  maxlength="12" id="aadhar" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="idproof">ID Proof Type</label>
                                            &nbsp &nbsp
                                            <select name="idproof" class="form-control" id="idproof" onchange="visiblility1()" style="width:350px;height:40px">
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
							    		<div class="form-footer">
							    			<button type="submit" class="btn btn-outline-primary-2">
			                					<span>Register</span>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('#country').change(function() {
                    loadState($(this).find(':selected').val())
                })
                $('#state').change(function() {
                    loadCity($(this).find(':selected').val())
                })


            });

            function loadCountry() {
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=country"
                }).done(function(result) {


                    $(result).each(function() {
                        $("#country").append($(result));
                    })
                });
            }
            function loadState(countryId) {
                $("#state").children().remove()
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=state&countryId=" + countryId
                }).done(function(result) {

                    $("#state").append($(result));

                });
            }
            function loadCity(stateId) {
                $("#city").children().remove()
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=city&stateId=" + stateId
                }).done(function(result) {

                    $("#city").append($(result));

                });
            }

            // init the countries
            loadCountry();
        </script>
</body>


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>