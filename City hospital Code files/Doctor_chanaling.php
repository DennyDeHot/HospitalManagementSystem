<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.drloginbutton {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav-right {
  float: right;
}
</style>
<style>
#mySidenav a 
	{
  position: absolute;
  right: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  right: 0;
}

#about {
  top: 20px;
  background-color: #04AA6D;
}

#blog {
  top: 80px;
  background-color: #2196F3;
}

#projects {
  top: 140px;
  background-color: #f44336;
}


</style>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Light Theme</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>
<body>
<div class="topnav">
 
  <div class="topnav-right">
       <a href="https://www.facebook.com/people/City-Hospitals/100091632716474/?is_tour_dismissed=true">Like us on FaceBook</a>
    <a href="#about">Emergancy-2123</a>
  </div>
</div>
	<p><a href="../Assignment%20WD/Home.php"><img src="../Assignment%20WD/imgs/photo_2023-04-07_04-57-17(1).jpg" width="50" height="70" alt=""></a> 
		</p>
	<div id="mySidenav" class="sidenav">
  <a href="login.html" id="about">Login</a>
</div>
<div style="margin-left:80px;"> 
</div>
<div class="topnav">
  <a class="active" href="../Assignment%20WD/Home.php">Home</a>
  <a href="..\Assignment%20WD/Doctor_chanaling.php">Doctotor Chanaling</a>
  <a href="..\Assignment%20WD/contact_us.php">Contact</a>
 <a href="aboutUs.html">About</a></div>
<div style="padding-left:16px">
      <font color= "#23D8D5"><h2 align="center">ENJOY YOUR LIFE HEALTHIER 
</h2>
  </font> 
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div> 
  <img src="../Assignment WD/imgs/24 - Copy.jpg" style="width:100%"/>
  <div class="text"> 
	  <h1 style="background-color:Gray;"> 24 Hours Servise</h1>  
	</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="..\Assignment WD\imgs/slider-image1.jpg" style="width:100%"/>
	<div class="text"> 
	  <h1 style="background-color:Gray;">Sri Lankan Best Doctors
	</h1>
</div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
 
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	<button class="drloginbutton" onclick="location.href='http:../Assignment%20WD/ChanelingForm.php'">Click here to channel a doctor</button>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cityhospitals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT employeeID, Name, Expertise FROM Doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table style='border: 1px solid black; background-color: #f1f1c1;'><tr style='border: 1px solid black; background-color: #f1f1c1;'><th style='border: 1px solid black;'>employeeID</th><th style='border: 1px solid black;'>Name</th><th style='border: 1px solid black;'>Expertise</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr style='border: 1px solid black; background-color: #f1f1c1;'><td style='border: 1px solid black;'>".$row["employeeID"]."</td><td style='border: 1px solid black;'>".$row["Name"]."</td><td style='border: 1px solid black;'>".$row["Expertise"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
	 <section class="footer_banner" id="contact">
    <h2 class="hidden">Footer Banner Section </h2>
    <p class="hero_header">FOR THE LATEST NEWS &amp; UPDATES</p>
	  <a href="https://www.facebook.com/people/City-Hospitals/100091632716474/?is_tour_dismissed=true">
    <div class="button" >Check our Face Book</div>
	  </a>
  </section>
  <!-- Copyrights Section -->
  <div class="copyright">&copy; 2023- <strong>CITY Hospitals.pvt&nbsp;</strong></div>
</div>
<!-- Main Container Ends -->
	
</body>
</html>

</body>
</html>
