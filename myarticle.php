<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="hpage.css"/>
</head>
<body>
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
	

	session_start();
   	$user=$_SESSION['username1'];
	$sql3="SELECT Article, Article_Id FROM article, user WHERE article.U_ID = user.U_ID AND  U_Name='$user'";
	$retval3 = mysql_query( $sql3, $conn );
	while($row = mysql_fetch_array($retval3)){
		$article=$row['Article'];
		$article_id=$row['Article_Id']; 
		     
		     
       echo '<div style="background-color: pink;"> Article is: <br>'.$article.'&nbsp <br> and article id is: &nbsp'.$article_id.'<br/>
       		<center>
       		<a href="myartcomment.php?value='.$article_id.'"><button class="ca" style="width: 100px; height:30px;">Comment </button></a>
       		</center>
       		</div>';

       echo "<br/><br/><br/><br/>";
        	
   		
   }
 ?> 

</body>
</html>

	

