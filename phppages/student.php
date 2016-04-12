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
	<link rel="stylesheet" href="../css/hpage.css"/>
</head>
<body background='../images/t.jpg'; style="background-repeat: no-repeat; background-size: 100%; ">
<a href="logout.php"><button class="b1" style="text-decoration: none; float: right;">Logout</button></a><br/>
<center><p style="font-size: 35px; margin-top: 150px; color: #003333;"><b>Welcome to your profile</b></p></center> <br/>
<center>
<a href="../phppages/article.php"><button class="b1" style="text-decoration: none;" id="cas" name="ca">Check articles</button></a>
</center>
</html>