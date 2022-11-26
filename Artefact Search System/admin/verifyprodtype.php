<?php
require_once("db.class.php");
$ob=new db_operations();
$id=$_GET['id'];
$sel5="select * from producttypepending where id='$id'";
$res5=$ob->db_read($sel5);
$row = mysqli_fetch_array($res5);
$sellerid=$row['sellerid'];
$catname=$row['catname'];       
$prodtype=$row['prodtype'];
$prodimg=$row['prodimg'];
//$_SESSION['catname']=$_POST['catname'];
// $servername = "localhost";
// $username = "root";
// $password = "password";

  $conn1 = mysqli_connect('localhost', 'root', '', $catname);
  $insert1= "insert into product(prodtype,prodimg)values('$prodtype','$prodimg')";
  mysqli_query($conn1,$insert1);
  $conn2 = mysqli_connect('localhost', 'root', '', "artefacts");
  $del= "delete from producttypepending where id='$id'";
  mysqli_query($conn2,$del);
  $sel1= "select * from sellerreg where sellerid='$sellerid'";
  $res1=mysqli_query($conn2,$sel1);
  $arr1=mysqli_fetch_array($res1);
  $email=$arr1['email'];
  mail("$email","verified","Product added by you is Successfully verified..");
  ?>
  <script>
    alert("Product Type Added Successfully...");
  </script>
  <?php
   header("location:../admin/adminindex.php");
?>