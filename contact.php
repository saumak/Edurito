<?php
include('connections.php');
include_once 'header.php';


?><head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
    height: 100%;
    margin: 0;
    font-family: georgia;
    background-color: #CCD1D1;
    overflow: visible;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: white;
    display: none;
    padding: 100px 20px;
    height: 100%;
} */

p{
 text-align: center;
 font-size: 15px;
 font-family: georgia;
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
 textarea {
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
}

a{
 color: salmon;
}



.auto-padding{
  max-width: 650px;
  margin: auto;
  box-shadow: 5px 10px #888888;
  background: white;
 border: 0 none;
 border-radius: 3px;
 box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
 padding: 20px 30px;
 box-sizing: border-box;
 width: 80%;
}


input[type=submit]:hover {
    background-color: black;
}



</style>
</head>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <h2><em> Contact Us </em></h2>
  <div class="w3-container w3-padding-32 w3-center">
    <!--<img src="login.jpeg" alt="food" class="w3-image" style="display:block;margin:auto" width="800" height="533">-->
    <div class="auto-padding">

  	<form action = "contact_val.php" method="post">
  	<div class = "right"> <input type="text" placeholder ="fullname" name = "name" id = "firstname"></div><br>
  	<div class = "right"><input type="text" name ="email" placeholder = "mail-id" id = "email"></div> <br>
  	<div class = "right"><textarea type="text" name ="msg" placeholder = "message you want to deliver" id = "mail"></textarea></div> <br>
    <input type="submit" value="submit">

    </form>
  </div>
  </div>
</div>


<?php
include_once 'footer.php';
 ?>
