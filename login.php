<!DOCTYPE html>
<html>
<head>
	<link href="login.css" rel="stylesheet"/>
	<script src="jquery-1.12.1.js"></script>
	<script src="login.js"></script>
</head>
<body>
<button class="button b1 ">Student</button>				
<button class="button b2 ">Teacher</button>				
<div class="img">
		<img style="width: 100%;" src="class.jpg">
	</div>
<div class="body">
	<center><div class="c">
	<form method="POST" action="">
	<input class="input" name="username" placeholder="&nbsp &nbsp Username*" required=""><br/>
	<input class="input" name="password" type="password" placeholder="&nbsp &nbsp Password*" required=""><br/>
	<button class="i">LOGIN</button>
	</form>
	</div></center>
</div>
</body>
</html>
<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);			//connection establish
	mysql_select_db('student_db');								//choose database
	if(! $conn ) {
		die('Could not connect: ' . mysql_error());
   	}
   	else{
   		 echo 'Connected successfully';
   	}
   	$username=$_POST['username'];
    $password=$_POST['password'];
    $sql1 = "INSERT INTO student_login(Username,password) VALUES('$username','$password')";
    $retval = mysql_query( $sql1, $conn );
    	if(! $retval ) {
      		die('Could not enter data: ' . mysql_error());
   		}
   mysql_close($conn);
 ?>

