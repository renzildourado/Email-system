<?php
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$password=$_POST["password"];



mysql_connect("localhost","root","") or die(mysql_error());
$dbase_name="simple_login";
mysql_select_db($dbase_name) or die(mysql_error());
$query="insert into member values('','$email','$password','$fname','$mname','$lname','$address','$contact','$gender')";
mysql_query($query) or die(mysql_error());
mysql_close();

?>
<html>
<head>
</head>
<body bgcolor=lightblue align=center>

<p>
<h1 align=center style="font-size:250%;font-family:times">
Registered Successfullly!!!!!<br>
</h1>
</p>
</body>
</html