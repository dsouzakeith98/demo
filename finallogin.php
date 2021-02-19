<?php

if(isset($_REQUEST['login']))
{


$conn = mysqli_connect("localhost", "root", "", "mtkinetics");

$username2=$_REQUEST['uname'];
$pass=$_REQUEST['password2']; 


if(empty($username2) or empty($pass))
{
	echo "ERROR: Check if all fields are filled.";
}
else
{
$query1=("SELECT `fname`,`username` FROM `login` where username='$username2' and password='$pass'");
 
	
$result=mysqli_query($conn,$query1);
$result2=mysqli_fetch_array($result);
$fn=$result2['fname'];
$fn2=$result2['username'];
$count=mysqli_num_rows($result);
if($count==1)
			{
				session_start();
				$_SESSION['username']=$fn2;
			
			
				$_SESSION['firstname']=$fn;
	}
else {echo "ERROR : Invalid User" . mysqli_error($conn);}
}
}