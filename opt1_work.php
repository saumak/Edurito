<?php
include('connections.php');
session_start();
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href = "css/style.css">
  <link rel="stylesheet" type="text/css" href = "css/impr.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src = "sugg_val.php"></script>
</head>
<body>
  <div id="Projects" class="tabcontent">
	<!-- for collapsable content -->
	<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><p> HTML <p></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
					<ul>
							<li> Hypertext Markup Language (HTML) is the standard markup language for creating web pages and web applications. With Cascading Style Sheets (CSS) and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web</li>
							<li> HTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects such as interactive forms may be embedded into the rendered page.</li>
							<li> So, in this course, you will be learning about the course structure, fundamentals, tips, tricks and shortcuts to improve your knowledge in the field of front end development.</li>
					</ul> 
					<button type="button" class="button button1" name = "html"><em>
					<?php 
						$compname="Enroll";
						$cor="HTML";
						echo "<a href=sign_up.php?course=",$cor,">$compname</a>"; 
					?>
					</em></button>
          <?php
          $var_value = (isset($_POST['html']) ? $_POST['html'] : null);
          $q1 = "INSERT INTO users(course) VALUES ('$var_value')";
          $_SESSION['course'] = $var_value;
          ?>
				</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> <p> PHP <p> </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <ul>
            <li>In this course, you'll explore the basic structure of a web application, and how a web browser interacts with a web server. </li>
            <li>You'll be introduced to the request/response cycle, including GET/POST/Redirect. You'll also gain an introductory understanding of Hypertext Markup Language (HTML), as well as the basic syntax and data structures of the PHP language, variables, logic, iteration, arrays, error handling, and superglobal variables, among other elements.</li>
            <li>Students who would like to learn more about web application development; specifically HTML, CSS, and using PHP/MySQL environments like XAMPP or MAMP</li>
          </ul><button type="button" class="button button1" name = "php"><em><a href = "signup.php">Enroll</a></em></button>
          <?php
          $var_value = (isset($_POST['php']) ? $_POST['php'] : null);
          $_SESSION['course'] = $var_value;
          ?>
				</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><p> Machine Learning</p> </a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <ul>
            <li>Machine learning is the science of getting computers to act without being explicitly programmed.</li>
            <li>You'll learn about not only the theoretical underpinnings of learning, but also gain the practical know-how needed to quickly and powerfully apply these techniques to new problems.</li>
            <li>This course provides a broad introduction to machine learning, datamining, and statistical pattern recognition.No IDE would be required fo this course</li>
          </ul>
          <button type="button" class="button button1" name = "ml"><em><a href = "signup.php">Enroll</a></em></button>
          <?php
          $var_value = (isset($_POST['ml']) ? $_POST['ml'] : null);
          $_SESSION['course'] = $var_value;
          ?>
				</div>
      </div>
    </div>
  </div>
</div>
<p> If you want to try again </p> <button type="button" class="button button1"><em><a href = "surprise.php">Revert Back!</a></em></button>
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
<!-- tab content -->
</body>
</html>
