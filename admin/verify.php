<?php
session_start();
require_once("db.class.php");
$ob=new db_operations();

$sellerid=$_GET['sellerid'];

	$up1="update  sellerreg set status=1 where sellerid='$sellerid'";
	
	$ob->db_write($up1);

{
	?>
	<script>
		alert("Successfully Verified");
		window.location='seller.php';
	</script>
<?php
}
//header("Location:homestays.php");
?>