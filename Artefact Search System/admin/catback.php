<?php
$cat=$_POST['catname'];
$img=$_POST['catimg'];
$_SESSION['catname']=$_POST['catname'];
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
$sql = "CREATE DATABASE $cat";

 if ($conn->query($sql) === TRUE) {
  $conn1 = mysqli_connect('localhost', 'root', '', $cat);
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
  pid int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
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
  $conn2 = mysqli_connect('localhost', 'root', '', 'artefacts');
  $insert1= "insert into category(catname,img)values('$cat','$img')";
  $conn2->query($insert1);
  ?>
  <script>
    alert("Database Created Successfully...");
  </script>
  <?php
   header("location:../admin/adminindex.php");
}
} }
else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>