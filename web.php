<?php


$conn = mysqli_connect("localhost", "root", "", "mtkinetics");

$frstnam=$_REQUEST['fname'];
$mail=$_REQUEST['email']; 
$dobt=$_REQUEST['dateof']; 




$pass=mysqli_real_escape_string($conn, $_REQUEST['password']);
 $cmpass=mysqli_real_escape_string($conn, $_REQUEST['cpassword']);
$contact=mysqli_real_escape_string($conn, $_REQUEST['phone']);

if(empty($frstnam) or empty($mail) or empty($contact) or empty($pass) or empty($cmpass))
{
	echo "ERROR: Check if all fields are filled.";
}
else
{
if (filter_var($mail, FILTER_VALIDATE_EMAIL))
{

		if(strlen($contact)==12 and is_numeric($contact))
			{
				if($pass == $cmpass)
					{

$query1=("INSERT INTO `signup`(fname, email, password, phone, dateofbirth) VALUES ('$frstnam','$mail','$pass','$contact','$dobt')");

$query2=("INSERT INTO `login`(fname,username,password) VALUES ('$frstnam','$mail','$pass')");



if(mysqli_query($conn, $query1)){

								}


 else {echo "ERROR : " . mysqli_error($conn);}

if(mysqli_query($conn, $query2)){
	echo "cridentials shifted successfully.";
} 
else {
	echo "ERROR : " . mysqli_error($conn);
}
}
else echo "ERROR: Passwords Should match.";
}
else echo "ERROR: Enter Valid Contact.";
}
	else echo "ERROR: Enter Valid Email.";
}
mysqli_close($conn);

?>
  

 
