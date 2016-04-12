<?php  
include('../phppages/php.php');
   	 	$username=$_POST['username'];
   	if ($username!="") {
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $utype=$_POST['utype'];

$emailErr = $nameErr = $phoneErr = $passErr = "";
    $email = $username = $phone = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['username'])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST['username']);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $_POST['password'])) {
    $passErr = "the password does not meet the requirements!";
}

  if (empty($_POST['email'])) {
       $emailErr = "Email is required";
      } 
      else {
       $email = test_input($_POST['email']);
       // check if e-mail address is well-formed
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format"; 
       }
     }
     if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    {
      $phoneErr = 'Invalid Number!';
    }
 }




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