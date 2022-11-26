<?php
//session_start();
require("db.class2.php");
$ob=new db_operations1();
$prodtype=$_POST['prodtype'];
$prodimg=$_POST['prodimg'];
  $insert1= "insert into product(prodtype,prodimg)values('$prodtype','$prodimg')";
  $res1=$ob->db_write($insert1);
  if(!$res1){
    echo "Error creating database: " . $conn->error;
  }
else {
  
  //$ob->db_write($insert1);
   echo "Product type added successfully";
}
//$conn2->close();
header("location:../admin/categories.php");
?>