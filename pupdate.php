<?php
session_start();
include("connect.php");
//echo "welcome user";
///echo "</br>";
$email=$_SESSION['patient'];
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login2.php?msg=1");
}
$query="select * from tbl_patient where email='$email'";
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
border-radius:10px;
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
	
	<li><a href="papointment.php">My Appointments</a></li>
	<li><a href="discuss.php">Discussion Board</a></li>
	<li><a href="pupdate.php">Update Profile</a></li>
	<li><a href="pchange.php">change Password</a></li>
	<li><a href="feedback.php">Feedback</a></li>
	<hr>
</ul>

<a href="plogout.php"><img style="height:70px;width:70px;margin:-6.5% 0% 0% 84%;" src="images/logout1.png"/></a></br>
<a href="pprofile.php"><img style="height:70px;width:70px;margin:-6% 0% 0% 9%;" src="images/profile.png"/></a>
</div>
</br></br>
<div style="height:80px;width:100%;background-color:white;box-shadow:2px 2px 15px black inset;">
</br>
<h1 style="margin:0% 0% 0% 38%;font-family:handwriting-draft_free-version;color:blue;"><u>Update Profile</u></h1></div>

<div style="height:100% auto;width:100%;">
<br></br>
<div style="height:85%;width:100%;background-color:;">
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
	<form action="pedit.php" method="post">
<a style="font-size:30px;margin:0% 0% 0% 90%;background-color:lightblue;padding:15px;border-radius:15px;text-decoration:none;color:white;box-shadow:3px 3px 15px blue inset;" href="pprofile.php">Cancel</a>
<img src="images/myupdate.png" style="height:75%;width:32%;margin:0% 0% 0% 55%;"/>
<table style="margin-left:15%;margin-top:-30%;">
<input type="hidden" name="id" value="<?php echo $row['patid']; ?>"/>
<tr><td>
Name :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['name'];?>" name="name"/></br></td></tr>
<tr><td>Father's Name :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['fname'];?>" name="fname"/></br></td></tr>
<tr><td>Gender :</td>
<td><input type="radio" value="male" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='male'){?> checked <?php } ?>  name="a"/>male
<input type="radio" value="female" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='female'){?> checked <?php } ?>  name="a"/>Female
</br></td></tr>
<tr><td>Age :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['age'];?>" name="age"/></br></td></tr>
<tr><td>Mobile :</td> 
<td><input style="height:35px;"  type="text" value="<?php echo $row['mobile'];?>" name="mobile"/></br></td></tr>
<tr><td>Address :</td>
<td><textarea style="height:55px;width:85%" name="add" ;"><?php echo $row['address'];?></textarea></td></tr>
<tr><td>PIN :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['pincode'];?>" name="pin"/></br></td></tr>
<td>
<input style="font-size:30px;margin:45% 0% 0% 50%;background-color:lightblue;padding:15px;border-radius:15px;text-decoration:none;color:white;box-shadow:3px 3px 15px blue inset;" href="plogout.php" type="submit" value="Update">
	</td></table></form>
<?php	
}
?>

</div>
<div style="height:8%;width:100%;background-color:lightblue;box-shadow:3px 3px 15px blue inset;"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCoyeright&copy &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Design & Developed by: Manish Yadav
</div>

</div>
</body>
<html>