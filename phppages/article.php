<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/hpage.css"/>
</head>
<body>
<?php 
include('php.php');
$sql10 = "SELECT Article FROM article LIMIT 3";
 $retval4 = mysql_query( $sql10, $conn );
 while($row = mysql_fetch_array($retval4)){
    $article1=$row['Article'];
    echo $article1;
}
$sql3="SELECT Article, U_Name, Status,Article_Id FROM article, user WHERE article.U_ID = user.U_ID";
$retval3 = mysql_query( $sql3, $conn );
	while($row = mysql_fetch_array($retval3)){
		$article=$row['Article'];
		$user=$row['U_Name'];
      $status=$row['Status'];
      $article_id=$row['Article_Id']; 
      if ($status==1) {
        

echo '<div style="background-color: pink;"> Article is: <br>'.$article.'&nbsp <br> by &nbsp'.$user.'<br/>
       		<center>
       		<a href="../phppages/myartcomment.php?value='.$article_id.'">See More</a>
       		</center>
       		</div>';

       echo "<br/><br/><br/><br/>";
        	
      }	
   }
 ?>
 </body>
</html>