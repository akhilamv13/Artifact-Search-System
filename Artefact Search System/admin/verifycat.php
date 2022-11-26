<?php
require_once("db.class.php");
$ob=new db_operations();
$id=$_GET['id'];
$sel5="select * from categorypending where id='$id'";
$res5=$ob->db_read($sel5);
$row = mysqli_fetch_array($res5);
$sellerid=$row['sellerid'];
$catname=$row['catname'];    
$catimg=$row['catimg'];    
$prodtype=$row['prodtype'];
$prodimg=$row['prodimg'];
//$_SESSION['catname']=$_POST['catname'];
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = new mysqli('localhost', 'root', '');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE $catname";

 if ($conn->query($sql) === TRUE) {
  $conn1 = mysqli_connect('localhost', 'root', '', $catname);
  if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  }
  $sql1 = "CREATE TABLE product (
  prodid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  prodtype VARCHAR(100) NOT NULL,
  prodimg VARCHAR(100) NOT NULL
  )";
  $sql2 = "CREATE TABLE productdet(
  sellerid int(4) NOT NULL,
  pid int(4) NOT NULL PRIMARY KEY,
  prodtype VARCHAR(100) NOT NULL,
  prodtitle VARCHAR(100) NOT NULL,
  brand VARCHAR(100) NOT NULL,
  proddesc VARCHAR(1000) NOT NULL,
  prodkeyword VARCHAR(1000) NOT NULL,
  color VARCHAR(100),
  price VARCHAR(10) NOT NULL,
  img1 VARCHAR(100) NOT NULL,
  img2 VARCHAR(100),
  img3 VARCHAR(100),
  stockstatus VARCHAR(30) NOT NULL,
  availableat VARCHAR(100) NOT NULL,
  status INT(1) NOT NULL
  )";
  if (mysqli_query($conn1, $sql1)) {
    if(mysqli_query($conn1, $sql2)){
  //header("location:../admin/createtbl.php");
  $insert1= "insert into product(prodtype,prodimg)values('$prodtype','$prodimg')";
  mysqli_query($conn1,$insert1);
  $conn2 = mysqli_connect('localhost', 'root', '', 'artefacts');
  $insert1= "insert into category(catname,img)values('$catname','$catimg')";
  $conn2->query($insert1);
  $del= "delete from categorypending where id='$id'";
  mysqli_query($conn2,$del);
  ?>
  <script>
    alert("Category and Product Type Added Successfully...");
  </script>
  <?php
  $sel1= "select * from sellerreg where sellerid='$sellerid'";
  $res1=$conn2->query($sel1);
  $arr1=mysqli_fetch_array($res1);
  $email=$arr1['email'];
  mail("$email","verified","category added by is Successfully verified..");
   header("location:../admin/adminindex.php");
}
} }
else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>