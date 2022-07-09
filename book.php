<?php
include("connect.php");
$spec=$_POST['spec'];
//echo $spec;
$query="select * from tbl_doctor where speciality='$spec'";
$res=mysql_query($query);
?>
</html>
<head>
<title>Book Appointment</title>
<style> #outer{height:100%;width:100%;background-color:lightgreen;box-shadow:5px 5px 200px green inset;} 

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
</style>
</head>
<body>
<div id="outer">
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
<h1 style="margin:0% 0% 0% 38%;font-family:handwriting-draft_free-version;color:blue;"><u>Book Appointment</u></h1></div>
</br></br></br>
<table border="1" align="center">
<tr>
<th>S.No.</th>
<th>Doctor name</th>
<th>Gender</th>
<th>Address</th>
<th>Fees</th>
<th>Timing</th>
<th>Mobile</th>
<th>E-mail</th>
<th>Book</th>
</tr>

<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
?>
	
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['fees'];?></td>
<td><?php echo $row['speciality'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['email'];?></td>
<td><a href="bookapp.php?did=<?php echo $row['docid'] ?>"><img style="height:50px;width:200px;" src="images/appointment.png"/></a></td>
</tr>
<?php
$a++;
}
?>
</table>
</div>
<div style="height:8%;width:100%;background-color:lightblue;box-shadow:3px 3px 15px blue inset;"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCoyeright&copy &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Design & Developed by: Manish Yadav
</div>
</body>
</html>