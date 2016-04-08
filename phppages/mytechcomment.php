<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../css/hpage.css"/>
</head>
<body>
<?php 
include('../phppages/php.php');
      session_start();
      $teaching_essential_id = $_GET['value'];
      $user=$_SESSION['username1'];
      $sql9="SELECT * FROM teaching_essential WHERE Teaching_Essential_ID=$teaching_essential_id";
      $retval7 = mysql_query( $sql9, $conn );
      while($row = mysql_fetch_array($retval7)){
         $teaching_essential=$row['Teaching_Essential'];
         echo $teaching_essential .'<br/><form method="POST" action="">
         <input class="ca" name="comment1" placeholder="&nbsp COMMENT"><br/>
         <button class="ca" name="sub" type="submit">SUBMIT</button>
         </form><br/>';

      }

      $comment1=$_POST['comment1'];
      if ($comment1!=""){
      $sql7="INSERT INTO tech_comments(Teaching_Essential_ID, Comment, U_Name) VALUES('$teaching_essential_id','$comment1','$user')";
      $retval5 = mysql_query( $sql7, $conn );
   
      }
else {
   echo "You need to enter comment";
}

      $sql8="SELECT * FROM tech_comments WHERE Teaching_Essential_ID=$teaching_essential";
      $retval5 = mysql_query( $sql8, $conn );
      
      while($row = mysql_fetch_array($retval5)){
            $comment=$row['Comment'];
            $usern=$row['U_name'];
            echo '<div style="background-color: #006666;">'.$comment .'<br/> by &nbsp' .$usern .'</div>';
            echo "<br/>";

      }
?>
</body>
</html>