<?php
include("connect.php");
$id=$_POST['id']; //echo $id;
$name=$_POST['name']; //echo $name;
$fname=$_POST['fname']; //echo $fname;
$gender=$_POST['a']; //echo $gender;

$fees=$_POST['fees']; //echo $fees;
$time=$_POST['timing']; //echo $time;
$spec=$_POST['spec']; //echo $spec;

$mobile=$_POST['mobile']; //echo $mobile;
$address=$_POST['add'];  //echo $address;

$query="update tbl_doctor set name='$name',fname='$fname',gender='$gender',mobile='$mobile',fees='$fees',timing='$time',speciality='$spec',address='$address'where docid='$id'";
mysql_query($query);
header("Location:dprofile.php");
?>