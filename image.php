<?php
$conn = mysqli_connect("localhost", "root", "", "mtkinetics");
if($conn)
{
	echo "connected";
	if(isset($_POST['submit']))
	{ 


$filename=$_FILES['dp']['name'];
$tempname=$_FILES['dp']['tmp_name'];
$folder= 'profile/';

move_uploaded_file($tempname, $folder.$filename);

$query1=("INSERT INTO `signup`(`picture`) VALUES ('$filename')");





if(mysqli_query($conn, $query1)){
	echo "Records inserted successfully.";
} else {echo "ERROR : " . mysqli_error($conn);}

}
mysqli_close($conn);
}
?>

<html>
<body>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="dp">
	<input type="submit" name="submit">
</form>
</body>
</html>
	
