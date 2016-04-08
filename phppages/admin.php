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
<body>
<center>
<button class="b1" id="b2"><b>Register New User</b></button>
<a href="../phppages/allarticles.php"><button class="b1" id="b11"><b>Check Article</b></button></a>
<a href="../phppages/allteach.php"><button class="b1" id="b12" style="width: 265px;"><b>Check Teaching Essential</b></button></a>
</center>
<div class="d">
	<center>
	<form method="POST" action="">
		<input class="ca" name="username" required="" placeholder="&nbsp USERNAME"><br/>
		<input class="ca" name="password" type="password" required="" placeholder="&nbsp PASSWORD"><br/>
		<input class="ca" name="email" type="mail" required="" placeholder="&nbsp E-Mail"><br/>	
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






