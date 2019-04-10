<?php 
	include('connections.php');
	session_start();
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
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif;background-color: #FFFFFF; padding-left:300px;}
form{
  padding-left:300px;
}
footer{
  padding-right:0px;
}
main,body,h2 em,h2{
   background: url(pictures/login_bg.jpg) no-repeat center  fixed;
   background-size: cover;
   color: #FDFEFE;
 }
</style>
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
          <a href="admin3.php">Edit User</a>
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
                <div class="row box-3">
                    <div class="grid_5">
									<h2><em>Edit User</em></h2>
									  <form method="POST" action="edituser.php">
									   
										<p>User Details: <span id="txtHint"></span></p>
									   <br>
									   <label>Email: </label><br>
									   <input type="text" name="email"/>
									   <br>
									   <label>Phone Number: </label><br>
									   <input type="text" name="phonenumber">
									   <br>
									   <label>Course: </label><br>
									   <input type="text" name="course">
									   <br>
									   <br>
									   <input type="submit" name="submit">
									<br><br>
									   <label>Name: </label><br>
									   <select name="name" onchange="showHint(this.value)">
											<option value="" >--Select--</option>
											<?php

											  $sql = "SELECT * FROM users";
											  $result = pg_query($sql)or die ("Cannot execute query: $query\n");
													while($row = pg_fetch_array($result) or die ("Cannot execute query: $query\n"))
													{
											?>
													 <option value ="<?php echo($row['name']);?>"><?php echo($row['name']);?></option>
											<?php
													}
											?>        

										</select>
									 </form>
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
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "gethint.php?q="+str, true);
        xmlhttp.send();
    }
}

</script>
<script src="js/script.js"></script>
</body>
</html>