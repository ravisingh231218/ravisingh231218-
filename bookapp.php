<?php
include("connect.php");
$did=$_REQUEST['did'];
//echo $did;
$query="select * from tbl_doctor where docid='$did'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<title>Book Now</title>

<style>td{font-size:50px;}

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
</style>
</head>
<body>
<div style="height:100%;width:100%;background-color:lightgreen;box-shadow:5px 5px 200px green inset;">
<div id="menu">
<img style="float:left;height:90px;width:90px;box-shadow:5px 5px 15px blue;margin:1%;" src="images/logo1.png"/>

</br>

<ul>
	
	<li><a href="papointment.php">My Appointments</a></li>
	<li><a href="discuss.php">Discussion Board</a></li>
	<li><a href="pupdate.php">Update Profile</a></li>
	<li><a href="pchange.php">change Password</a></li>
	<li><a href="feedback.php">Feedback</a></li>
	<hr/>
</ul>

<a href="plogout.php"><img style="height:70px;width:70px;margin:-6.5% 0% 0% 84%;" src="images/logout1.png"/></a></br>
<a href="pprofile.php"><img style="height:70px;width:70px;margin:-6% 0% 0% 9%;" src="images/profile.png"/></a>
</div>
</br></br>
<div style="height:80px;width:100%;background-color:white;box-shadow:2px 2px 15px black inset;">
</br>
<h1 style="margin:0% 0% 0% 35%;font-family:handwriting-draft_free-version;color:blue;"><u>Book Appointment Now</u></h1></div>

<div style="height:300px;width:300px;border:1px solid;margin:7% 0% 0% 12%;float:left;box-shadow:5px 5px 25px blue;border-radius:15px;border:3px solid blue;">
<img src="doctor/<?php echo $row['filename']; ?>" height="300px" width="300px" style="border-radius:15px;"/>
</div></br>
<div style="margin-top:7%;margin-left:40%;">
<form action="booknow.php" method="post">
<table>
<input type="hidden" name="did" value="<?php echo $row['docid']; ?>"/>
<tr><td>Name :</td>
<td><input style="height:50px;width:100%;" type="text" name="name" readonly value="<?php echo $row['name'];?>"/></td></tr>

<tr><td>Email :</td>
<td><input style="height:50px;width:100%;" type="email" name="email" readonly value="<?php echo $row['email'];?>"/></td></tr>

<tr><td>Date : </td>
<td><input style="height:50px;width:100%;" type="date" name="date"/></td></tr></table>
</br></br>
<td><input style="height:40px;width:150px;margin-left:10%;background-color:lightblue;box-shadow:2px 2px 20px blue inset;" type="submit" value="book now"/></td>
</form>
<?php
}
?>
</div>
</div>
<div style="height:8%;width:100%;background-color:lightblue;box-shadow:3px 3px 15px blue inset;"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCoyeright&copy &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Design & Developed by: Manish Yadav
</div>
</body>
</html>