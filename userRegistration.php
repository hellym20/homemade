<?php
$dbuser="root";
$dbpass="";
$host="localhost";
$db="home_made";
$conn =mysql_connect($host,$dbuser,$dbpass);
mysql_select_db($db,$conn);

if($_POST['s'])
{
	$uname=$_POST['name'];
	$contactno=$_POST['number'];
	$emailid=$_POST['email'];
	$password=$_POST['password'];

	$query="insert into user(name,u_id,email,password) values('$uname','$contactno','$emailid','$password')";
	$s1=mysql_query($query,$conn);
	if($s1)
	{
		echo "<script>alert('successful');</script>";
	}
	else
	{
		echo "<script>alert(mysql_error());</script>";
	}
}
?>
<html>
	<head>
	</head>
	<body><center>
			<div align="center" style="margin-top:75px; border:1px solid black; width:350px; height:150px;">
		
			CUSTOMER REGISTRATION <br>
			<form method="post" action="">
			NAME <input type="text" name="name"/> <br>
			Email <input type="email" name="email" /> <br>
			Contact Number <input type="number" name="number" /> <br>
			Password <input type="password" name="password"/><br>
			<input type="submit" value="Sign up" name="s"/><br>
			</form>
			<div>
			<a href="index.html">Go back to main page</a>
			</center>
	</body>
</html>