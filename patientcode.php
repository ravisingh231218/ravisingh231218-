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
$age=$_POST['age'];
//echo $age;
$a=$_POST['add'];
//echo $a;
$pin=$_POST['pin'];
$location="patient/";
 $query="insert into tbl_patient(name,fname,gender,email,password,mobile,age,address,pincode,date) values ('$n','$fn','$g','$email','$p','$m','$age','$a','$pin',now())";
mysql_query($query);
header("Location:patient.php");
?>