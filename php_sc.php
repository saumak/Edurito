<?php
include_once 'header.php';
?>
<head>
<title> HTML </title>
  <link rel="stylesheet" type="text/css" href = "impr.css">
  <style>
  body{
    background-color: #F1948A;
    font-family: georgia;
    font-size: 14px;
  }
  .content{
  background-color: #D5DBDB;
  font-family: Book Antiqua;
  width: 1120px;
  margin: 50px auto;
  border: 1.5px solid black;
  text-align: center;
  }
  .des{
    background-color: #E5E7E9;
    font-family: Book Antiqua;
    width: 800px;
    margin: 30px auto;
    border: 0.8px solid black;
    text-align: left;
  }
  button{
    float: right;
    height: 40px;
    width: 80px;
  }
  .cssHigh{
    text-align: left;
  }

  </style>
</head>
<body>
  <div class = "content"><br>

<h2>What You Should Already Know</h2>
<p>Before you continue you should have a basic understanding of the following:</p>
<ul font-size = "12px">
  <li>HTML</li>
  <li>CSS</li>
  <li>JavaScript</li>
</ul>
<p>If you want to study these subjects first, find the tutorials on our
<a href="/default.asp">Home page</a>.</p>
<hr>

<h2>What is PHP?</h2>
<ul>
<li>PHP is an acronym for &quot;PHP: Hypertext Preprocessor&quot;</li>
<li>PHP is a widely-used, open source scripting language</li>
<li>PHP scripts are executed on the server</li>
<li>PHP is free to download and use</li>
</ul>

<div class="w3-panel w3-note">
<p><strong>PHP is an amazing and popular language!</strong></p>
<p>It is powerful enough to be at the core of the biggest
blogging system on the web (WordPress)!<br>It is deep enough to run the largest social network
(Facebook)!<br>It is also easy enough to be a beginner's first server side
language!</p></div>

<hr>

<h2>What is a PHP File?</h2>
<ul>
<li>PHP files can contain text, HTML, CSS, JavaScript, and PHP code</li>
<li>PHP code are executed on the server, and the result is returned to the browser as plain HTML</li>
<li>PHP files have extension &quot;.php&quot;</li>
</ul>
<hr>

<h2>What Can PHP Do?</h2>
<ul>
  <li>PHP can generate dynamic page content</li>
  <li>PHP can create, open, read, write, delete, and close files on the server</li>
  <li>PHP can collect form data</li>
  <li>PHP can send and receive cookies</li>
  <li>PHP can add, delete, modify data in your database</li>
  <li>PHP can be used to control user-access</li>
  <li>PHP can encrypt data</li>
</ul>
<p>With PHP you are not limited to output HTML. You can output images, PDF
files, and even Flash movies. You can also output any text, such as XHTML and
XML.</p>
<hr>

<h2>Why PHP?</h2>
<ul>
  <li>PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</li>
  <li>PHP is compatible with almost all servers used today (Apache, IIS, etc.)</li>
  <li>PHP supports a wide range of databases</li>
  <li>PHP is free. Download it from the official PHP resource: </li>
  <li>PHP is easy to learn and runs efficiently on the server side</li>
</ul>
<br>

</div>
  <button type="button" class="button button1"><em><a href = "php_sc1.php">Next</a></em></button>
  <?php
    include_once 'footer.php';
   ?>
