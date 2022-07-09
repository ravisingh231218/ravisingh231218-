<?php
session_start();
include("connect.php");
$ques=$_POST['ques'];
//echo $ques;
$email=$_SESSION['patient'];
$query="select patid from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pat=$row['patid'];
}
$query2="insert into tbl_question(patid,question,date) values('$pat','$ques',curdate())";
mysql_query($query2);
header("location:discuss.php");
?>