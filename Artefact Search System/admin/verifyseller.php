+<?php
session_start();
require_once("db.class.php");
$ob=new db_operations();
$sellerid=$_GET['sellerid'];                    
// $query2="select * from productdet where sellerid='$sellerid'";
// $res=$ob->db_read($query2);
$up1="update sellerreg set status=1 where sellerid='$sellerid'";
  
  $ob->db_write($up1);

{
  ?>
  <script>
    alert("Successfully Verified");
   // window.location='../admin/adminindex.php';
  </script>
<?php
}
$sel1= "select * from sellerreg where sellerid='$sellerid'";
  $res1=mysqli_query($conn,$sel1);
  $arr1=mysqli_fetch_array($res1);
  $email=$arr1['email'];
  mail("$email","verified","Your account is verified Successfully..");
header("Location:../admin/adminindex.php");
?>