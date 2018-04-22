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
	$address=$_POST['address'];
	$products=$_POST['product'];
	
	$str="";
	foreach($products as $x)
	{
		$str=$str." ".$x;
	}
	$query="insert into merchant(name,m_id,address,email,products,password) values('$uname','$contactno','$address','$emailid','$str','$password')";
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
	<body> <center>
			<div align="center" style="margin-top:75px; border:1px solid black; width:350px;">
			MERCHANT REGISTRATION <br><br>
			<form method="post" action="">
				NAME <input type="text" name="name"/> <br><br>
				Email <input type="email" name="email" /> <br><br>
				Contact Number <input type="number" name="number" /> <br><br>
				Password <input type="text" name="password"/><br><br>
				Address <textarea cols="10" rows="2" name="address"> </textarea> <br><br>
				Products <br><br>
				<input type="checkbox" name="product[]" id="product" value="handicrafts" /> Handicrafts <br>
				<input type="checkbox" name="product[]" id="product" value="jewelery" /> Jewelery <br>
				<input type="checkbox" name="product[]" id="product" value="snacks" /> Snacks <br>
				<input type="submit" value="Sign up" name="s"/><br>
			</form>
			<div>
			<a href="index.html">Go back to main page</a>
			</center>
	</body>
</html>