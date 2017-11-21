<?php

$email=$_COOKIE["name"];
$receiver=$_POST["receiver"];
$message=$_POST["message"];


for($x = 0; $x < strlen($message); $x++)
{
        $message1[$x] = ord("$message[$x]")+5;
	$message[$x]= chr($message1[$x]);
}



mysql_connect("localhost","root","") or die(mysql_error());
$dbase_name="simple_login";
mysql_select_db($dbase_name) or die(mysql_error());
$query="insert into server values('$email','$receiver','$message')";
mysql_query($query) or die(mysql_error());
mysql_close();

?>
<html>
<head>
</head>
<body bgcolor=lightblue align=center>

<p>
<h1 align=center style="font-size:250%;font-family:times">
Message sent Successfullly!!!!!<br>
</h1>
</p>
</body>
</html