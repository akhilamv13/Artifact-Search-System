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
    $fname=$_SESSION['fname'];
    $lname=$_SESSION['lname'];
    $emaild=$_SESSION['email'];
    $phoned=$_SESSION['phone'];
    $passwordd=$_SESSION['password'];
   
     $shopname=$_POST['shopname'];
     $country=$_POST['country'];
     $state=$_POST['state'];
     //$district=$_POST['district'];
     $city=$_POST['city'];
     $addrd=$_POST['addr'];
    $genderd=$_POST['gender'];
    $dobd=$_POST['dob'];
    $aged=$_POST['age'];
    $gstd=$_POST['gst'];
    $idproofd=$_POST['idproof'];
    $aadhard=$_POST['aadhar'];
    $idcardd=$_POST['idcard'];
    $drivlicd=$_POST['drivlic'];
//echo "<script>alert('Hello Don');</script>";
    $insertl= "insert into login(email,password,usertype)values('$emaild','$passwordd',1)";
    $insertr= "insert into sellerreg(fname,lname,email,phone,password,shopname,country_name,state_name,city_name,addr,gender,dob,age,gst,idproof,aadhar,idcard,drivlic) 
    values('$fname','$lname','$emaild','$phoned','$passwordd','$shopname','$country','$state','$city','$addrd','$genderd','$dobd',$aged,'$gstd','$idproofd',$aadhard,'$idcardd','$drivlicd')";
    $insertreg= "insert into registration(email,phone) values('$emaild','$phoned')";
    //echo $insertreg;
    $resl=$ob->db_write($insertl);
    $resr=$ob->db_write($insertr);
            if(!$resl || !$resr)
            { //echo "<script>alert('Hello');</script>";
              // $ob->db_write("delete from login where email='$emaild' ");
              // $ob->db_write("delete from sellerreg where email='$emaild' ");
              // $ob->db_write("delete from registration where email='$emaild'");
                ?>
                <script>
                    alert("Account creation failed");
                    //window.location='travellerreg.php'
                </script>;
                <?php
                }
                else
                {
                //$ob->db_write($insertl);
                //$ob->db_write($insertr);
                $ob->db_write($insertreg);
               
                ?>
                <script>
                    alert("Registerd Successfully!..Wait for confirmation");
                    
                </script>;
                <?php
                 
                }
                mail("artefactsearchsystem@gmail.com","Registration","New seller has registered please verify it..");
                header("location:../mainhome/index.php");
                ?>
            </body>
            </html>