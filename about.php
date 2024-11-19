<!DOCTYPE html>
<html lang="en">
<title>E-Hailing and Rental Car UMP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="css/bootstrap.min.css">
     
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
hr{color: #000000}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
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
    <a href="about.php" class="w3-bar-item w3-button w3-hover-white">ABOUT US</a> 
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

  <!-- Announcement -->
  <section>
          <div class="container">
               <div class="text-center">
                    <h1>Services</h1>
                    <p class="lead"> Services provided by our website is spicy</p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="about-info">
                    <h2>E-Hailing Service</h2>

                    <figure>
                         <figcaption>
                              <h3>1.Ease of use</h3>
                              <p>UMP Ride provides a user-friendly mobile application that allows users to request a ride with just a few taps on their smartphones. The intuitive interface ensures a seamless booking process.</p>
                         </figcaption>
                    </figure>

                    <figure>
                         <figcaption>
                              <h3>2. Secure and Trustworthy Drivers</h3>
                              <p>UMP Ride ensures that all drivers undergo a thorough screening process, including background checks and verification of licenses and permits. This measure ensures the safety and security of passengers during their journey.</p>
                         </figcaption>
                    </figure>

                    <figure>
                         <figcaption>
                              <h3>3.Quality Customer Support</h3>
                              <p>UMP Ride offers a dedicated customer support system to address any queries, concerns, or issues faced by passengers. Users can contact customer support via the mobile app or other communication channels provided.</p>
                         </figcaption>
                    </figure>

                    <figure>
                         <figcaption>
                              <h3>4.Multiple Payment Options</h3>
                              <p>LUMP Ride supports various payment methods, including cashless transactions through the mobile app. This feature provides convenience and flexibility for passengers, allowing them to choose their preferred payment method.</p>
                         </figcaption>
                    </figure>

                    <h2>Car Rental Service</h2>

                    <figure>
                         <figcaption>
                              <h3>1.Wide Range of Vehicles</h3>
                              <p>LUMP Car Rental maintains a diverse fleet of vehicles, including sedans, hatchbacks, SUVs, and more. This variety allows customers to choose a vehicle that best suits their preferences, requirements, and budget.</p>
                         </figcaption>
                    </figure>

                    <figure>
                         <figcaption>
                              <h3>2. Flexible Rental Options</h3>
                              <p>UMP Car Rental offers flexible rental periods, enabling customers to rent vehicles for short-term or long-term durations. Whether it is a day, a week, or a month, UMP Car Rental accommodates varying rental needs.</p>
                         </figcaption>
                    </figure>
                    <figure>
                         <figcaption>
                              <h3>3. Well-Maintained Vehicles</h3>
                              <p>UMP Car Rental prioritizes vehicle maintenance and ensures that all rental cars are regularly serviced and inspected. This practice guarantees that customers receive vehicles in optimal condition, minimizing the risk of breakdowns or other mechanical issues during the rental period.</p>
                         </figcaption>
                    </figure>
                    <figure>
                         <figcaption>
                              <h3>4. Dedicated Customer Support</h3>
                              <p>UMP Car Rental offers a dedicated customer support team to assist customers with any queries or concerns. The customer support representatives provide guidance, resolve issues, and ensure a smooth rental experience.</p>
                         </figcaption>
                    </figure>
               </div>
          </div>
     </section>

     <main>

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