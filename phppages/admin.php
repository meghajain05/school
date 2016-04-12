<?php
session_start();
if(!isset($_SESSION['username1']))
       {
               header("location: ../phppages/hphp.php");
       }
?>
<!DOCTYPE html>
<html>
<head>
<link href="../css/hpage.css" rel="stylesheet"/>
	<script src="../js/jquery-1.12.1.js"></script>
	<script src="../js/hpage.js"></script>
	<?php 
	include ('sample.php');
 ?>
</head>
<body background='../images/a.png'; style="background-repeat: no-repeat; background-size: 100%; ">
<a href="logout.php" ><button class="b1" style="text-decoration: none; float: right;">Logout</button></a><br/>
<center><p style="font-size: 35px; margin-top: 150px; color: #003333;"><b>Welcome to your profile</b></p></center> <br/>
<center>
<button class="b1" id="b2"><b>Register New User</b></button>
<a href="../phppages/allarticles.php"><button class="b1" id="b11"><b>Check Article</b></button></a>
<a href="../phppages/allteach.php"><button class="b1" id="b12" style="width: 265px;"><b>Check Teaching Essential</b></button></a>
</center>
<div class="d">
	<center>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input class="ca" name="username" placeholder="&nbsp USERNAME"><span class="error"><?php echo $emailErr;?></span><br/>
		<input class="ca" name="password" type="password" required="" placeholder="&nbsp PASSWORD"><br/>
		<input class="ca" name="email" placeholder="&nbsp E-Mail"><span class="error"><?php echo $emailErr;?></span>
   <br/>	
		<input class="ca" name="phone" required="" placeholder="&nbsp PHONE NO"><br/>
		<select class="ca" name="utype">
			<option value="1">Admin</option>
    		<option value="2">Student</option>
    		<option value="3">Teacher</option>
  		</select><br/>
  		<button class="b3" id="b5" type="submit">SUBMIT</button>
  		<button class="b3" id="b4">BACK</button>	
	</form>
	</center>
</div>	
</body>
</html>
