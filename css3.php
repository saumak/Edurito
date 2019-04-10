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
    <h2>Three Ways to Insert CSS</h2>
<p>There are three ways of inserting a style sheet:</p>
<ul class="w3-leftbar w3-border w3-border-green" style="padding-top:8px;padding-bottom:8px">
<li>External style sheet</li>
<li>Internal style sheet</li>
<li>Inline style</li>
</ul>
<hr>

<h2>External Style Sheet</h2>
<p>With an
external style sheet, you can change the look of an entire website by changing
just one file!</p>
<p>Each page must include a reference to the external style sheet file inside the &lt;link&gt;
element. The &lt;link&gt; element goes inside the &lt;head&gt; section:</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;head&gt;<br>
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot;
href=&quot;mystyle.css&quot;&gt;<br>
&lt;/head&gt;</div>

</div>

<p>An external style sheet can be written in any text editor. The file should not contain any html tags.
The style sheet file must be saved with a .css extension.</p>
<p>Here is how the &quot;mystyle.css&quot; looks:</p>
<div class="w3-example">
<div class="w3-code notranslate cssHigh">
body {<br>&nbsp;&nbsp;&nbsp; background-color: lightblue;<br>}<br><br>h1 {<br>&nbsp;&nbsp;&nbsp;
color: navy;<br>&nbsp;&nbsp;&nbsp; margin-left: 20px;<br>}</div>
</div>
<div class="w3-panel w3-warning">
  <p><strong>Note:</strong> Do not add a space between the property value and the unit (such as <code class="w3-codespan">margin-left: 20 px;</code>). The correct way is: <code class="w3-codespan">margin-left: 20px;</code></p>
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

<h2>Internal Style Sheet</h2>
<p>An internal style sheet may be used if one single page has a unique style.</p>
<p>Internal styles are defined within the &lt;style&gt; element, inside the &lt;head&gt; section of an HTML page:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;head&gt;<br>&lt;style&gt;<br>body {<br>&nbsp;&nbsp;&nbsp; background-color: linen;<br>}<br><br>
h1 {<br>&nbsp;&nbsp;&nbsp; color: maroon;<br>&nbsp;&nbsp;&nbsp; margin-left: 40px;<br>} <br>
&lt;/style&gt;<br>&lt;/head&gt;</div>

</div>
<hr>

<h2>Inline Styles</h2>
<p>An inline style may be used to apply a unique style for a single element.</p>
<p>To use inline styles, add the style attribute to the relevant element. The
style attribute can contain any CSS property.</p>
<p>The example below shows how to change
the color and the left margin of a &lt;h1&gt; element:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;h1 style="color:blue;margin-left:30px;"&gt;This is a heading&lt;/h1&gt;</div>

</div>
<div class="w3-panel w3-note">
  <p><strong>Tip:</strong> An inline style loses many of the advantages of a style sheet (by mixing
content with presentation). Use this method sparingly.</p>
</div>

<hr>

<h2>Multiple Style Sheets</h2>
<p>If some properties have been defined for the same selector (element) in different style sheets,
the value from the last read style sheet will be used.&nbsp;</p>
<h3> Example</h3>
<p> Assume that an external style sheet has the following
style for the &lt;h1&gt; element:</p>
<div class="w3-example">
<div class="w3-code notranslate cssHigh">
h1
{<br>
&nbsp;&nbsp;&nbsp;
color: navy;<br>
}</div></div>

<p>then, assume that an internal style sheet also has the following style for the
&lt;h1&gt; element:</p>
<div class="w3-example">
<div class="w3-code notranslate cssHigh">
h1
{<br>
&nbsp;&nbsp;&nbsp; color: orange;&nbsp;&nbsp;&nbsp;
<br>}</div></div>

<p>If the internal style is defined after the link to the external style sheet, the &lt;h1&gt; elements will be
&quot;orange&quot;:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;head&gt;<br>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;mystyle.css&quot;&gt;<br>
&lt;style&gt;<br>h1 {<br>&nbsp;&nbsp;&nbsp; color: orange;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;</div>

</div>
<p>However, if the internal style is defined before the link to the external style sheet, the &lt;h1&gt; elements will be
&quot;navy&quot;:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh htmlHigh">
&lt;head&gt;<br>&lt;style&gt;<br>h1 {<br>&nbsp;&nbsp;&nbsp; color: orange;<br>}<br>&lt;/style&gt;<br>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;mystyle.css&quot;&gt;<br>
&lt;/head&gt;</div>

</div>
<hr>

<h2>Cascading Order</h2>
<p>What style will be used when there is more than one style specified for an HTML element?</p>
<p>Generally speaking we can say that all the styles will &quot;cascade&quot; into a new &quot;virtual&quot; style
sheet by the following rules, where number one has the highest priority:</p>
<ol>
  <li>Inline style (inside an HTML element)</li>
  <li>External and internal style sheets (in the head section)</li>
  <li>Browser default</li>
</ol>
<p>So, an inline style (inside a specific HTML element) has the highest priority, which means that it will override a style defined inside the &lt;head&gt; tag, or in
an external style sheet, or a browser default value.</p>
<hr>
</div>
<button type="button" class="button button1"><em><a href = "css4.php">Next</a></em></button>
<?php
  include_once 'footer.php';
 ?>
