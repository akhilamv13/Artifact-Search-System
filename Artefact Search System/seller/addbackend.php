 <?php
session_start();
?> 
<html>
<head>
    </head>
    <body>
    <?php
    require("db.class.php");
    $ob=new db_operations();
    $sellerid=$_SESSION['sellerid'];
    //echo $sellerid;
    $catname=$_POST['catname'];
    $prodtype=$_POST['prodtype'];
    $prodtitle=$_POST['prodtitle'];
    $brand=$_POST['brand'];
    $proddesc=$_POST['proddesc'];
    $prodkeyword=$_POST['prodkeyword'];
    $color=$_POST['color'];
    // $country=$_POST['country'];
    // $state=$_POST['state'];
    // $district=$_POST['district'];
    // $city=$_POST['city'];
    $price=$_POST['price'];
    $img1=$_POST['img1'];
    $img2=$_POST['img2'];
    $img3=$_POST['img3'];
    $stockstatus=$_POST['stock'];
    $available=$_POST['available'];
    // $idproofd=$_POST['idproof'];
    // $aadhard=$_POST['aadhar'];
    // $idcardd=$_POST['idcard'];
    // $drivlicd=$_POST['drivlic'];
    $conn1=new mysqli("localhost","root","",$catname);
    $insertl= "insert into productdet(sellerid,prodtype,prodtitle,brand,proddesc,prodkeyword,color,price,img1,img2,img3,stockstatus,availableat)values('$sellerid','$prodtype','$prodtitle','$brand','$proddesc','$prodkeyword','$color','$price','$img1','$img2','$img3','$stockstatus','$available')";
   
    $resl=mysqli_query($conn1,$insertl);
    // $resr=$ob->db_write($insertr);
            if(!$resl)
            { 
              // $ob->db_write("delete from login where email='$emaild' ");
              // $ob->db_write("delete from sellerreg where email='$emaild' ");
              // $ob->db_write("delete from registration where email='$emaild'");
                ?>
                <script>
                    alert("Product adding failed");
                    //window.location='travellerreg.php'
                </script>;
                <?php
                }
                else
                {
                //mysqli_query($conn1,$insertl);
                // $ob->db_write($insertl);
                // $ob->db_write($insertreg);
                header("location:../seller/sellerindex.php");
                mail("artefactsearchsystem@gmail.com","Product addedd","seller has added product please verify it..");
                ?>
                <script>
                    alert("Added Successfully!..Wait for verification");
                    
                </script>;
                <?php
                }
                ?>
            </body>
            </html>