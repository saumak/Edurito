<?php
include('connections.php');
include_once 'header.php';
 ?>
 <head>
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

 .w3-center{
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
 <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
   <h2><em> Surprise Me! </em></h2>
   <div class="w3-container w3-padding-32 w3-center">
     <form class = "check-form" action = "sup_logic.php" method = "POST">
       <br>
       <br>
 			<input type = "text" name = "time_tot" placeholder = "Total time"><br>
 			<input type = "text" name = "time_day" placeholder = "Time per day"><br>
      <div id = "radio_but">
      <input type = "radio" name = "level" value = "'beginner'"> <label>Beginner</label><br>
      <input type = "radio" name = "level" value = "'Intermediate'"> <label>Intermediate</label><br>
      <input type = "radio" name = "level" value = "'Expert'"> <label>Expert</label><br>
    </div><br>
      <input type = "submit" name = "Submit">
 		</form>
   </div>
</div>
<footer>
    <div class="auto-container">
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
