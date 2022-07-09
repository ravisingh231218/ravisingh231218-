<?php
include("connect.php");

$n=$_POST['name'];
//echo $n;
$fn=$_POST['fname'];
//echo $fn;
$g=$_POST['a'];
//echo $g;
$email=$_POST['mail'];
//echo $email;
$p=$_POST['password'];
//echo $p;
$m=$_POST['mob'];
//echo $m;
$t=$_POST['fee'];
//echo $t;
$f=$_POST['b'];
//echo $f;
$s=$_POST['time'];
//echo $s;
$a=$_POST['add'];
//echo $a;
$filename=$_FILES['file']['name'];
//echo $filename;
$u=$_FILES['file']['tmp_name'];
//echo $u;
$location="doctor/";
$query="insert into tbl_doctor(name,fname,gender,email,password,mobile,fees,timing,speciality,address,filename,date) values ('$n','$fn','$g','$email','$p','$m','$t','$s','$f','$a','$filename',now())";
mysql_query($query);
move_uploaded_file($u,$location.$filename);
header("Location:doctor.php");
?>