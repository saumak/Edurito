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
  .jsHigh{
    text-align: left;
  }

  </style>
</head>
<body>
  <div class = "content"><br>
    <h2>JavaScript Can Change HTML Content</h2>
<p>One of many JavaScript HTML methods is <strong>getElementById()</strong>.</p>
<p>This example uses the method to &quot;find&quot; an HTML element (with id=&quot;demo&quot;)
and changes the element content (<strong>innerHTML</strong>) to &quot;Hello
JavaScript&quot;:</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate jsHigh">
 document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello JavaScript&quot;;</div>

</div>
<div class="w3-panel w3-note">
<p>JavaScript accepts both double and single quotes:</p>
</div>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate jsHigh">
 document.getElementById('demo').innerHTML = 'Hello JavaScript';</div>

</div>
<hr>
<div style="overflow:auto;text-align:center">
<!-- MidContent -->
  <div id='div-gpt-ad-1493883843099-0' style="display: inline-block">
    <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1493883843099-0'); });
    </script>
  </div>
</div>
<hr>

<h2>JavaScript Can Change HTML Styles (CSS)</h2>
<p>Changing the style of an HTML element, is a variant of changing an HTML
attribute:</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate jsHigh">
 document.getElementById(&quot;demo&quot;).style.fontSize = &quot;35px&quot;;<br>
  or<br>document.getElementById('demo').style.fontSize = '35px';</div>

</div>
<hr>

<h2>JavaScript Can Hide HTML Elements</h2>
<p>Hiding HTML elements can be done by changing the display style:</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate jsHigh">
 document.getElementById(&quot;demo&quot;).style.display = &quot;none&quot;;<br>
  or<br>document.getElementById('demo').style.display = 'none';</div>

</div>
<hr>

<h2>JavaScript Can Show HTML Elements</h2>
<p>Showing hidden HTML elements can also be done by changing the display style:</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate jsHigh">
 document.getElementById(&quot;demo&quot;).style.display = "block";<br>or<br>document.getElementById('demo').style.display =
  'block';</div>

</div>


</div>
<button type="button" class="button button1"><em><a href = "jscript2.php">Next</a></em></button>
<?php
  include_once 'footer.php';
 ?>
