<?php 
	include('connections.php');
	session_start();
	if (isset($_SESSION['useredited'])){
		if($_SESSION['useredited'] !== ''){
			$user = $_SESSION['useredited'];
			echo "user $user is edited";
		}
	}
	if (isset($_SESSION['userdeleted'])){
		if($_SESSION['userdeleted'] !== ''){
			$user = $_SESSION['userdeleted'];
			echo "user $user is deleted";
		}
	}
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
          <a href="deleteuser1.php">Delete User</a>
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
									<h2><em>Edit Content</em></h2>
									  <form method="POST" action="admin2.php">
									   <label>Technology: </label><br>
									   <select name="tech">
										  <option value="HTML">HTML</option>
										  <option value="JavaScript">JavaScript</option>
										  <option value="PHP">PHP</option>
										  <option value="Java">Java</option>
										  <option value="Python">Python</option>
										  <option value="MySQL">MySQL</option>
										  <option value="DL">Deep Learning</option>
										  <option value="CSS">CSS</option>
									   </select>
									   <br>
									   <label>Head: </label><br>
									   <input type="text" name="head"/>
									   <br>
									   <label>Content 1: </label><br>
									   <input type="text" name="content1">
									   <br>
									   <label>Content 2: </label><br>
									   <input type="text" name="content2">
									 <br>
									 <label> Content 3: </label><br>
									 <input type="text" name="content3">
									 <br>
									 <label> Content 4: </label><br>
									 <input type="text" name="content4">
									 <br>
									 <label> Content 5: </label><br>
									 <input type="text" name="content5">
									 <br>
									 <label> Content 6: </label><br>
									 <input type="text" name="content6">
									 <br><br>
									   <input type="submit" name="submit">
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

</script>
<script src="js/script.js"></script>
</body>
</html>