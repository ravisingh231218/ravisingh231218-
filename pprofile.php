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
.class
{
	height:100%;width:100%;background-color:lightgreen;
}
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
body
{
	background-c:lightgreen;
	box-shadow:20px 20px 300px green inset;
}
td
{
	height:30px;
	font-size:30px;
}
a img:hover{
transform:scale(1.2);

border-radius:10px;
}
</style>
</head>
<body>
<div class="outer"style="height:100% auto;width:100%;">
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
<a href="plogout.php"><img style="height:70px;width:70px;margin:-6.5% 0% 0% 84%;" src="images/logout1.png"/></a>

</div></br>
<div style="height:85%;width:100%;background-color:;">
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
	
<a href="pbookaponit.php"><img style="height:35%;width:15%;margin:10% 0% 0% 60%;" src="images/appointment1.png"/></a>




<div style="margin-left:18%;margin-top:-18%; float:left;">
<table >
<tr><td>
Name :</td>
<td><input style="height:35px;" readonly type="text" value="<?php echo $row['name'];?>"/></br></td></tr>
<tr><td>Father's Name :</td>
<td><input style="height:35px;" readonly type="text" value="<?php echo $row['fname'];?>"/></br></td></tr>
<tr><td>Gender :</td>
<td><input style="height:35px;" readonly type="text" value="<?php echo $row['gender'];?>"/></br></td></tr>
<tr><td>E-mail Id :</td>
<td><input style="height:35px;" readonly type="text" value="<?php echo $row['email'];?>"/></br></td></tr>
<tr><td>Age :</td>
<td><input style="height:35px;" readonly type="text" value="<?php echo $row['age'];?>"/></br></td></tr>
<tr><td>Mobile :</td>
<td><input style="height:35px;" readonly type="text" value="<?php echo $row['mobile'];?>"/></br></td></tr>
<tr><td>Address :</td>
<td><textarea style="height:60px;width:100%;" readonly type="text"><?php echo $row['address'];?></textarea></br></td></tr>
<tr><td>PIN :</td>
<td><input style="height:35px;" readonly type="text" value="<?php echo $row['pincode'];?>"/></br></td></tr>
	</table></div>
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