<?php
session_start();
require_once("db.class.php");
$ob=new db_operations();
$id=$_GET['id'];
$query2="select * from producttypepending where id='$id'";
$res=$ob->db_read($query2);
$up1="delete from producttypepending where id='$id'";
  
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