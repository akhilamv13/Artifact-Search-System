<?php
session_start();
require_once("db.class.php");
$ob=new db_operations();
$catname=$_SESSION['cat'];
$prodtype=$_SESSION['prodtype'];
$pid=$_GET['pid'];
$conn1=mysqli_connect("localhost","root","","$catname");
                    
$query2="select * from productdet where pid='$pid'";
$result1=mysqli_query($conn1,$query2); 
$up1="update productdet set status=1 where pid='$pid'";
  
  mysqli_query($conn1,$up1);

{
  ?>
  <script>
    alert("Successfully Verified");
    //window.location='../admin/adminindex.php';
  </script>
<?php
}
// $sel1= "select * from sellerreg where sellerid='$sellerid";
//   $res1=mysqli_query($conn,$sel1);
//   $arr1=mysqli_fetch_array($res1);
//   $email=$arr1['email'];
//   mail("$email","Verified","product added by you is successfully verified..");
header("Location:../admin/adminindex.php");
?>