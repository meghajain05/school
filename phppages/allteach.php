<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/hpage.css"/>
  
</head>
<body>
	<?php 
  include('../phppages/php.php');
	

$sql3="SELECT Teaching_Essential, U_Name,Teaching_Essential_Id, Status FROM teaching_essential, user WHERE teaching_essential.U_ID = user.U_ID";
$retval3 = mysql_query( $sql3, $conn );
	while($row = mysql_fetch_array($retval3)){
		$teaching_essential=$row['Teaching_Essential'];
		$user=$row['U_Name'];
      $status=$row['Status'];
      $teaching_essential_id=$row['Teaching_Essential_Id'];
       if($status==1){
          
       echo '<div style="background-color: pink;"> Teaching Essential is: <br>'.$teaching_essential.'&nbsp <br> by &nbsp'.$user.'<br/> The status is: Public<br/>
       		
       		<a href="../phppages/mytechcomment.php?value='.$teaching_essential_id.'">See More</a>
       		
       		</div>';

       echo "<br/><br/><br/><br/>";
        	 
      	}
        else{
          echo '<div style="background-color: pink;"> Teaching Essential is: <br>'.$teaching_essential.'&nbsp <br> by &nbsp'.$user.'<br/> The status is: Private<br/>
          
          <a href="../phppages/mytechcomment.php?value='.$teaching_essential_id.'">See More</a>
          
          </div>';

       echo "<br/><br/><br/><br/>";
        }
   }
 ?>
</body>
</html>