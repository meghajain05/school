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
function display_article(){
	echo "string";
$sql3="SELECT Article, U_Name, Status FROM article, user WHERE article.U_ID = user.U_ID";
$retval3 = mysql_query( $sql3, $conn );
	while($row = mysql_fetch_array($retval3)){
		$article=$row['Article'];
		$user=$row['U_Name'];
      $status=$row['Status'];
      if ($status==1) {
       echo "Article is".$article."by". $user ."/n";  
      }	
   }
}
?>