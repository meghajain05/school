<?php
// Start the session
session_start();
?>
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
   	
   	$username1=$_POST['username1'];
    $password1=$_POST['password1'];
    
    $sql3 = "SELECT * FROM user";
    $retval = mysql_query( $sql3, $conn );
    if(! $retval )
	{
 	die('Could not get data: ' . mysql_error());
	}
	else{
	if ($username1!="") {
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{

			if($username1==$row['U_Name'] && $password1==$row['Password'])
				{
				$type=$row['U_Type'];
				if ($type==1 )
					{
					$_SESSION['username1'] = $username1;
					header("Location: admin.php");
					}
				elseif ($type==2) {
					$_SESSION['username1'] = $username1;
					header("Location: student.php");
					}
				elseif ($type==3) 
					{
					$_SESSION['username1'] = $username1;
					header("Location: teacher.php");
					}
					exit;
				}
			else{
				echo "yet not registered";
				}
		}
	}
	else{
		echo "user name can no be empty";
	}
}
  ?>





  