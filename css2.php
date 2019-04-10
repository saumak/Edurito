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
    <h2>CSS Syntax</h2>
<p>A CSS rule-set consists of a selector and a declaration block:</p>
<p><img src="selector.gif" alt="CSS selector" class="w3-image"></p>
<p>The selector points to the HTML element you want to style.</p>
<p>The declaration block contains one or more declarations separated by
semicolons.</p>
<p>Each declaration includes a CSS property name and a value, separated by a colon.</p>
<p>A CSS declaration always ends with a semicolon, and declaration blocks are
surrounded by curly braces.</p>
<p>In the following example all &lt;p&gt; elements will be center-aligned, with a red
text color:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate cssHigh">
p
{<br>
&nbsp;&nbsp;&nbsp;
color: red;<br>
&nbsp;&nbsp;&nbsp;
text-align: center;<br>
}
</div>

</div>
<hr>

<h2>CSS Selectors</h2>
<p>CSS selectors are used to &quot;find&quot; (or select) HTML elements based on their
element name, id,
class, attribute, and more.</p>
<hr>

<h2>The element Selector</h2>
<p>The element selector selects elements based on the element name.</p>
<p>You can select all &lt;p&gt; elements on a page like this (in this case, all &lt;p&gt; elements will be
center-aligned, with a red text color):</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate cssHigh">
p
{<br>
&nbsp;&nbsp;&nbsp;
text-align: center;<br>
&nbsp;&nbsp;&nbsp;
color: red;<br>
}
</div>

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

<h2>The id Selector</h2>
<p>The id selector uses the id attribute of an HTML element to select a specific element.</p>
<p>The id of an element should be unique within a page, so the id selector is
used to
select one unique element!</p>
<p>To select an element with a specific id, write a hash (#) character, followed by
the id of the element.</p>
<p>The style rule below will be applied to the HTML element with id=&quot;para1&quot;:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate cssHigh">
#para1
{<br>
&nbsp;&nbsp;&nbsp;
text-align: center;<br>
&nbsp;&nbsp;&nbsp;
color: red;<br>
}
</div>

</div>

<div class="w3-panel w3-note">
 <p><strong>Note:</strong> An id name cannot start with a number!</p>
</div>
<hr>

<h2>The class Selector</h2>
<p>The class selector selects elements with a specific class attribute.</p>
<p>To select elements with a specific class, write a period (.) character, followed by the name of the class.</p>
<p>In the example below, all HTML elements with class=&quot;center&quot; will be red and center-aligned:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate cssHigh">
.center {<br>&nbsp;&nbsp;&nbsp; text-align: center;<br>&nbsp;&nbsp;&nbsp; color: red;<br>}
</div>

</div>

<p>You can also specify that only specific HTML elements should be affected by a class.</p>
<p>In the example below, only &lt;p&gt; elements with class=&quot;center&quot; will be center-aligned:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate cssHigh">
p.center {<br>&nbsp;&nbsp;&nbsp; text-align: center;<br>&nbsp;&nbsp;&nbsp; color: red;<br>}
</div>

</div>

<p>HTML elements
can also refer to more than one class.</p>
<p>In the example below, the &lt;p&gt; element will be styled according to class=&quot;center&quot;
and to class=&quot;large&quot;:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;p class=&quot;center large&quot;&gt;This paragraph refers to two classes.&lt;/p&gt;</div>

</div>
<div class="w3-panel w3-note">
  <p><strong>Note:</strong> A class name cannot start with a number!</p>
</div>

<hr>

<h2>Grouping Selectors</h2>
<p>If you have elements with the same style definitions, like this:</p>
<div class="w3-example">
<div class="w3-code notranslate cssHigh">
h1
{<br>
&nbsp;&nbsp;&nbsp;
text-align: center;<br>&nbsp;&nbsp;&nbsp; color: red;<br>
}<br>
<br>h2
{<br>
&nbsp;&nbsp;&nbsp;
text-align: center;<br>&nbsp;&nbsp;&nbsp; color: red;<br>}<br>
<br>p
{<br>
&nbsp;&nbsp;&nbsp;
text-align: center;<br>&nbsp;&nbsp;&nbsp; color: red;<br>
}</div></div>


<p>It will be better to group the selectors, to minimize the code.</p>
<p>To group selectors, separate each selector with a comma.</p>
<p>In the example below we have grouped the selectors from the code above:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate cssHigh">
h1, h2, p
{<br>
&nbsp;&nbsp;&nbsp;
text-align: center;<br>&nbsp;&nbsp;&nbsp; color: red;<br>}</div>

</div>
<hr>

<h2>CSS Comments</h2>
<p>Comments are used to explain the code, and may help when you edit the source code at a later date.</p>
<p>Comments are ignored by browsers.</p>
<p>A CSS comment starts with /* and ends with */. Comments can also span
multiple lines:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate cssHigh">
p
{<br>
&nbsp;&nbsp;&nbsp;
color: red;<br>
&nbsp;&nbsp;&nbsp;
/* This is a single-line comment */<br>
&nbsp;&nbsp;&nbsp;
text-align: center;<br>
}<br><br>/* This is<br>a multi-line<br>comment */
</div>

</div>
</div>
<button type="button" class="button button1"><em><a href = "css3.php">Next</a></em></button>
<?php
  include_once 'footer.php';
 ?>
