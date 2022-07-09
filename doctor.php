<?php

?>
<html>
<head>
<title> Registration Form</title>
<style>

#head1
{
	height:80px;width:100%;background-color:white;//border:1px solid #53778D;
	
}
#head1 ul
{
	list-style-type:none;
	margin-left:15%;
	
}
#head1 ul li
{
	display:inline;
	padding:2px;
  
	border-radius:10px 10px 10px 10px;
	font-size:48px;background-color:;font-family:Colonna MT;
	
}

#head1 ul li:hover
{
	background-color:lightblue;
	box-shadow:4px 4px 12px blue inset;
	
}
#head1 ul li a:hover
{
	color:white;
	
	
}
#head1 ul li a
{
	text-decoration:none;
	color:#53778D;
}


table
{
	padding:15px;
}
td
{
	font-size:30px;
	color:black;
}

h1
{
	margin:20px 0px 0px 18%;
	color:blue;font-family:handwriting-draft_free-version;
}
.click:hover
{
	transform:scale(1.2);
	filter:drop-shadow(5px 5px 15px blue);
}
a img:hover{
transform:scale(1.3);
box-shadow:5px 5px 12px blue;
border-radius:10px;
}
</style>
</head>
<body>
<div id="head1">
<img style="height:100px;width:120px;margin-left:8px;margin-top:7px;float:left;box-shadow:4px 4px 12px blue;" src="images/logo1.png"/>

<div style="margin-top:5px;">
<ul>
<li><a href="index.php">Home</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="about.php">About us</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="doctor.php" style="background-color:lightblue;box-shadow:4px 4px 12px blue inset;border-radius:10px;padding:5px;color:white;action:active;">Doctor</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="patient.php">Patient</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="contact.php">Contact</a></li>&nbsp&nbsp&nbsp&nbsp</ul>
<a href="login2.php"><img style="height:70px;width:90px;margin-top:-6%;margin-right:2%;float:right;"  src="images/login1.jpg"></a>
</div>
</div>
<div style="height:120%;width:100%;box-shadow:25px 25px 250px green inset;margin-top:-1.5%;border:1px solid green"></br></br>
</br>
<img style="height:60%;width:45%;float:right;margin-top:7%;" src="images/doctor.ico"/></br>
<div style="height:80%;width:45%;background-color:;box-shadow:15px 15px 35px blue;margin-left:7%;border-radius:15px;float:left;">

<legend align="center"></legend>
<form action="doctorcode.php" method="post" enctype="multipart/form-data">
<table  align="center"></br>
<h1><u>Doctor Registration</u></h1>
<tr><td>Name</td>
<td><input type="text"  name="name"/></td></tr>
<tr><td>Father's Name   </td>
<td><input type="text" name="fname"/></td></tr>
<tr><td>Gender</td>
<td><input type="radio" name="a" value="male"/>Male
<input type="radio" name="a" value="female"/>Female</tr></td>
<tr><td>Enter email</td>
<td><input type="email"name="mail"/></tr></td>
<tr><td>Password</td>
<td><input type="password" name="password"/></tr></td>
<tr><td>Mobile</td>
<td><input type="number" name="mob"/></tr></td>
<tr><td>Fees</td>
<td><input type="text" name="fee"/></tr></td>
<tr><td>Timing</td>
<td><input type="text" name="time"/></tr></td>
<tr><td>Speciality</td>
<td><select name="b">
<option>    --select--</option>
<option>Surgan</option>
<option>Physican</option>
<option>Eye specilisit</option>
<option>Neuro Surgan</option>
<option>Ortho Peditaion</option>
</select>
</tr></td>
<tr><td>Address</td>
<td><textarea name="add"> </textarea ></tr></td>
<tr><td>upload photo</td>
<td><input type="file" name="file"/></tr></td></table></br>
<input style="height:40px;width:170px;background-color:lightblue;color:white;margin-left:35%;box-shadow:5px 5px 25px blue inset;" type="submit" value="register"/>
</form></fieldset></div></div>

<a href="login2.php"> <div style="font-size:25px;margin:-55% 4% 0px 0px; color:blue; height:50px; width:350px; float:right; background-color:lightgreen;border-radius:25px;box-shadow:5px 5px 12px blue;border:2px dashed blue;" class="click"><span style="color:white; margin-left:25px;">already registered Click here...</span></div></a>

<div style="height:50px;width:100%;background-color:lightblue;box-shadow:7px 7px 20px blue inset;border:1px solid blue;"></br>
&nbsp&nbsp&nbsp&nbspCoyeright&copy 2019&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Design & Developed by: Parvej Ali & Ravi Kumar 
</div>

</body>
</html>