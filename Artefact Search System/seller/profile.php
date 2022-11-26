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
    <script>
         window.onload = function (){
             document.getElementById("idproof").onload = findid;
             document.getElementById("idnum").onload = findid;
        }
        function findid(){
            var idproof1=(document.details.idproof.value);
            alert("hello");
            if(idproof1=="aadhar")
            {
                document.details.idnum.value=<?php echo $aadhar ?>;
            }
            if(idproof1=="idcard")
            {
                document.details.idnum.value=<?php echo $idcard ?>;
            }
            if(idproof1=="drivlic")
            {
                document.details.idnum.value=<?php echo $drivlic ?>;
            }
        }
</script>
<?php
  require("db.class.php");
  $ob=new db_operations();
  $email=$_SESSION['email'];

  if(isset($_POST['sub']))
  {
  $phone1=$_POST['phone'];
  $country1=$_POST['country'];
  $state1=$_POST['state'];
  $city1=$_POST['city'];
  $addr1=$_POST['addr'];

   $sel2="select * from sellerreg where phone='$phone1' except select * from sellerreg where email='$email'";
   $res2=$ob->db_read($sel2);
   if(mysqli_num_rows($res2))
   {
    ?>
    <script>
      alert("Mobile number already exist");
      window.location='Profile.php'
    </script>;
    <?php
        }
        else
        {


  $update1="update sellerreg set phone='$phone1',country_name='$country1',state_name='$state1',city_name='$city1',addr='$addr1' where email='$email'";

   //Secho  $update1;

   //$update2="update login set password='$password1' where emailid='$emailid'";

   $update3="update registration set phone='$phone1' where email='$email'";

   $ob->db_write($update1);
   //$ob->db_write($update2);
   $ob->db_write($update3);

} 
}

 
  $sel="select * from sellerreg where email='$email'";
  $sel1="select * from login where email='$email'";
  $res=$ob->db_read($sel);
  $arr=mysqli_fetch_array($res);

  $res1=$ob->db_read($sel1);
  $arr1=mysqli_fetch_array($res1);

  $fname=$arr['fname'];
  $lname=$arr['lname'];
  $phone=$arr['phone'];
  $country_name=$arr['country_name'];
  $state_name=$arr['state_name'];
  $city_name=$arr['city_name'];
  $addr=$arr['addr'];
  $gender=$arr['gender'];
  $dob=$arr['dob'];
  $age=$arr['age'];
  $gst=$arr['gst'];
  $idproof=$arr['idproof'];
  $aadhar=$arr['aadhar'];
  $idcard=$arr['idcard'];
  $drivlic=$arr['drivlic'];

  $sel2="select * from country where country_id='$country_name'";
  $res2=$ob->db_read($sel2);
  $arr2=mysqli_fetch_array($res2);
  $sel3="select * from state where state_id='$state_name'";
  $res3=$ob->db_read($sel3);
  $arr3=mysqli_fetch_array($res3);
  $sel4="select * from city where city_id='$city_name'";
  $res4=$ob->db_read($sel4);
  $arr4=mysqli_fetch_array($res4);
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
                        <li class="breadcrumb-item"><a href="../seller/sellerindex.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                <form name="details" action="../seller/editprofile.php" method="POST">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label style="color:#c96">First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" disabled="" value="<?php echo $fname ?>" required="">
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label style="color:#c96">Last Name</label>
                        <input type="text"  name="lname" class="form-control" placeholder="Last Name" disabled="" value="<?php echo $lname ;?>" required="" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                       <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1" style="color:#c96">Email Id</label>
                        <input type="email"  name="email" class="form-control" placeholder="Email" disabled=""  value="<?php echo $email ?>">
                      </div>
                    </div>

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1" style="color:#c96">Phone</label>
                        <input type="email"  name="phone" class="form-control" placeholder="Email" disabled=""  value="<?php echo $phone ?>">
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label style="color:#c96">Country</label>
                        <input type="text"  name="country" class="form-control" placeholder="country" disabled="" maxlength="13"  required="" value="<?php echo $arr2['country_name'];?>">
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
                    <div class="col-md-12 pr-1">
                      <div class="form-group">
                        <label style="color:#c96">Address</label>
                        <input type="text"  name="addr" class="form-control" placeholder="Address" disabled="" required=""  value="<?php echo $addr ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label style="color:#c96">Gender</label>
                        <input type="text"  name="gender" class="form-control" placeholder="Gender" disabled="" value="<?php echo $gender ?>" required="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label style="color:#c96">Date Of Birth</label>
                        <input type="text"  name="dob" class="form-control" placeholder="dob" disabled="" value="<?php echo $dob ?>" required="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label style="color:#c96">Age</label>
                        <input type="text"  name="age" class="form-control" placeholder="age" disabled="" value="<?php echo $age ?>" required="" >
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label style="color:#c96">GST Number</label>
                        <input type="text"  name="gst" class="form-control" placeholder="gst" disabled="" required="" value="<?php echo $gst ?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label style="color:#c96">ID Proof Type</label>
                        <input type="text"  name="idproof" id="idproof" class="form-control" placeholder="idproof" disabled="" required="" value="<?php echo $idproof ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label style="color:#c96">ID Number</label>
                        <input type="text"  name="idnum" id="idnum" class="form-control" placeholder="idnum" disabled="" required="" onload="c()">
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    
                    <div class="col-md-6 pr-1">
                      <a href="../seller/editprofile.php">
                      <input type="submit"  style="margin-left: 200px; width: 20em; height: 3em;" class="btn btn-primary " value="Edit Profile" >
                    </a>
                    
                    </div>
                  </form>
                  <form action="../seller/changepassword.php">

                    <div class="col-md-6 pr-1">
                      
                        <input type="submit"  style="margin-left: 100px; width: 20em; height: 3em;" class="btn btn-primary " onclick="change()" value="Change Password" >
                      
                    </div>
                   
                  </div>
                </form>
                
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
     <script>
        function change()
    {
      window.location="change.php"
    }
     </script>
     <script>
        function c()
    {
      alert("hekllo");
    }
     </script>
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