<?php
session_start();
if($_POST['no']==1)
{
$ui=$_POST['dt'];
$_SESSION['dwdn']=$ui;	
	echo 1;	
	
	
}
if($_POST['no']==2)
{

echo $_SESSION['dwdn'];	
	
	
	
}
?>