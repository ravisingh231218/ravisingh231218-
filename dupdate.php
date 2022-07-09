<?php
session_start();
include("connect.php");
//echo "welcome user";
///echo "</br>";
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
#menu
{
	height:50px;width:100%;background-color:none;
}
#menu ul
{
	list-style-type:none;
	margin-left:22%;
}
#menu ul li
{
	display:inline;
	font-size:25px;
	padding:10px;border-radius:20px;
}
#menu ul li a
{
	color:blue;
	text-decoration:none;
}
#menu ul li:hover
{
	background-color:lighgreen;box-shadow:3px 3px 15px green inset;
	color:green;
}
a img:hover{
transform:scale(1.2);
}

td
{
	height:30px;
	font-size:30px;
}

</style>
</head>
<body>
<div style="height:100% auto;width:100%;background-color:lightgreen;box-shadow:3px 3px 150px green inset;">
<div id="menu">
<img style="float:left;height:90px;width:90px;box-shadow:5px 5px 15px blue;margin:1%;" src="images/logo1.png"/>

</br>

<ul>
	
	<li><a href="dview.php">View appointment</a></li>
	<li><a href="dcancel.php">Cancel appointment</a></li>
	<li><a href="dupdate.php">Update profile</a></li>
	<li><a href="dchange.php">Change password</a></li>
	<hr>
</ul>

<a href="dlogout.php"><img style="height:70px;width:70px;margin:-6.5% 0% 0% 84%;" src="images/logout1.png"/></a></br>
<a href="dprofile.php"><img style="height:70px;width:70px;margin:-6% 0% 0% 9%;" src="images/profile.png"/></a>
</div>
</br></br>
<div style="height:80px;width:100%;background-color:white;box-shadow:2px 2px 15px black inset;">
</br>
<h1 style="margin:0% 0% 0% 38%;font-family:handwriting-draft_free-version;color:blue;"><u>Update Profile</u></h1></div>

<div style="height:100% auto;width:100%;">
<br></br>
<div style="height:85%;width:100%;background-color:;">

	
<div style="height:85%;width:100%;background-color:;">
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
	<form action="dedit.php" method="post">
<div style="height:300px;width:250px;border:1px solid;margin-left:20%;"><img style="height:300px;width:250px;box-shadow:4px 4px 10px black;" src="doctor/<?php echo $row['filename']; ?>"/></div>
<table style="margin-left:45%;margin-top:-25%;">
<input type="hidden" name="id" value="<?php echo $row['docid']; ?>"/>
<tr><td>
Name :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['name'];?>" name="name"/></br></td></tr>
<tr><td>Father's Name :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['fname'];?>" name="fname"/></br></td></tr>
<tr><td>Gender :</td>
<td><input type="radio" value="male" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='male'){?> checked <?php } ?>  name="a"/>male
<input type="radio" value="female" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='female'){?> checked <?php } ?>  name="a"/>Female
</td></tr>
<tr><td>Fees :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['fees'];?>" name="fees"/></td></tr>
<tr><td>Timing :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['timing'];?>" name="timing"/>
<tr><td>Speciality :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['speciality'];?>" name="spec"/></td></tr>
</br></td></tr>
<tr><td>Mobile :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['mobile'];?>" name="mobile"/></td></tr>
<tr><td>Address :</td>
<td><textarea style="height:45px;" name="add"><?php echo $row['address'];?></textarea></td></tr>
</td></tr>
<td>
<input style="font-size:30px;margin:50% 0% 0% 50%;background-color:lightblue;padding:15px;border-radius:15px;text-decoration:none;color:white;box-shadow:3px 3px 15px blue inset;" href="plogout.php" type="submit" value="Update">
	</td></table></form>
<?php	
}
?>

</div></div>
<div style="height:8%;width:100%;background-color:lightblue;box-shadow:3px 3px 15px blue inset;"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCoyeright&copy &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Design & Developed by: Manish Yadav
</div>

</div>
</body>
</html>