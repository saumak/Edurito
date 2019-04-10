<?php
include('connections.php');
session_start();
?>
<!DOCTYPE html>
<html>
<title>erudito</title>
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
        <li><center>
          <?php
          echo "Hi, " .$_SESSION["username"]. ".<br>";
          ?></center>
        </li>
        <li class="active">
          <a href="home2.php">Home</a>
        </li>
        <li> 
          <a href="coursecat.html">Course Catalogue</a>
        </li>
        <li>
          <a href="surprise.php">Surprise Me!</a>
        </li>
        <li>
          <a href="profilepage1.php">User Profile</a>
        </li>
        <li>
          <a href="chart.php">Progress Report</a>
        </li>
        <li>
          <a href="contact.php">Contact Us</a>
        </li>
        <li>
          <a href="logout.php">Log out</a>
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
                    <a href="home.html">erudito</a>
                </h1>
            </div>
        </div>
  </header>
  
<!-- !PAGE CONTENT! -->
<main>
  <section class="well">
    <div class="container">
    <h2><em>Welcome</em>to erudito Restaurant</h2>
    <div class="row""></div>
      <section class="parallax parallax5" data-parallax-speed="-0.4">
            <div class="container">
                <h2><em>Learn new technologies</em>Achieve it. Proceed.</h2>
                <div class="row">
                    <div class="grid_6">
                        <p class="indents-3">The overall idea is to keep the design simple, so that the content and the visual does not overwhelm the student, but in the same time, inspire them to do more. Our main aim in this project is to create a working site, which can give the courses which are currently in trend, with the features which will allow the user to have an interactive environment, all for free instead of charging as other sites do. </p>                        
                    </div>
                    <div class="grid_6">
                        <p class="indents-3"><br><br>The overall idea is to keep the design simple, so that the content and the visual does not overwhelm the student, but in the same time, inspire them to do more. Our main aim in this project is to create a working site, which can give the courses which are currently in trend, with the features which will allow the user to have an interactive environment, all for free instead of charging as other sites do.</p>
                    </div>
                </div>
            </div>
        </section>
    
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