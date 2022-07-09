<?php
$aid=$_REQUEST['aid'];
include("connect.php");
//echo $aid;
$query="select status from tbl_appointment where appid='$aid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
 $s=$row['status'];
}
if($s=='Y')
{
	$query2="update tbl_appointment set status='N' where appid='$aid'";
	mysql_query($query2);
	header("location:dcancel.php");
}
if($s=='N')
{
	$query2="update tbl_appointment set status='Y' where appid='$aid'";
	mysql_query($query2);
	header("location:dcancel.php");
}

?>