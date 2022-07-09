<?php
session_start();
include("connect.php");
$ans=$_POST['ans'];
//echo $ans;
$qid=$_POST['qid'];
//echo $qid;
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pat=$row['patid'];
}
$query1="insert into tbl_answer(qid,patid,answer,date) values ('$qid','$pat','$ans',curdate())";
mysql_query($query1);
header("Location:discuss.php");
?>