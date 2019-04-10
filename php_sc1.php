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
    <h2>Basic PHP Syntax</h2>
    <p>A PHP script can be placed anywhere in the document.</p>
    <p>A PHP script starts with <b>&lt;?php</b> and ends with <b>?&gt;</b>:</p>
    <div class="w3-code w3-border notranslate"><div>
    &lt;?php<br>
    // PHP code goes here<br>
    ?&gt;
    </div></div>
    <p>The default file extension for PHP files is &quot;.php&quot;.</p>
    <p>A PHP file normally contains HTML tags, and some PHP scripting code.</p>
    <p>Below, we have an example of a simple PHP file, with a PHP script that uses a
    built-in PHP function &quot;echo&quot; to output the text
    &quot;Hello World!&quot; on a web page:</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code htmlHigh notranslate">
     &lt;!DOCTYPE html&gt;<br>
     &lt;html&gt;<br>
        &lt;body&gt;<br><br>
        &lt;h1&gt;My first PHP page&lt;/h1&gt;<br><br>
     &lt;?php<br>
     echo &quot;Hello World!&quot;;<br>?&gt;<br><br>
        &lt;/body&gt;<br>
        &lt;/html&gt;
    </div>

    </div>
    <p><strong>Note:</strong> PHP statements end with a semicolon (;).</p>
    <hr>
    <div style="overflow:auto;text-align:center">
    <!-- MidContent -->
      <div id='div-gpt-ad-1493883843099-0' style="display: inline-block">
        <script>
        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1493883843099-0'); });
        </script>
      </div>
    </div>

    <h2>Comments in PHP</h2>
    <p>A comment in PHP code is a line that is not read/executed as part of the
    program. Its only purpose is to be read by someone who is looking at the code.</p>
    <p>Comments can be used to:</p>
    <ul>
      <li>Let others understand what you are doing</li>
      <li>Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code</li>
    </ul>
    <p>PHP supports several ways of commenting:</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code htmlHigh notranslate">
    &lt;!DOCTYPE html&gt;<br>
    &lt;html&gt;<br>
    &lt;body&gt;<br><br>
    &lt;?php<br>
    // This is a single-line comment<br><br>
     # This is also a single-line comment<br><br>
    /*<br>
    This is a multiple-lines comment block<br>that spans over multiple<br>lines<br>
    */<br><br>// You can also use comments to leave out parts of a code line<br>$x = 5 /* + 15 */ + 5;<br>echo $x;<br>?&gt;<br><br>
    &lt;/body&gt;<br>
    &lt;/html&gt;
    </div>

    </div>

    <h2>PHP Case Sensitivity</h2>
    <p>In PHP, all keywords (e.g. if, else, while, echo, etc.), classes, functions,
    and user-defined functions are NOT case-sensitive.</p>
    <p>In the example below, all three echo statements below are legal (and equal):</p>

    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code htmlHigh notranslate">
     &lt;!DOCTYPE html&gt;<br>
     &lt;html&gt;<br>
        &lt;body&gt;<br><br>
        &lt;?php<br>
     ECHO &quot;Hello World!&lt;br&gt;&quot;;<br>echo &quot;Hello World!&lt;br&gt;&quot;;<br>
     EcHo &quot;Hello World!&lt;br&gt;&quot;;<br>?&gt;<br><br>
        &lt;/body&gt;<br>
        &lt;/html&gt;
    </div>

    </div>

    <div class="w3-note w3-panel">
    <p>However; all variable names are case-sensitive.</p>
    </div>

    <p>In the example below, only the first statement will display the value of the
    $color variable (this is because $color, $COLOR, and $coLOR are treated as three
    different variables):</p>

    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code htmlHigh notranslate">
     &lt;!DOCTYPE html&gt;<br>
     &lt;html&gt;<br>
        &lt;body&gt;<br><br>
        &lt;?php<br>$color = &quot;red&quot;;<br>
     echo &quot;My car is &quot; . $color . &quot;&lt;br&gt;&quot;;<br>echo &quot;My house is &quot; . $COLOR . &quot;&lt;br&gt;&quot;;<br>echo &quot;My boat is &quot; . $coLOR . &quot;&lt;br&gt;&quot;;<br>?&gt;<br><br>
        &lt;/body&gt;<br>
        &lt;/html&gt;
    </div>

    </div>



</div>
<button type="button" class="button button1"><em><a href = "css2.php">Next</a></em></button>
<?php
  include_once 'footer.php';
?>
