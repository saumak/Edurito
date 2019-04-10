<?php
	include('connections.php');
	//$session_value=(isset($_SESSION['covered']))?$_SESSION['covered']:60;
	session_start();
	//$session_value=$_POST['covered'];
	$user = $_SESSION['name'];
	$pwd = $_SESSION['pass'];

	$query= "select totaltimeprovidedbyuser from users WHERE name='".$user."' AND pass='".$pwd."' ";
		$result= pg_query($connections, $query) or die("Cannot execute query: $query\n");
		$row = pg_fetch_row($result);
		$totaltimeprovidedbyuser=$row[0];
	$query= "select totaltime from users WHERE name='".$user."' AND pass='".$pwd."' ";
		$result= pg_query($connections, $query) or die("Cannot execute query: $query\n");
		$row = pg_fetch_row($result);
		$timeelapsedbyuser=$row[0];
	$query= "select timein from users WHERE name='".$user."' AND pass='".$pwd."' ";
		$result= pg_query($connections, $query) or die("Cannot execute query: $query\n");
		$row = pg_fetch_row($result);
		$currentlogin=$row[0];
	$covered=$timeelapsedbyuser;
	$uncovered=$totaltimeprovidedbyuser-$timeelapsedbyuser;
	$session_value = (isset($_SESSION['covered']) ? $_SESSION['covered'] : 60);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Progress Report</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src='js/device.min.js'></script>
	<style>
label {
  color: black;
  font-size: 20px;
  font-family: georgia;
  background-color: inherit;

    /* padding-bottom: 10px;
    padding-top: 20px;
    margin-bottom: 10px; */

}
main,body{
   font-family: "georgia", sans-serif;
   background-color: #FFFFFF;
   background-size: cover;
   z-index: -1;
 }
footer {
	background-color: #a95858;
}
 /*h2 em,h2{
   padding:10px 5px 15px 20px;
   text-align: center;
   font-size: 60px;
   line-height: 30px;
   color: #FDFEFE;
 }*/
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
		var cov='<?php echo $covered;?>';
		var uncov='<?php echo $uncovered;?>';
        var data = google.visualization.arrayToDataTable([
         /* ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]*/
		  ['Status', 'Percentage Covered'],
		  ['Course covered', parseInt(cov)],
		  ['Course uncovered', parseInt(uncov)]

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
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div class="stuck_container">
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
          <a href="surprise.php">Surprise Me</a>
        </li>
        <li>
          <a href="logout.php">Log out</a>
        </li>
        <li>
          <a href="contact.php">Contact Us</a>
        </li>
        <li>
          <a href="javascript:void(0)" onclick="w3_close()">Close</a>
        </li>
     </ul>
    </nav>
  </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2><em>Progress Report</em></h2>
                <div class="row box-3">
                    <div class="grid_2">
                        <h2>Progress Chart</h2>
                        <div id="piechart" style="width: 600px; height: 400px;"></div>
                    </div>
				    <div class="grid_3"></div>
                    <div class="preffix_1 grid_6">
                        <h2>Course Covered Details</h2>
                        <h3>Once the course has been chosen, the lessons completed will be tracked along with the remaining time they have to complete the course. This site will also create a success rate, which will tell the user, about their progress report.</h3>
                        <p>When the subjects of school/university exceed the level of knowledge a student has, they mostly turn to an online site to learn about the topic. But, with the time and money constraint, most aren’t in the position to dedicate their time to online learning. So, we have come up with an idea of creating a site, which will take their time constraint into consideration and suggests a course based on it.</p>
                        <address class="address-2">
                            <div class="address_container"><p>Erudito Inc. 107 S Indiana Ave, Bloomington, IN 47405</p></div>
                            <dl>
                                <dt>Telphone:</dt> <dd>+1 (812) 855-4848</dd><br>
                                <dt>E-mail:</dt> <dd><a href="mailto:prkumoda@iu.edu">one.inc@eruditolearn.com</a></dd>
                            </dl>
                        </address>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <div class="container">
            <ul class="socials">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-tumblr"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
            <div class="copyright">© <span id="copyright-year"></span> |
                <a href="#">Erudito Inc. Privacy Policy</a>
            </div>
        </div>
    </footer>
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
