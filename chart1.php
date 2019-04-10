<?php 
	//$session_value=(isset($_SESSION['covered']))?$_SESSION['covered']:60; 
	session_start();
	//$session_value=$_POST['covered'];
	$session_value = (isset($_SESSION['covered']) ? $_SESSION['covered'] : 60);
?>
<html>
  <head>
  <title>Sign up for erudito</title>
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
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif;background-color: #FFFFFF; padding-left:300px;}
form{
  padding-left:300px;
}
</style>
  <!-- *************************************************************  -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
		var myvar='<?php echo $session_value;?>';
        var data = google.visualization.arrayToDataTable([
         /* ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]*/
		  ['Status', 'Percentage Covered'],
		  ['Course covered', parseInt(myvar)],
		  ['Course uncovered', 60]
		  
        ]);

        var options = {
          title: 'Progress Report'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
	<div class="page">
		<header>
 <!-- Sidebar (hidden by default) -->
  <div class="toggle-menu-container">
    <nav class="nav">
      <div class="nav_title"></div>
        <a class="sf-menu-toggle fa fa-bars"></a>
          <ul class="sf-menu">
            <li class="active">
              <a href="home.html">Home</a>
            </li>
            <li> 
              <a href="about.html">About</a>
            </li>
            <li>
              <a href="menu.php">erudito Menu</a>
            </li>
            <li>
              <a href="login.html">Log in</a>
            </li>
            <li>
              <a href="signup.html">Sign up</a>
            </li>
            <li>
              <a href="logout.php">Logout</a>
            </li>
            <li>
             <a href="javascript:void(0)" onclick="w3_close()">Close</a>
            </li>
          </ul>
          </nav>
        </div>
      </nav>
</header>
  
<!-- !PAGE CONTENT! -->
<main>
  <section class="well well__offset-3">
    <div class="container">
      <div class="row box-3">
        <div class="grid_5">
          <h2><em>Progress Report</em></h2>
          <div id="piechart" style="width: 900px; height: 500px;"></div>
        </div>
    </div>
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
<script src="js/script.js"></script>
  </body>
</html>