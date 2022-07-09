<?php
include("connect.php");
$id=$_POST['id']; //echo $id;
$name=$_POST['name']; //echo $name;
$fname=$_POST['fname']; //echo $fname;
$gender=$_POST['a']; //echo $gender;
$age=$_POST['age']; //echo $age;
$mobile=$_POST['mobile']; //echo $mobile;
$address=$_POST['add'];  //echo $address;
$pin=$_POST['pin']; //echo $pin;
$query="update tbl_patient set name='$name',fname='$fname',gender='$gender',age='$age',mobile='$mobile',address='$address',pincode='$pin'where patid='$id'";
mysql_query($query);
header("Location:pprofile.php");
?>