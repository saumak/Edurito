<?php
  include_once 'header.php';
?>

<head>
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
  text-align: justify;
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

  </style>
</head>
 <body>
   <div class = "content"><br>
     <h2>HTML Paragraphs</h2>
<p>The HTML <code class="w3-codespan">&lt;p&gt;</code> element defines a <strong>paragraph</strong>:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;p&gt;This is a paragraph.&lt;/p&gt;<br>
&lt;p&gt;This is another paragraph.&lt;/p&gt;
</div>

</div>
<div class="w3-panel w3-note">
  <p><strong>Note:</strong> Browsers automatically add some white space (a margin) before and after a paragraph.</p>
</div><hr>
<h2>HTML Display</h2>
<p>You cannot be sure how HTML will be displayed.</p>
<p>Large or small screens, and resized windows will create different results. </p>
<p>With HTML, you cannot change the output by adding extra spaces or extra lines in your HTML code.</p>
<p>The browser will remove any extra spaces and extra lines when the page is
displayed:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;p&gt;<br>This paragraph<br>contains a lot of lines<br>in the source code,<br>but
 the browser <br>ignores it.<br>&lt;/p&gt;<br><br>&lt;p&gt;<br>This paragraph<br>contains&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 a lot of spaces<br>in the source&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 code,<br>but the&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; browser <br>ignores
 it.<br>&lt;/p&gt;</div>
</div>
<div style="overflow:auto;text-align:center">
<!-- MidContent -->
  <div id='div-gpt-ad-1493883843099-0' style="display: inline-block">
    <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1493883843099-0'); });
    </script>
  </div>
</div>
<hr>
<h2>Don't Forget the End Tag</h2>
<p>Most browsers will display HTML correctly even if you forget the end tag:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;p&gt;This is a paragraph.<br>
&lt;p&gt;This is another paragraph.</div>
</div>
<p>The example above will work in most browsers, but do not rely on it.</p>
<div class="w3-panel w3-note">
  <p><strong>Note:</strong> Dropping the end tag can produce unexpected results or errors.</p>
</div>
<hr>
<h2>HTML Line Breaks</h2>
<p>The HTML <code class="w3-codespan">&lt;br&gt;</code> element defines a <strong>line break</strong>.</p>
<p>Use <code class="w3-codespan">&lt;br&gt;</code> if you want a line break (a new line) without starting a new paragraph:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;p&gt;This is&lt;br&gt;a paragraph&lt;br&gt;with line breaks.&lt;/p&gt;</div>

</div>
<p>The <code class="w3-codespan">&lt;br&gt;</code> tag is an empty tag, which means that it has no end tag.</p>
<h2>The Poem Problem</h2>
<p>This poem will display on a single line:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;p&gt;<br>&nbsp; My Bonnie lies over
 the ocean.<br><br>&nbsp; My Bonnie lies over the sea.<br><br>&nbsp; My Bonnie
 lies over the ocean.<br><br>&nbsp; Oh, bring back my Bonnie to me.<br>&lt;/p&gt;</div>
</div>
<hr>
<h2>The HTML &lt;pre&gt; Element</h2>
<p>The HTML <code class="w3-codespan">&lt;pre&gt;</code> element defines preformatted text.</p>
<p>The text inside a <code class="w3-codespan">&lt;pre&gt;</code> element is displayed in a fixed-width font (usually
Courier), and it preserves both spaces and line breaks:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;pre&gt;<br>&nbsp; My Bonnie lies over the ocean.<br>
<br>&nbsp; My Bonnie lies over the sea.<br><br>&nbsp; My Bonnie lies over the
ocean.<br><br>&nbsp; Oh, bring back my Bonnie to me.<br>&lt;/pre&gt;</div>
<hr>
</div>
</div>
<?php
  include_once 'footer.php';
 ?>
