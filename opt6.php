<?php
include('connections.php');
session_start();
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href = "css/impr.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="Projects" class="tabcontent">
	<!-- for collapsable content -->
	<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><p> SQL <p></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
          <ul>
            <li>In this course, you'll learn how to communicate with relational databases through SQL. You'll learn—and practice with 4 projects—how to manipulate data and build queries that communicate with more than one table.</li>
            <li>We live in a data-driven world: people search through data to find insights to inform strategy, marketing, operations, and a plethora of other categories. There are a ton of businesses that use large, relational databases, which makes a basic understanding of SQL a great employable skill not only for data scientists, but for almost everyone.</li>
            <li>There are many options to choose from for developing SQL content. They are MySQL, Oracle, PostgreSQL, MySqli, etc..</li>
          </ul>
				</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> <p> CSS <p> </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <ul>
            <li>We recommend that you complete Learn HTML before learning CSS.</li>
            <li>Without CSS, every web page would be plain text and images that flowed straight down the left side of the page. With CSS, you can add color and background images and change the layout of your page — your web pages might even feel like works of art!</li>
            <li>You will learn many aspects of styling web pages! From setting up the correct file structure, to editing text and colors, to creating attractive layouts, you'll be able to customize the appearance of your web pages to suit your every need!</li>
          </ul>
          <button type="button" class="button button1" name = "html"><em>
					<?php
						$compname="Enroll";
						$cor="CSS";
						echo "<a href=sign_up.php?course=",$cor,">$compname</a>";
					?>
				</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><p> Deep Learning</p> </a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <ul>
            <li>If you want to break into AI, this Specialization will help you do so. Deep Learning is one of the most highly sought after skills in tech. We will help you become good at Deep Learning.</li>
            <li>In this course, you will learn the foundations of Deep Learning, understand how to build neural networks, and learn how to lead successful machine learning projects.</li>
            <li> You will learn about Convolutional networks, RNNs, LSTM, Adam, Dropout, BatchNorm, Xavier/He initialization, and more. You will work on case studies from healthcare, autonomous driving, sign language reading, music generation, and natural language processing.</li>
          </ul>
          <button type="button" class="button button1" name = "html"><em>
					<?php
						$compname="Enroll";
						$cor="DL";
						echo "<a href=sign_up.php?course=",$cor,">$compname</a>";
					?>
				</div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- tab content -->
</body>
</html>
