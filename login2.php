<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo
?>
<html>
<head>
<title>Login</title>
<style>

.login
{
	height:470px;width:400px;border-radius:25px;box-shadow:12px 12px 30px green;margin-left:30%;
	margin-top:px;
}
#head1
{
	height:80px;width:100%;background-color:white;
	
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
a img:hover{
transform:scale(1.3);
box-shadow:5px 5px 12px blue;
border-radius:10px;
}
</style>
</head>
<body>
<div id="head1">
<img style="height:100px;width:120px;shadow:10px 10px 20px #53778D;margin-left:8px;margin-top:7px;float:left;box-shadow:4px 4px 12px blue;" src="images/logo1.png"/>

<div style="margin-top:5px;">
<ul>
<li><a href="index.php" style="background-color:lightblue;box-shadow:4px 4px 12px blue inset;border-radius:10px;padding:5px;color:white;action:active;">Home</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="about.php">About us</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="contact.php">Contact</a></li>&nbsp&nbsp&nbsp&nbsp

<li><a href="doctor.php">Doctor</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="patient.php">Patient</a></li></ul>&nbsp&nbsp&nbsp&nbsp
<a href="login2.php"><img style="height:70px;width:90px;margin-top:-6%;margin-right:2%;float:right;"  src="images/login1.jpg"></a>
</div>
</div>
<div style="background-color:rgba(0,0,0,0.2);height:100% auto;background-image:url(images/doc4.jpg);background-size:cover;">
<div style="height:35px;width:100%;background-color:lightblue;box-shadow:10px 10px 20px blue inset;"></div>

<div style="height:87%;width:65%;background-color:lightgreen;margin-left:35%;border-radius:350px 0px 0px 350px;box-shadow:20px 20px 200px green inset;">

</br></br></br>
<div class="login"></br>
<form action="logcode.php" method="post">
<span style="font-size:40px;margin:10px 0px 0px 145px;color:blue;font-family:Colonna MT;"><b><u>Login</u></b></span>
</br>
	<?php
	if($msg=='1')
	{
		echo "<u style='color:red;margin:26%;'>";
		echo "Invalid! Please login before.";
		echo "</u>";
	}
	?>
</br>
<span style="font-size:35px;margin-left:70px;color:blue;">Select user</br>	
<select name="c" style="height:40px;width:250px;margin-left:70px;border-radius:5px;">
<option>Who</option>
<option>Doctor</option>
<option>Patient</option>
</select></span>
</br>
<input style="height:40px;width:250px;margin:20px 0px 0px 70px;border-radius:5px;" type="email" placeholder="Enter E-mail" name="a"/></br></br>
<input style="height:40px;width:250px;margin-left:70px;border-radius:5px;" type="password" placeholder="Enter Password" name="b"/>

</br></br>
<input style="height:40px;width:120px;margin:0px 0px 0px 140px;border-radius:5px; background-color:lightblue;box-shadow:5px 5px 20px blue inset; color:white;" type="submit" value="Login"/></br></br>
<a style="margin-left:145px;margin-top:20px;" href="#">forgoten password !</a></br></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<u style="color:green" >have not an account !</u></br></br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="color:blue"> Doctor :</b> <a href="doctor.php" >Click here</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="color:blue">Patient :</b> <a href="patient.php">Click here</a>
</div></div><div style="height:50px;width:100%;background-color:lightblue;box-shadow:10px 10px 25px blue inset;"></form></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCoyeright&copy &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Design & Developed by: Parvej Ali & Ravi Kumar </div></div>
</body>
</html>