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
   /* $username1=$_POST['username1'];
    $password1=$_POST['password1'];
    $sql2="SELECT * FROM user";
    $retval1 = mysql_query( $sql2, $conn );
    while($row = mysql_fetch_array($retval1, MYSQL_ASSOC)){
    	
		if ($username1==$row['U_Name'] && $password1==$row['Password']) {
    	echo "Login successfull";
   			 }
 		
 		else{
    	echo "Invalid login";
    	break;
    		}
	    }*/
    
   	mysql_close($conn);
?>