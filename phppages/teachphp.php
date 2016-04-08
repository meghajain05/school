<?php
include('../phppages/php.php');


   	$article_text=$_POST['article_text'];					//submitting the article
   	$ptype=$_POST['ptype'];
   	if ($article_text!=""){
   	session_start();
   	$user=$_SESSION['username1'];
   	$sql2="SELECT * FROM user where U_Name='$user'";
   	$retval1 = mysql_query( $sql2, $conn );
   
   	  while($row = mysql_fetch_array($retval1)) {
  		$id=$row['U_ID'];
 	  	$sql4="INSERT INTO article(U_ID, Article, Status) VALUES('$id', '$article_text', '$ptype')";
   		$retval = mysql_query( $sql4, $conn );
   }
}


   $teaching_text=$_POST['teaching_text'];					//submitting the teaching essential
   	$pertype=$_POST['pertype'];
   	if ($teaching_text!=""){
   	session_start();
   	$user=$_SESSION['username1'];
   	$sql2="SELECT * FROM user where U_Name='$user'";
   	$retval1 = mysql_query( $sql2, $conn );
   
   	  while($row = mysql_fetch_array($retval1)) {
  		$id=$row['U_ID'];
 	  	$sql4="INSERT INTO teaching_essential(U_ID, Teaching_Essential, Status) VALUES('$id','$teaching_text','$pertype')";
   		$retval = mysql_query( $sql4, $conn );
   }
}

?>