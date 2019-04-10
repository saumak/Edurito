<?php
include('connections.php');
session_start();
if (isset($_GET['course'])){
	if($_GET['course']!=''){
		$_SESSION['course'] = $_GET['course'];
	}
}
if(isset($_SESSION['name'])){
	//header("Location: login.html?error=Session%20exists!");
	//redirect to the respective pages
	   $user=$_SESSION['name'];
	   if($user=="admin"){
			header("Location:admin1.php");
			exit();
	   }
	   $query = "select course from users WHERE name='".$user."'";
	   $rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
	   $ro = pg_fetch_object($rs);
	   $cour = $ro->course;
	   echo $cour;
	   switch($cour){
			case ($cour == "HTML"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "CSS"):{
				header("Location:css1.php");
				exit();
			}
			case ($cour == "Javascript"):{
				header("Location:jscript.php");
				exit();
			}
			case ($cour == "Java"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "PHP"):{
				header("Location:php_sc.php");
				exit();
			}
			case ($cour == "SQL"):{
				header("Location:sql.php");
				exit();
			}
			case ($cour == "Python"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "C++"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "ML"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "DL"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "Bootstrap"):{
				header("Location:boot.php");
				exit();
			}
			case ($cour == "Basicprog"):{
				header("Location:first.php");
				exit();
			}
		}
}
?>
<?php
// Showing a meaningful message
// if there were issues:
if(isset($_GET['error'])) {
  echo $_GET['error']."<br><hr>";
}

if(isset($_GET['success'])) {
  echo $_GET['success']. "<br><hr>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
.well__offset-3, body, html {
    height: 100%;
    margin: 0;
    font-family: georgia;
    background-color: #CCD1D1;
    overflow: visible;
}

/* Style tab links */
.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: white;
    display: none;
    padding: 100px 20px;
    height: 100%;
}

#Home {background-color: #566573;}
#About {background-color: #566573;}
#Projects {background-color: #566573;}
#Contact {background-color: #566573;}

#colorme {
 color: lightblue;
}

#box{
  background-color: #566573;
  font-family: Book Antiqua;
  width: 1120px;
  margin: 50px auto;
  border: 0.5px #566573;
  text-align: center;
}

p{
 text-align: center;
 font-size: 15px;
 font-family: georgia;
}

blockquote{
 text-align: center;
 font-size: 30 px;
 font-style: italic;
 font-family: georgia;
}

.img-circle{
 width: 200px;
 height: 200px;
 align-content: center;
}

.panel-body{
 text-align: left;
 color: black;
 font-family: georgia;
}

.format{
 text-align: center;
  width: 50%;
  border-width: thin;
  background: #566573;
  margin: 100px auto;
}

label{
 /* float: right; */
  width: 15%;
  align-items: center;
  margin-top: 10px;
  color: black;
  text-decoration: none;
}

.right{
 border-radius: 3px;
  padding: 0.5px;

}

.row:after {
    content: "";
    display: table;
    clear: both;
   position: static;

 }

 input[type=text]{
     width: 100%; /* Full width */
     padding: 8px; /* Some padding */
     border: 1px solid #ccc; /* Gray border */
     border-radius: 4px; /* Rounded borders */
     box-sizing: border-box; /* Make sure that padding and width stays in place */
     margin-top: 6px; /* Add a top margin */
     margin-bottom: 16px; /* Bottom margin */
     resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
 }

  input[type=password]{
     width: 100%; /* Full width */
     padding: 8px; /* Some padding */
     border: 1px solid #ccc; /* Gray border */
     border-radius: 4px; /* Rounded borders */
     box-sizing: border-box; /* Make sure that padding and width stays in place */
     margin-top: 6px; /* Add a top margin */
     margin-bottom: 16px; /* Bottom margin */
     resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
 }

input[type=submit] {
    background-color: #34495E;
    color: white;
    padding: 12px 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
		padding-left: 20px;
		padding-right: 20px;
}

a{
 color: salmon;
}

.active{
  max-width: 400px;
  margin: auto;


}

.nav-tabs{
  max-width: 400px;
  margin: 20px auto;
  border-width: thin;
  text-align: center;

}

.container{
  max-width: 550px;
  margin: auto;
  box-shadow: 5px 10px #888888;
  background: white;
 border: 0 none;
 border-radius: 3px;
 box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
 padding: 20px 30px;
 box-sizing: border-box;
 width: 80%;
 align-content: center;
}

.nav{
  /* flex: auto;
  padding: 50px; */
  /* text-align: center; */
  letter-spacing: 1px;
  font-size: 14px;
  margin: 30px;
}
input[type=submit]:hover {
    background-color: black;
}

input[type = radio]{
  padding-top: 20px;
  padding: 30px;
  padding-bottom: 20px;
  margin-bottom: 10px;
  margin-top: 20px;
}

</style>
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
      </nav>
</header>

<!-- !PAGE CONTENT! -->
<main>
  <section class="well well__offset-3">
		<h2><em>Sign up</em></h2>
    <div class="container">
      <div class="row box-3">
        <div class="grid_5">
					<form method="POST" action="signup.php">
	       <input type="text" name="username" placeholder="Username">
	       <br>
	       <input type="password" name="password" placeholder="Password">
	       <br>
	       <input type="password" name="confirmPassword" placeholder="Confirm Password">
         <br>
         <input type="text" name="email" placeholder="Email-id">
         <br>
         <input type="text" name="phoneNumber" placeholder="ex)(012) 345-6789">
         <br>
         <input type="text" name="tot_time" placeholder="20">
         <br><br>
	       <input type="submit" name="submit">
         <em> Already Signed Up? </em> <a href = "login.php"> Login </a>
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
