<!DOCTYPE html>
<html lang="en">
<title>E-Hailing and Rental Car UMP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

.button {
  background-color: #ccccb3;
  color: black;
  padding: 10px 18px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
}

a:link {
  text-decoration: none;
}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-grey w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>CUSTOMER</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="customerhome.php" class="w3-bar-item w3-button w3-hover-white">HOME</a> 
    <a href="profile.php" class="w3-bar-item w3-button w3-hover-white">PROFILE</a> 
    <a href="bookingMenu.php" class="w3-bar-item w3-button w3-hover-white">BOOKING</a>
    <a href="customerhistory.php" class="w3-bar-item w3-button w3-hover-white">BOOKING HISTORY</a> 
    <a href="customerpoint.php" class="w3-bar-item w3-button w3-hover-white">POINT & REWARD</a> 
    <a href="feedback.php" class="w3-bar-item w3-button w3-hover-white">FEEDBACK</a> 
    <a href="chatbot.php" class="w3-bar-item w3-button w3-hover-white">CHAT</a>
    <a href="custlogout.php" class="w3-bar-item w3-button w3-hover-white">LOGOUT</a>  
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-grey w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-grey w3-margin-right" onclick="w3_open()">☰</a>
  <span>EHRUMP</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>EHRUMP</b></h1>
  </div>
  

  <!-- CONTENT -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-dark-grey"><b>Booking Form</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
    <h4>Fill in the form below :</h4>
  </div>
 <?php
include("dbase.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM destination WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in bookingForm.php");
$row = mysqli_fetch_assoc($result);

$dest = $row['dest'];
$distance = $row['distance'];
$price = $row['price'];
$points = $row['points'];

//@mysql_free_result($result);
?> 
<form method="post" action="bookingForm2.php">
<table width="100">
<tr>
<td><b>Destination:</b><br>
<input type ="text" name="dest" size="50" value="<?php echo $dest; ?>" readonly></td>
<tr>
<td><b>Distance (KM):</b><br>
<input type ="number" name="distance" size="11" value="<?php echo $distance; ?>" readonly></td>
<tr>
<td><b>Price (RM):</b><br>
<input type ="number" name="price" size="11" value="<?php echo $price; ?>" readonly></td>
<tr>
<td><b>Points:</b><br>
<input type ="number" name="points" size="11" value="<?php echo $points; ?>" readonly></td>
</table>
<input type ="hidden" name="id" value="<?php echo $idURL; ?>">
<br>
<h3>Choose your driver below : </h3>
<?php


$query = "SELECT * FROM vehicle ";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
	$id = $row["vehicleID"];	
	$driverID = $row["driverID"];
	$name = $row["name"];
    $model = $row["model"];
	$colour = $row["colour"];
	$registrationNo = $row["registrationNo"];
	
	?>
	<table table width="900" border="1" cellspacing="5" cellpadding="5">
	<tr>
	<th>Driver Name : <?php echo $name; ?></th>
	<th>Car Model : <?php echo $model; ?></th>
	<th>Car Colour : <?php echo $colour; ?></th>
	<th>Plat No : <?php echo $registrationNo; ?></th>
	<th>Driver ID : <?php echo $driverID; ?></th>
	<th><a href="bookingForm2.php?id=<?php echo $id; ?>">Select</a></th>
    </li>
	<br>
	</table>
	<?php
    }
} else {
    echo "0 results";

}
?>
<br>
<input class="button" type="button" value="Cancel Booking" onclick="window.location.href='bookingCatalogue.php'" />
</form>


<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
