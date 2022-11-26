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
    function visiblility2(){
kl=document.getElementById("catname").value
 $.ajax({
        url: 'ajaxdn.php',
        type: 'POST',
        data: {
            no: 1,
            dt:kl,
        },
        success: function(data){
          
      }               
    });

      var cat=(document.addprodtype.catname.value);
      if(cat=="")
      {

        document.getElementById('view1').style.visibility="hidden";
    
      }
      else
      {

        document.getElementById('view1').style.visibility="visible";
       
      }
    }
  </script>
<?php
    require("db.class.php");
    $ob=new db_operations();
    $sellerid=$_SESSION['sellerid'];
    ?>
    <div class="page-wrapper">
        <header class="header">
            
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        

                        <a href="index.html" class="logo">
                            <img src="../seller/assets/images/classimax.png" alt="Molla Logo" width="105" height="25">
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
                        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box" style="max-width: 100%;">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <h3>Add Product</h3>
                                    <hr>
                                </li>
                            </ul>
                        <div class="card-body">
                <form validate="true" name="addprodtype" action="addbackend.php" method="post">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Category</label>
                          <select name="catname" id="catname" class="form-control" onchange="visiblility2();"  required="">
                                <option value="">Select Category</option>
                                <?php 
                               $query= "select * from category";
                               $result= mysqli_query($conn,$query);
                               while ($row= mysqli_fetch_array($result)) { ?>
                            <option value="<?php echo $row['catname']; ?>"><?php echo $row['catname'] ?></option>
                            <?php
                            $category=$row['catname'];
                            echo $category;
                             } ?>
                          </select>
                          <br>
                          <label style="">Don't have category you search for? <a href="../seller/addcategory.php" method="post">Click here</a> </label>
                      <span></span>
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Product Type</label>
                          <select name="prodtype" id="prodtype" class="form-control" required="">
                              
                          </select>
                          <br>
                          <label id="view1" style="visibility: hidden;">Don't have product type you search for? <a href="../seller/addproducttype.php">Click here</a> </label>
                      <span></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                       <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Product Title</label>
                          <input type="text" class="form-control" name="prodtitle" required="" maxlength=25 autocomplete="off">
                      </div>
                    </div>

                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Brand</label>
                          <input type="text" class="form-control" name="brand" required="" maxlength=25 autocomplete="off">
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Product Details</label><br>
                          <textarea name="proddesc" class="form-control" style="width: 495px;min-height: 100px;"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Product Keyword</label><br>
                          <textarea name="prodkeyword" class="form-control" style="width: 500px;min-height: 100px;"></textarea>
                      </div>
                    </div>
                  </div>

                  <br>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Color</label>
                          <input type="text" class="form-control" name="color" required="">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Price</label>
                          <input type="number" class="form-control"  name="price" required="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                          <label style="color:#c96">img1</label>
                          <input type="file" class="form-control"  name="img1" required="">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                          <label style="color:#c96">img2</label>
                          <input type="file" class="form-control"  name="img2">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                          <label style="color:#c96">img3</label>
                          <input type="file" class="form-control"  name="img3">
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color:#c96">Stock status</label>
                          <select name="stock" id="stock" class="form-control" style="width:458px;height:40px" required="">
                            <option value="">Select Availability..</option>
                            <option value="instock">In stock</option>
                            <option value="outstock">Out of stock</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                          <label style="color:#c96">Available at</label>
                          <textarea name="available" class="form-control" style="width: 500px;min-height: 50px;"></textarea>
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    
                    <div class="col-md-6 pr-1">
                      <input type="submit" name="sub"  style="margin-left: 400px; width: 20em; height: 3em;" class="btn btn-primary " value="Add Product" >
                    
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

                $('#catname').change(function() {
                    loadProdtype($(this).find(':selected').val())
                })
                // $('#state').change(function() {
                //     loadCity($(this).find(':selected').val())
                // })


            });

            function loadCatname() {
                $.ajax({
                    type: "POST",
                    url: "ajax2.php",
                    data: "get=catname"
                }).done(function(result) {


                    $(result).each(function() {
                        $("#catname").append($(result));
                    })
                });
            }
            // function loadState(countryId) {
            //     $("#state").children().remove()
            //     $.ajax({
            //         type: "POST",
            //         url: "ajax.php",
            //         data: "get=state&countryId=" + countryId
            //     }).done(function(result) {

            //         $("#state").append($(result));

            //     });
            // }
            function loadProdtype(catname) {
                $("#prodtype").children().remove()
                $.ajax({
                    type: "POST",
                    url: "ajax1.php",
                    data: "get=prodtype&catname=" + catname
                }).done(function(result) {

                    $("#prodtype").append($(result));

                });
            }

            // init the countries
            loadCatname();
        </script>
</body>

<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>