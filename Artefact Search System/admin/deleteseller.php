<?php
session_start();
require_once("db.class.php");
$ob=new db_operations();
$sellerid=$_GET['sellerid'];
$query2="select * from sellerreg where sellerid='$sellerid'";
$res=$ob->db_read($query2);
$up1="delete from sellerreg where sellerid='$sellerid'";
  
  $ob->db_write($up1);

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