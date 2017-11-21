<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>


<head>
<style>

.abc{

 background-color:lightblue;
 border:5px solid 	black
;
    margin:100px;
	height:290px;
	width:300px;
    padding:10px;


}
input[type=text],input[type=password] {
width:200px;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:raleway
}
input[type=submit] {
width:200px;
background-color:#6699FF;
color:#fff;
border:1px solid #000000;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px
}


</style>



</head>



<body bgcolor=lightblue>
<div align=center>
<div class="abc" align=center>
  <form  action="login_exec.php" method="POST">
  <p><h2>Student login</h2>
<div >User ID <br><input  type="text" style="border-radius: 5px;font-weight: bold;" placeholder="User ID" name="username"></div>
<div >Password <br><input  type="password" style="border-radius: 5px;font-weight: bold;" placeholder="Password" name="password"></div>
   <br>
<div ><input type="submit"></div>
 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
  </form>
  </div>
  </div>
</body>
</html>
  