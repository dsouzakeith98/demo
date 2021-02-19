
<!DOCTYPE html>
<html>

<head><?php
session_start();

?>

</head>

<body>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/flip.css">
<link rel="stylesheet" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/import.css">
  <link rel="stylesheet" type="text/css" href="css/join.css">
  <link rel="stylesheet" type="text/css" href="css/newform.css">
   <link rel="stylesheet" type="text/css" href="css/loginnew.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/belownav.css">
   

 <div class="belnav">
<a href="logout.php"><img src="images/loout.png" width="27px" height="27px" style="margin-top: 5px;"></a>


<div class="avatar"> 
      <a><b><?php echo $_SESSION['firstname']; ?></b> &nbsp;<i class="arrow down" style="margin-bottom: 3px;"></i>
                </a>     
         <a><img src="images/avatarlogin.png"> </a>
           </div> 
  
  </div>


  <div class="topnav" id="myTopnav">
    <img src="images/mtlogo1.png" width="125" height="72"
        style=" margin-left: 50px; margin-top: -4px;">
   <a href="run2.php">Home</a>
    <a href="cyclingmain.html">About us</a>

 
    <a href="cyclingmain.php">Cycling</a>
    <a href="homepage.php">Trekking</a>
  </div>

<br>

<h2>Booking Details</small></h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Booking Id</div>
      <div class="col col-2">Place</div>
      <div class="col col-3">Height</div>
      <div class="col col-4">Weight</div>
      <div class="col col-5">Emergency Number</div>
      <div class="col col-6">Emergency Address</div>
      <div class="col col-7">Fitness Problem</div>
     </li>
			<?php
			$use=$_SESSION['username'];
			
				$con=mysqli_connect("localhost","root","","mtkinetics");
				if($con-> connect_error)
				{
					die("connection failed".$con-> coonect_error);

				}
				$sql="SELECT * FROM booking where username = '$use' " ;
				if($result=mysqli_query($con,$sql))
				{
				if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						
						echo "<li class='table-row'>
      <div class='col col-1'>".$row["boking_id"]."</div>
      <div class='col col-2'>".$row["place"]."</div>
      <div class='col col-3'>".$row["height"]."</div>
      <div class='col col-4'>".$row["weight"]."</div>
      <div class='col col-5'>".$row["emrnumber"]."</div>
      <div class='col col-6'>".$row["emraddr"]."</div>
      <div class='col col-7'>".$row["fitness_prob"]."</div>
    </li>";


						
						
					}
					
				}
			}
					else{
						
						
					}
$con-> close();

	?>
</ul>

	</table>


</body>
</html>
