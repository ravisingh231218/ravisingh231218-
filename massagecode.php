<?php
include("connect.php");
$n=$_POST['name']; //echo $n;
$email=$_POST['mail'];  //echo $email;
$num=$_POST['mob']; //echo $num;
$msg=$_POST['msg']; //echo $msg;
$query="insert into tbl_contact(name,email,mobile,massage,date) value ('$n','$email','$num','$msg',curdate())";
mysql_query($querys);
header("Location:contact.php");
?>