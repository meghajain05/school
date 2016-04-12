<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/hpage.css"/>
</head>
<body>
<?php 
include('../phppages/php.php');

$sql3="SELECT Article, U_Name, Status, Article_Id FROM article, user WHERE article.U_ID = user.U_ID";
$retval3 = mysql_query( $sql3, $conn );
  while($row = mysql_fetch_array($retval3)){
    $article=$row['Article'];
    $user=$row['U_Name'];
    $article_id=$row['Article_Id']; 
    $status=$row['Status'];     
       if($status==1){

  echo '<div style="background-color: pink;"> Article is: <br>'.$article.'&nbsp <br> by &nbsp'.$user.'<br/> The status is: Public<br/>
          <a href="../phppages/myartcomment.php?value='.$article_id.'">See More</a> &nbsp &nbsp
          
          </div>';

  echo "<br/><br/><br/><br/>";
      }    
    else{
        echo '<div style="background-color: pink;"> Article is: <br>'.$article.'&nbsp <br> by &nbsp'.$user.'<br/> The status is: Private <br/>
          <a href="../phppages/myartcomment.php?value='.$article_id.'">See More</a> &nbsp &nbsp
          
          </div>';

       echo "<br/><br/><br/><br/>";

      }
   }

  //$article_id = $_GET['value'];
  //$sql8="DELETE FROM article WHERE Article_Id=$article_id"; 
 ?>
 </body>
</html>