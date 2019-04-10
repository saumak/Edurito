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
    <h2>What is CSS?</h2>
<ul>
  <li><b>CSS</b> stands for <b>C</b>ascading <b>S</b>tyle <b>S</b>heets</li>
  <li>CSS describes <strong>how HTML elements are to be displayed on screen,
  paper, or in other media</strong></li>
  <li>CSS <strong>saves a lot of work</strong>. It can control the layout of
  multiple web pages all at once</li>
  <li>External stylesheets are stored in <b>CSS files</b></li>
</ul>
<hr>

<h2>Why Use CSS?</h2>
<p>CSS is used to define styles for your web pages, including the design, layout
and variations in display for different devices and screen sizes.&nbsp;</p>
<hr>

<h2>CSS Solved a Big Problem</h2>
<p>HTML was NEVER intended to contain tags for formatting a web page!</p>
<p>HTML was
created to <strong>describe the content</strong> of a web page, like:</p>
<p>&lt;h1&gt;This is a heading&lt;/h1&gt;</p>
<p>&lt;p&gt;This is a paragraph.&lt;/p&gt;</p>
<p>When tags like &lt;font&gt;, and color attributes were added to the HTML 3.2
specification, it started a nightmare for web developers. Development of large
websites, where fonts and color information were added to every single
page, became a long and expensive process.</p>
<p>To solve this problem, the World Wide Web Consortium (W3C) created CSS.</p>
<p>CSS removed the style formatting from the HTML page!</p>
<hr>

<h2>CSS Saves a Lot of Work!</h2>
<p>The style definitions are normally saved in external .css files.</p>
<p>With an external stylesheet file, you can change the look of an entire website by changing just one file!</p>
<br>
</div>

</div>
<button type="button" class="button button1"><em><a href = "css2.php">Next</a></em></button>
<?php
  include_once 'footer.php';
 ?>
