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
   		 echo 'Connected successfully<br/>';
   	}
   	 	$username=$_POST['username'];
   	if ($username!="") {
   		echo "string";
  
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $utype=$_POST['utype'];
   	$sql1="INSERT INTO user(U_Name,Password,Email_id,Phone,U_Type) VALUES('$username','$password','$email', $phone, $utype)";
    $retval = mysql_query( $sql1, $conn );
    if(! $retval )
{
 die('Could not get data: ' . mysql_error());
}
else
{
	echo "successfull";
}
}
   	mysql_close($conn);
?>