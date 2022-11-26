<?php
$conn=new mysqli("localhost","root","","artefacts");
class db_operations

{


function db_write($query)
{
	
	$result=mysqli_query($GLOBALS['conn'],$query);
	return $result;
}	
function db_read($query)
{
	
	$res=mysqli_query($GLOBALS['conn'],$query);
	if(!$res)
	echo "SELECTquery error";
	else
	{
		
	return $res;

	}
  }
}
?>