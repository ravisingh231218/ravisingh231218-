<?php
session_start();
include("connect.php");
$feed=$_POST['feed'];
//echo $feed;
$email=$_SESSION['patient'];
$query="select patid from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$pat=$row['patid'];
}	
$query1="insert into tbl_feedback(patid,feedback,date) values ('$pat','$feed',curdate())";
mysql_query($query1);
header("Location:pprofile.php");
?>