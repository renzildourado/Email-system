<html>
<head>
</head>
<body bgcolor=lightblue align=center>

<b><font size=50 color=blue>Inbox</b>
<br>



 <table border="1" align=center style="font-size:100%;font-family:times">
<tr>
<th width="300" >Sender </th><th width="300" >Message </th>
</tr>

<?php

$email=$_COOKIE["name"];



mysql_connect("localhost","root","") or die(mysql_error());
$dbase_name="simple_login";
mysql_select_db($dbase_name) or die(mysql_error());
$query="select * from server where receiver='$email'";
$r=mysql_query($query) or die(mysql_error());
$rows=mysql_num_rows($r);



while($rows!=0)
{
$row=mysql_fetch_array($r);
$new=" ";
$new=$row["message"];


for($x = 0; $x < 100; $x++)
{
$message1[$x]=null;
$message[$x]=null;
}


  for($x = 0; $x < strlen($new); $x++)
{
        $message1[$x] = ord("$new[$x]")-5;
	$message[$x]= chr($message1[$x]);
}


?>

<tr>
<td width="300" ><?php echo $row["sender"]?></td><td> <?php echo implode($message) ?></td>
</tr>

<?php

$rows=$rows-1;
}

mysql_close();

?>
</table>
</body>
</html>

