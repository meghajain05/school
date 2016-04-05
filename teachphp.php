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
   		 echo 'Connected successfully ';
   	}
   	$article_text=$_POST['article_text'];
   	$ptype=$_POST['ptype'];
   	if ($article_text!=""){
   	session_start();
   	$user=$_SESSION['username1'];
   	$sql2="SELECT * FROM user where U_Name='$user'";
   	$retval1 = mysql_query( $sql2, $conn );
   
   	  while($row = mysql_fetch_array($retval1)) {
  		$id=$row['U_ID'];
  		echo $id;
 	  	$sql4="INSERT INTO article(U_ID, Article, Status) VALUES('$id', '$article_text', '$ptype')";
   		$retval = mysql_query( $sql4, $conn );
   }
}