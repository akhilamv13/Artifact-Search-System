<?php
session_start();
  require("db.class.php");
  $ob=new db_operations();
  $sellerid=$_SESSION['sellerid'];
  $catname=$_SESSION['catname'];
  $pid=$_GET['pid'];
  $conn1=mysqli_connect("localhost","root","","$catname");
  if(isset($_POST['sub']))
  {
  $prodtitle=$_POST['prodtitle'];
  $brand=$_POST['brand'];
  $proddesc=$_POST['proddesc'];
  $prodkeyword=$_POST['prodkeyword'];
  $color=$_POST['color'];
  $price=$_POST['price'];
  $img1=$_POST['img1'];
  $img2=$_POST['img2'];
  $img3=$_POST['img3'];
  $stockstatus=$_POST['stockstatus'];
  $availableat=$_POST['availableat'];

   $sel2="select * from productdet where sellerid='$sellerid' and pid='$pid'";
   $result1=mysqli_query($conn1,$sel2);
   //if(mysqli_num_rows($res2))
  $update1="update productdet set prodtitle='$prodtitle',brand='$brand',proddesc='$proddesc',prodkeyword='$prodkeyword',color='$color',price='$price',img1='$img1',img2='$img2',img3='$img3',stockstatus='$stockstatus',availableat='$availableat' where pid='$pid' and sellerid='$sellerid'";

   //Secho  $update1;

   //$update2="update login set password='$password1' where emailid='$emailid'";

   //$update3="update registration set phone='$phone1' where email='$email'";
   mysqli_query($conn1,$update1);
   //$ob->db_write($update2); 
   ?>
   <script>
     alert("Updated Successfully...");
   </script>
   <?php
   header("location:../seller/productview.php?pid=$pid");
}
?>