<?php
session_start();
include("connect.php");
$email=$_POST['a'];
$password=$_POST['b'];
$who=$_POST['c'];

if($who=='Doctor')
{
	$query="select * from tbl_doctor where email='$email' and password='$password'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$_SESSION['doctor']=$email;
		header("Location:dprofile.php");
	}
	else
	{
		header("Location:login2.php");
	}
}
if($who=='Patient')
{
	$query="select * from tbl_patient where email='$email' and password='$password'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$_SESSION['patient']=$email;
		header("Location:pprofile.php");
	}
	else
	{
		header("Location:login2.php");
	}
}



?>
