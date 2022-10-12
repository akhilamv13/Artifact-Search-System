<?php
require("db.class.php");
$ob=new db_operations();
$message=" ";
$search=$_POST['search'];
echo "$search";
echo "hello";
$selectl="select * from products where ptype='$search'";
$result=$ob->db_read($selectl);
$arr=mysqli_fetch_array($result);
if(mysqli_num_rows($result)<=0)
{
$message="product not found";    
}
else 
{
	 header("Location:../search.php");
}
?>