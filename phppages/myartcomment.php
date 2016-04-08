<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../css/hpage.css"/>
</head>
<body>
<?php 
  include('../phppages/php.php');
      session_start();
      $article_id = $_GET['value'];
      $user=$_SESSION['username1'];
      $sql6="SELECT * FROM article WHERE Article_Id=$article_id";
      $retval4 = mysql_query( $sql6, $conn );
      while($row = mysql_fetch_array($retval4)){
         $article=$row['Article'];
         echo $article .'<br/><form method="POST" action="">
         <input class="ca" name="comment1" placeholder="&nbsp COMMENT"><br/>
         <button class="ca" name="sub" type="submit">SUBMIT</button>
         </form><br/>';

      }

      $comment1=$_POST['comment1'];
   if ($comment1!=""){
    $sql7="INSERT INTO comments(Article_id, Comment, U_Name) VALUES('$article_id','$comment1','$user')";
    $retval5 = mysql_query( $sql7, $conn );
   
}
else {
   echo "You need to enter comment";
}

      $sql8="SELECT * FROM comments WHERE Article_Id=$article_id";
      $retval5 = mysql_query( $sql8, $conn );
      
      while($row = mysql_fetch_array($retval5)){
            $comment=$row['Comment'];
            $usern=$row['U_Name'];
            echo '<div style="background-color: #006666;">'.$comment .'<br/> by &nbsp' .$usern .'</div>';
            echo "<br/>";

      }


   
?>
</body>
</html>









   	