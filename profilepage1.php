<?php
session_start();
include('connections.php');
?>
<!DOCTYPE html>
<html>

<title>Your Profile Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
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
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif; background-color:#FFFFFF;}
header{background-color:#FFFFFF;}
.w3-bar-block .w3-bar-item {padding:20px}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>
<header>
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
</header>


<!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>Erudito</h3><br>
    <div class="w3-padding-32">
      <center><h4><b>Welcome </b></h4></center><br>
      <center><h6><i>your profile:</i></h6></center>
      <p>
    <?php
      
      echo "hello " . $_SESSION["username"];
      echo "<br>";
      echo "<br>";
      echo "Your Email is " .$_SESSION["email"];
      echo "<br>";
      echo "<br>";
      echo "Your phone Number is " .$_SESSION["phone"];
     ?>

</p>
    </div>
  </div>

  
<!-- End page content -->
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

<script src="js/script.js"></script>
</body>
</html>