<?php
$qid=$_REQUEST['qid'];
//echo $qid;
include("connect.php");
$query="select * from tbl_answer";
$res=mysql_query($query);
?>
	
<html>
<head>
<title>View Answers</title>
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
<div style="height:100%;width:100%;background-color:lightgreen;box-shadow:3px 3px 150px green inset;">
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
<h1 style="margin:0% 0% 0% 38%;font-family:handwriting-draft_free-version;color:blue;"><u>Post Answer</u></h1></div>
</br></br></br></br></br>
<?php $a=1; while($row=mysql_fetch_array($res,MYSQL_BOTH))
{?>
<table border="1" align="center" cellpadding="10">
<tr>
<th>S.No.</th>
<th>Answer</th>
</tr>
<tr>
<td><?php echo $a; ?></td>
	<td><?php echo $row['answer']; ?></td>
	
</tr>
</table>
<?php
$a++;
}
?>
</div>
</body>
</html>