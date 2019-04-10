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
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><p> Java <p></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
          <ul>
            <li>In this course you'll be exposed to fundamental programming concepts, including object-oriented programming (OOP) using Java. You'll build 7 Java projects—like a basic calculator—to help you practice along the way.</li>
            <li>Java is among the most popular programming languages out there, mainly because of how versatile and compatible it is. Java can be used for a large number of things, including software development, mobile applications, and large systems development. Knowing Java opens a great deal of doors for you as a developer.</li>
            <li>All you need is a IDE(Integrated Developing Environment), and you start the course right away!</li>
          </ul>
          <button type="button" class="button button1" name = "html"><em>
					<?php
						$compname="Enroll";
						$cor="Java";
						echo "<a href=sign_up.php?course=",$cor,">$compname</a>";
					?>
				</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> <p> C++ <p> </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <ul>
            <li>This course is for experienced C programmers who want to program in C++. The examples and exercises require a basic understanding of algorithms and object-oriented software.</li>
            <li>This course will contain the step by step improvement in the difficulty level of the data structure, used in the programming languages</li>
            <li>The IDE requried for this course would be Notepad++ or terminal if you are using Mac</li>
          </ul>
          <button type="button" class="button button1" name = "html"><em>
					<?php
						$compname="Enroll";
						$cor="C++";
						echo "<a href=sign_up.php?course=",$cor,">$compname</a>";
					?>
				</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><p> Basic Programming</p> </a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <ul>
            <li>Programming knowledge is indispensable in today’s world, and learning to code is one of the most valuable and useful things you can do.</li>
            <li>Whether you’re launching a career, advancing a career, or just excited to learn a new skill, there is no time like the present to start learning, and this program offers everything you need to get up to speed—with no prior programming skills required.</li>
            <li>Learn the basics of programming through HTML, CSS, and Python. Explore possible programming paths with our final project selection. Get confident in your ability to think and problem-solve like a programmer. Be primed and ready for our career-ready programs after mastering these projects.</li>
          </ul>
          <button type="button" class="button button1" name = "html"><em>
					<?php
						$compname="Enroll";
						$cor="Basicprog";
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
