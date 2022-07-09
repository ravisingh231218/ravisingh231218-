<?php
session_start();
include("connect.php");
$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
$email=$_SESSION['patient'];
$query="select password from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
		$pp=$row['password'];
}
if($op==$pp)
{
if($op==$np)
	{
		//echo "no change";
		header("Location:pchange.php");
	}
	elseif($np==$cp)
	{
		//echo "change hoga";
		$query2="update tbl_patient set password='$cp' where email='$email'";
		mysql_query($query2);
		session_destroy();
		header("Location:login2.php");
	}
	else
	{
		//echo "no change";
		header("Location:pchange.php");
	}
}
else
{
	//echo "no change";
	header("Location:pchange.php");
}

?>