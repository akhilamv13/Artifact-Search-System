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
  $ob=new db_operations();
  $sellerid=$_SESSION['sellerid'];
  $catname=$_SESSION['catname'];
  $pid=$_GET['pid'];
  $conn1=mysqli_connect("localhost","root","","$catname");
  // if(isset($_POST['sub']))
  // {
  // $prodtitle=$_POST['prodtitle'];
  // $brand=$_POST['brand'];
  // $proddesc=$_POST['proddesc'];
  // $prodkeyword=$_POST['prodkeyword'];
  // $color=$_POST['color'];
  // $price=$_POST['price'];
  // $img1=$_POST['img1'];
  // $img2=$_POST['img2'];
  // $img3=$_POST['img3'];
  // $stockstatus=$_POST['stockstatus'];
  // $availableat=$_POST['availableat'];

  //  $sel2="select * from productdet where sellerid='$sellerid' and pid='$pid'";
  //  $result1=mysqli_query($conn1,$sel2);
   //if(mysqli_num_rows($res2))
  // $update1="update productdet set prodtitle='$prodtitle',brand='$brand',proddesc='$proddesc',prodkeyword='$prodkeyword',color='$color',price='$price',img1='$img1',img2='$img2',img3='$img3',stockstatus='$stockstatus',availableat='$availableat' where pid='$pid' and sellerid='$sellerid'";

   //Secho  $update1;

   //$update2="update login set password='$password1' where emailid='$emailid'";

   //$update3="update registration set phone='$phone1' where email='$email'";
   // mysqli_query($conn1,$update1);
   //$ob->db_write($update2); 
// }



  $query2="select * from productdet where sellerid='$sellerid' and pid='$pid'";
  $res=mysqli_query($conn1,$query2);
  $arr=mysqli_fetch_array($res);

  $pid=$arr['pid'];
  $prodtype=$arr['prodtype'];
  $prodtitle=$arr['prodtitle'];
  $brand=$arr['brand'];
  $proddesc=$arr['proddesc'];
  $prodkeyword=$arr['prodkeyword'];
  $color=$arr['color'];
  $price=$arr['price'];
  $img1=$arr['img1'];
  $img2=$arr['img2'];
  $img3=$arr['img3'];
  $stockstatus=$arr['stockstatus'];
  $availableat=$arr['availableat'];
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
                        <li class="breadcrumb-item"><a href="../seller/producttypes.php">Product Type</a></li>
                        <li class="breadcrumb-item"><a href="../seller/products.php">Products</a></li>
                        <li class="breadcrumb-item"><a href="../seller/productview.php">Product View</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
              <div class="container">
                <div class="form-box" style="max-width: 100%;">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <h3>Edit Product</h3>
                                    <hr>
                                </li>
                            </ul>
                        <div class="card-body">
                <form name="details" action="../seller/edit.php?pid=<?php echo $pid;?>" method="POST">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label style="color:#c96">Product ID</label>
                        <input type="text" name="pid" class="form-control" placeholder="Product ID" disabled="" value="<?php echo $pid ?>" required="" disabled>
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label style="color:#c96">Product Type</label>
                        <input type="text"  name="prodtype" class="form-control" placeholder="Product Type" disabled="" value="<?php echo $prodtype ;?>" required="" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                       <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1" style="color:#c96">Product Title</label>
                        <input type="text"  name="prodtitle" class="form-control" placeholder="Product Title" value="<?php echo $prodtitle ?>">
                      </div>
                    </div>

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1" style="color:#c96">Brand</label>
                        <input type="text"  name="brand" class="form-control" placeholder="Brand"  value="<?php echo $brand ?>">
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Product Details</label><br>
                          <textarea name="proddesc" class="form-control" style="width: 495px;min-height: 100px;"><?php echo $proddesc ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Product Keyword</label><br>
                          <textarea name="prodkeyword" class="form-control" style="width: 500px;min-height: 100px;"><?php echo $prodkeyword ?></textarea>
                      </div>
                    </div>
                  </div>

                  <br>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Color</label>
                          <input type="text" class="form-control" name="color" required="" value="<?php echo $color ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Price</label>
                          <input type="number" class="form-control"  name="price" required="" value="<?php echo $price ?>">
                      </div>
                    </div>
                  </div>
                  <<div class="row">
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                          <label style="color:#c96">img1</label>
                          <input type="file" class="form-control"  name="img1" required="" value="<?php echo('C:\\xampp\\htdocs\\project\\project\\seller\\assets\\images\\products\\kurtha.jpg'); ?>"><span name="old" value="<?=$img1?>"><?php echo $img1 ?></span>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                          <label style="color:#c96">img2</label>
                          <input type="file" class="form-control"  name="img2" value="<?php echo $img2 ?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                          <label style="color:#c96">img3</label>
                          <input type="file" class="form-control"  name="img3" value="<?php echo $img3 ?>">
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Stock status</label>
                          <select name="stockstatus" id="stock" class="form-control" style="width:458px;height:40px" required="">
                            <option value="<?php echo $stockstatus ?>">Select Availability..</option>
                            <option value="instock" <?php if($stockstatus=="instock") echo 'selected="selected"'; ?>>In stock</option>
                            <option value="outstock" <?php if($stockstatus=="outstock") echo 'selected="selected"'; ?>>Out of stock</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                          <label style="color:#c96">Available at</label>
                          <textarea name="availableat" class="form-control" style="width: 500px;min-height: 50px;"><?php echo $availableat ?></textarea>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    
                    <div class="col-md-6 pr-1">
                      <input type="submit" name="sub"  style="margin-left: 400px; width: 20em; height: 3em;" class="btn btn-primary " value="Update" >
                    
                    
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