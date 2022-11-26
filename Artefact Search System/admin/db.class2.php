<?php
session_start();
require("db.class.php");
$ob=new db_operations();
//$_SESSION['name']=$_GET['name'];
//$_SESSION['cat']=$cat;
$cat=$_SESSION['cat'];
$conn1=new mysqli("localhost:3306","root","",$cat);
class db_operations1

{


function db_write($query)
{
	
	$result=mysqli_query($GLOBALS['conn1'],$query);
	return $result;
}	
function db_read($query)
{
	
	$res=mysqli_query($GLOBALS['conn1'],$query);
	if(!$res)
	echo "SELECTquery error";
	else
	{
		
	return $res;

	}
  }
}
?>