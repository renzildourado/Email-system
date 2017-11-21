<?php

$pwd=$_POST["pwd"];
$id=$_POST["id"];


mysql_connect("localhost","root","") or die(mysql_error());
$dbase_name="simple_login";
mysql_select_db($dbase_name) or die(mysql_error());
$query="SELECT * FROM member WHERE username='$id' AND password='$password'";
$result=mysql_query($query) or die(mysql_error());
echo $result;
if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			echo "sahi";
			
		}else
{echo "fuck off";}
}

mysql_close();

?>
<html>
<head>
</head>
<body bgcolor=lightblue align=center>

<p>
<h3>Logged In!!!!!</h3>
</p>
</body>
</html