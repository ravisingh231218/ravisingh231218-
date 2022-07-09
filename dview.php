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
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$did=$row['docid'];
}
$query2="select * from tbl_appointment where docid='$did'";
$res2=mysql_query($query2);
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
	font-size:25px;
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
<h1 style="margin:0% 0% 0% 38%;font-family:handwriting-draft_free-version;color:blue;"><u>Cancel Appointment</u></h1></div>
</br></br></br></br>
<div style="height:100%,width:100%;">
<form>
</br></br></br>
<table border="1" align="center">
<tr>
<th>S.No.</th>
<th>patient name</th>
<th>DOA</th>
<th>Status</th>
<th>Date</th>
</tr>
<?php
$a=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a; ?></td>

<?php $pid=$row2['patid']; 
$query3="select * from tbl_patient where patid='$pid'";
$res3=mysql_query($query3);
while($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
	$pname=$row3['name'];
}
?>
<td><?php echo $pname; ?></td>

<td><?php echo $row2['doa']; ?></td>
<td><?php echo $row2['status']; ?></td>
<td><?php echo $row2['date']; ?></td>
</tr>
<?php
$a++;
}
?>
</table>
</form></div></div>
<div style="height:8%;width:100%;background-color:lightblue;box-shadow:3px 3px 15px blue inset;"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCoyeright&copy &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Design & Developed by: Manish Yadav
</div>
</body>
</html>