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

$sql3="SELECT Article, U_Name, Status FROM article, user WHERE article.U_ID = user.U_ID";
$retval3 = mysql_query( $sql3, $conn );
	while($row = mysql_fetch_array($retval3)){
		$article=$row['Article'];
		$user=$row['U_Name'];
      $status=$row['Status'];
      if ($status==1) {
       echo "Article is: <br/>".$article."&nbsp <br> by &nbsp".$user."<br/><br/><br/><br/>" ;  
      }	
   }
 ?>