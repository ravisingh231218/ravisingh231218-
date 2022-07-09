<?php
session_start();
include("connect.php");
$email=$_SESSION['doctor'];  
if($_SESSION['doctor']=="")
{
	session_destroy();
	header("Location:login2.php?msg=1");
}
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
?>


<html>
<head>
<style>

 ul
{
	list-style-type:none;margin-left:18%;
}
ul li
{
	display:inline;
	font-size:30px;
	padding:7px;
}
ul li a
{
	color:blue;
	text-decoration:none;
}
ul li:hover
{
	background-color:lightgreen;box-shadow:5px 5px 15px green inset;border-radius:10px;color:white;
}
a img:hover{
transform:scale(1.5);
}
td{
font-size:30px;
}
</style>
</head>
<body>
<div style="height:100%;width:100%;border:1px solid blue;background-color:;box-shadow:20px 20px 200px green inset;">

<img src="images/logo1.png" style="height:100px;width:100px;float:left;box-shadow:5px 5px 15px blue;margin:1% 0% 0% 1%;"/></br>
<ul>
	<li><a href="dview.php">View appointment</a></li>
	<li><a href="dcancel.php">Cancel appointment</a></li>
	<li><a href="dupdate.php">Update profile</a></li>
	<li><a href="dchange.php">Change password</a></li><hr></ul>
	<a href="dlogout.php"><img src="images/logout1.png" style="height:70px;width:70px;float:right;margin-top:-6.5%;margin-right:2%;"/></a>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
	<div style="height:300px;width:250px;margin:10% 0% 0% 17%;border:3px solid blue;border-radius:10px;box-shadow:2px 2px 15px blue;"><img style="height:300px;width:250px;" src="doctor/<?php echo $row['filename'];  ?>"/></div>
<div style="margin-left:40%;margin-top:-26%; float:left;">
<table >
<tr><td>
Name :</td>
<td><input style="height:35px;outline:none;" readonly type="text" value="<?php echo $row['name'];?>"/></br></td></tr>
<tr><td>Father's Name :</td>
<td><input style="height:35px;outline:none;" readonly type="text" value="<?php echo $row['fname'];?>"/></br></td></tr>
<tr><td>Gender :</td>
<td><input style="height:35px;outline:none;" readonly type="text" value="<?php echo $row['gender'];?>"/></br></td></tr>
<tr><td>E-mail Id :</td>
<td><input style="height:35px;outline:none;" readonly type="text" value="<?php echo $row['email'];?>"/></br></td></tr>
<tr><td>Mobile :</td>
<td><input style="height:35px;outline:none;" readonly type="text" value="<?php echo $row['mobile'];?>"/></br></td></tr>
<tr><td>Address :</td>
<td><textarea style="height:60px;width:100%;outline:none;" readonly type="text"><?php echo $row['address'];?></textarea></br></td></tr>
<tr><td>Time :</td>
<td><input style="height:35px;outline:none;" readonly type="text" value="<?php echo $row['timing'];?>"/></br></td></tr>
<tr><td>Fees :</td>
<td><input style="height:35px;outline:none;" readonly type="text" value="<?php echo $row['fees'];?>"/></br></td></tr>
<tr><td>Speciality :</td>
<td><input style="height:35px;outline:none;" readonly type="text" value="<?php echo $row['speciality'];?>"/></br></td></tr>
	</table></div>
<?php	
}
?>


</div>
<div style="height:8%;width:100%;background-color:lightblue;box-shadow:7px 7px 20px blue inset;border:1px solid blue;"></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCoyeright&copy &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Design & Developed by: Manish Yadav
</div>

</div>
</body>
<html>
