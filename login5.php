<?php
include('connections.php');
?>
<!DOCTYPE html>
<html>
<title>Erudito</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<meta name="format-detection" content="telephone=no"/>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/grid.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.js"></script>
<script src='js/device.min.js'></script> 
<style>
#map {
  height: 400px;
  width: 100%;
}
</style>
</head>
<body>
<header>
  <!-- Sidebar (hidden by default) -->
 <div class="toggle-menu-container">
    <nav class="nav">
      <div class="nav_title"></div>
      <a class="sf-menu-toggle fa fa-bars"></a>
      <ul class="sf-menu">
        <li class="active">
          <a href="index.php">Home</a>
        </li>
        <li> 
          <a href="coursecat.html">Course Catalogue</a>
        </li>
        <li>
          <a href="surprise.php">Surprise Me!</a>
        </li>
        <li>
          <a href="login.html">Log in</a>
        </li>
        <li>
          <a href="signup.html">Sign up</a>
        </li>
        <li>
          <a href="javascript:void(0)" onclick="w3_close()">Close</a>
        </li>
     </ul>
    </nav>
  </div>
  <div class="page">
        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-src="pictures/knowledge-is-power.jpg"">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-src="pictures/kip.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-src="pictures/LMM-Cover-Images-7.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
            </div>

            <div class="brand wow fadeIn">
                <h1 class="brand_name">
                    <a href="home.html">Erudito</a>
                </h1>
            </div>
        </div>
  </div>
  </header>
  
<!-- !PAGE CONTENT! -->
<main>
  <section class="well">
    <div class="container">
    <h2><em>Welcome</em>to Erudito</h2>
    <div class="row"></div>
      <div class="grid_6" id="map">
        <script>
          function initMap() {
            var uluru = {lat: 39.171969, lng: -86.510235};
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
          });

            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmT54jKTc9ehbjZ2FNtwRqqd29xkuzYbw&callback=initMap">
      </script>
    </div>
      <p class="center indents-1"> Erudito address: 1811 E 10th St, Bloomington, IN 47408 </p>
    
    <div>
      <h2><b>Your own learning portal</b></h2>
      <h3 class="center indents-1">Knowledge gives you wings.</h3>
      <p class="center indents-1">Erudito, uses prediction system, to suggest topics to the users. The input involves the amount of time they are willing to spend in learning, their current education level, what type of difficulty level they are hoping for and finally their area of interest. We will take these into consideration while devising a method to suggest those three courses based on their difficulty level priority.</p>
       </div>
      </div>

  
<!-- End page content -->
      </div>
    </section>
  </main>
</div>


<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

</script>
<!--FOOTER-->
<!--TEMPLATE Credit to templatemonster.com-->
<footer>
        <div class="container">
            <ul class="socials">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-tumblr"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
            <div class="copyright">&copy; <span id="copyright-year"></span> |
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>

<script src="js/script.js"></script>
</body>
</html>