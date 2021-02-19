<?php


$conn = mysqli_connect("localhost", "root", "", "mtkinetics");
$luser=$_REQUEST['user'];
$lplace=$_REQUEST['place'];
$lprice=$_REQUEST['price'];
$lheight=$_REQUEST['height']; 
$lweight=$_REQUEST['weight'];
$lephone=$_REQUEST['ephone'];
$laddrs=$_REQUEST['addrs'];
$lfitness=$_REQUEST['fitness'];






if(empty($lplace) or empty($lheight) or empty($lweight) or empty($lephone) or empty($laddrs) or empty($lfitness))
{
	echo "ERROR: Check if all fields are filled.";
}
else
{

		if(strlen($lephone)==12 and is_numeric($lephone))
			{
				

$query1=("INSERT INTO `booking`(place, username, price, height, weight, emrnumber, emraddr, fitness_prob) VALUES ('$lplace','$luser','$lprice','$lheight','$lweight','$lephone','$laddrs','$lfitness')");





if(mysqli_query($conn, $query1)){
	

								}


 else {echo "ERROR : " . mysqli_error($conn);}


}

else echo "ERROR: Enter Valid Contact.";
}

mysqli_close($conn);

?>