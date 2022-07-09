<?php
session_start();
$email=$_SESSION['doctor'];
if($_SESSION['doctor']=="")
{
	session_destroy();
	header("Location:login2.php?msg=1");
}
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
td{
	font-size:35px;
}
</style>
</head>
<body>
<div style="height:100%;width:100%;background-color:lightgreen;">

<div style="height:100%;width:100%;background-color:lightgreen;box-shadow:3px 3px 150px green inset;">
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
<h1 style="margin:0% 0% 0% 38%;font-family:handwriting-draft_free-version;color:blue;"><u>Change Password</u></h1></div>
</br></br></br></br>


<form action="dchangecode.php" method="post">
<table align="center">
<tr><td>Old password</td>
<td><input style="height:50px;width:220px" placeholder="Password" type="text" name="op"/></td></tr>
</br>
<tr><td>New password</td>
<td><input style="height:50px;width:220px" placeholder="New Password" type="text" name="np"/></td></tr>
</br>
<tr><td>Confirm Password</td>
<td><input style="height:50px;width:220px" placeholder="Confirm Password" type="text" name="cp"/></td></tr>
</br></table></br></br></br>
<input style="font-size:30px;margin:0% 0% 0% 45%;background-color:lightgreen;padding:15px;border-radius:15px;text-decoration:none;color:white;box-shadow:3px 3px 15px green inset;" href="plogout.php" type="submit" value="Change">
</form></div>
<div style="height:8%;width:100%;background-color:lightblue;box-shadow:3px 3px 15px blue inset;"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCoyeright&copy &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Design & Developed by: Manish Yadav
</div>
</body>
</html>