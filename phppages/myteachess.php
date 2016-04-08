<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/hpage.css"/>
</head>
<body>
<?php 
include('../phppages/php.php');
	

	session_start();
   	$user=$_SESSION['username1'];
	$sql3="SELECT Teaching_Essential, Teaching_Essential_ID FROM teaching_essential, user WHERE teaching_essential.U_ID = user.U_ID AND  U_Name='$user'";
	$retval3 = mysql_query( $sql3, $conn );
		while($row = mysql_fetch_array($retval3)){
			$teaching_essential=$row['Teaching_Essential'];
			$teaching_essential_id=$row['Teaching_Essential_ID']; 


			echo '<div style="background-color: pink;"> Teaching Essential is: <br>'.$teaching_essential.'&nbsp <br> and its id is: &nbsp'.$teaching_essential_id.'<br/>
       		<center>
       		<a href="../phppages/mytechcomment.php?value='.$teaching_essential_id.'"><button class="ca" style="width: 100px; height:30px;">Comment </button></a>
       		</center>
       		</div>';

      		 echo "<br/><br/><br/><br/>";
        	
   		
   		}
 ?> 
</body>
</html>