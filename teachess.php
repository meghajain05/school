<?php 
$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);			//connection establish
	mysql_select_db('sch_db');								//choose database
	if(! $conn ) {
		die('Could not connect: ' . mysql_error());
   	}
   	else{
   		 echo 'Connected successfully <br/>';
   	}

$sql3="SELECT Teaching_Essential, U_Name, Status FROM teaching_essential, user WHERE teaching_essential.U_ID = user.U_ID";
$retval3 = mysql_query( $sql3, $conn );
	while($row = mysql_fetch_array($retval3)){
		$teaching_essential=$row['Teaching_Essential'];
		$user=$row['U_Name'];
      $status=$row['Status'];
      if ($status==1) {
       echo "Article is: <br/>".$teaching_essential."&nbsp <br> by &nbsp".$user."<br/><br/><br/><br/>" ;  
      }	
   }
 ?>