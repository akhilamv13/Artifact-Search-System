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
$del="delete from productdet where pid='$pid'";
  
mysqli_query($conn1,$del);

{
  ?>
  <script>
    alert("Successfully Deleted");
    window.location='../admin/adminindex.php';
  </script>
<?php
}
//header("Location:homestays.php");
?>