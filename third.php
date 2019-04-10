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
   <div class = "content">
   <h2>HTML Attributes</h2>
<ul>
  <li>All HTML elements can have <b>attributes</b></li>
  <li>Attributes provide <b>additional information</b> about an element</li>
  <li>Attributes are always specified in <b>the start tag</b></li>
  <li>Attributes usually come in name/value pairs like: <b>name=&quot;value&quot;</b></li>
</ul>
<hr>
<h2>The href Attribute</h2>
<p>HTML links are defined with the <code class="w3-codespan">&lt;a&gt;</code> tag. The link address is specified in the <code class="w3-codespan">href</code> attribute:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;a href=&quot;https://www.w3schools.com&quot;&gt;This is a link&lt;/a&gt;
</div>

</div>
<p>You will learn more about links and the <code class="w3-codespan">&lt;a&gt;</code> tag later in this tutorial.</p>
<hr>
<h2>The src Attribute</h2>
<p>HTML images are defined with the <code class="w3-codespan">&lt;img&gt;</code> tag.</p>
<p>The filename of the image source is specified in the <code class="w3-codespan">src</code> attribute:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;img src=&quot;img_girl.jpg&quot;&gt;
</div>

</div>
<hr>
<h2>The width and height Attributes</h2>
<p>Images in HTML have a set of <strong>size</strong> attributes, which specifies the width and
height of the image:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;img src=&quot;img_girl.jpg&quot; width=&quot;500&quot; height=&quot;600&quot;&gt;
</div>

</div>
<p>The image size is specified in pixels: width=&quot;500&quot; means 500 pixels wide.</p>
<p>You will learn more about images in our <a href="html_images.asp">HTML Images
chapter</a>.</p>
<hr>

<h2>The alt Attribute</h2>
<p>The <code class="w3-codespan">alt</code> attribute specifies an alternative text to be used, when an
image cannot be displayed.</p>
<p>The value of the attribute can be read by screen readers. This way, someone &quot;listening&quot;
to the webpage, e.g. a blind person, can &quot;hear&quot; the element.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;img src=&quot;img_girl.jpg&quot; alt=&quot;Girl
  with a jacket&quot;&gt;
</div>

</div>

<div class="w3-panel w3-note">
  <p>The <code class="w3-codespan">alt</code> attribute is also useful if the image does not exist:</p>
</div>
<div class="w3-example">
<h3>Example</h3>
<p>See what happens if we try to display an image that does not exist:</p>
<div class="w3-code notranslate htmlHigh">
 &lt;img src=&quot;img_typo.jpg&quot; alt=&quot;Girl
  with a jacket&quot;&gt;
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

<h2>The style Attribute</h2>
<p>The <code class="w3-codespan">style</code> attribute is used to specify the styling of an element, like color,
font, size etc.</p>
<div class="w3-example">
<h3>Example</h3>
  <div class="w3-code notranslate htmlHigh">
&lt;p style=&quot;color:red&quot;&gt;I am a paragraph&lt;/p&gt;
  </div>

</div>
<div class="w3-note w3-panel">
<p>You will learn more about styling later in this tutorial, and in our
<a href="/css/default.asp">CSS Tutorial</a>.</p>
</div>
<hr>

<h2>The lang Attribute</h2>
<p>The language of the document can be declared in the <code class="w3-codespan">&lt;html&gt;</code> tag.</p>
<p>The language is declared with the <code class="w3-codespan">lang</code> attribute.</p>
<p>Declaring a language is important for accessibility applications (screen readers) and search engines:</p>
<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
&lt;!DOCTYPE html&gt;<br>&lt;html lang=&quot;en-US&quot;&gt;<br>&lt;body&gt;<br><br>
 ...<br><br>&lt;/body&gt;<br>&lt;/html&gt;
</div>
</div>
<p>The first two letters specify the language (en). If there is a dialect, use two more letters (US).</p>
<hr>

<h2>The title Attribute</h2>
<p>Here, a <code class="w3-codespan">title</code> attribute is added to the <code class="w3-codespan">&lt;p&gt;</code>
element.
The value of the title attribute will be displayed as a tooltip when
you mouse over the paragraph:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;p title="I'm a tooltip"&gt;<br>This is a paragraph.<br>&lt;/p&gt;
</div>

</div>
<hr>

<h2>We Suggest: Use Lowercase Attributes</h2>
<p>The HTML5 standard does not require lowercase attribute names.</p>
<p>The title attribute can be written with uppercase or lowercase
like <strong>title</strong> or <strong>TITLE</strong>.</p>
<p>W3C <strong>recommends</strong> lowercase in HTML, and <strong>demands</strong>
lowercase for stricter document types like XHTML.</p>
<div class="w3-panel w3-note">
  <p>At W3Schools we always use lowercase attribute names.</p>
</div>
<hr>

<h2>We Suggest: Quote Attribute Values</h2>
<p>The HTML5 standard does not require quotes around attribute values.</p>
<p>The <code class="w3-codespan">href</code> attribute, demonstrated above, <em>can</em> be written without quotes:</p>

<div class="w3-row-padding" style="margin:-8px -16px">

<div class="w3-half">
<div class="w3-example">
<h3>Bad</h3>
<div class="w3-code notranslate htmlHigh" style="border-color:red;white-space: nowrap;overflow: auto">
 &lt;a
href=https://www.w3schools.com&gt;</div>

</div>

</div>
<div class="w3-half">
<div class="w3-example">
<h3>Good</h3>
<div class="w3-code notranslate htmlHigh" style="white-space: nowrap;overflow: auto;">
  &lt;a href="https://www.w3schools.com"&gt;</div>

</div>

</div>

</div>
<p>W3C <b>recommends</b> quotes in HTML, and <strong>demands</strong> quotes for stricter document types like XHTML.</p>
<p>Sometimes it is <strong>necessary</strong> to use quotes. This example will not display
the title attribute correctly, because it contains a space:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;p
 title=About W3Schools&gt;</div>

</div>
<div class="w3-panel w3-note">
  <p>Using quotes are the most common. Omitting quotes can produce errors.
<br>At W3Schools we <strong>always</strong> use quotes around attribute values.</p>
</div>
<hr>

<h2>Single or Double Quotes?</h2>
<p>Double quotes around attribute values are the most common in HTML, but single
quotes can also be used.</p>
<p>In some situations, when the attribute value itself contains double quotes, it is necessary to use single quotes:</p>
<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
&lt;p title='John &quot;ShotGun&quot; Nelson'&gt;
</div>
</div>

<p>Or vice versa:</p>

<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
&lt;p title=&quot;John 'ShotGun' Nelson&quot;&gt;</div>

</div>
<hr>

<h2>Chapter Summary</h2>
<ul>
  <li>All HTML elements can have <strong>attributes</strong></li>
  <li>The <code class="w3-codespan">title</code> attribute provides additional &quot;tool-tip&quot;  information</li>
  <li>The <code class="w3-codespan">href</code> attribute provides address information for links</li>
  <li>The <code class="w3-codespan">width</code> and <code class="w3-codespan">height</code> attributes provide size information for images</li>
  <li>The <code class="w3-codespan">alt</code> attribute provides text for screen readers</li>
  <li>At W3Schools we always use <strong>lowercase</strong> attribute names</li>
  <li>At W3Schools we always <strong>quote</strong> attribute values with double quotes</li>
</ul>
<hr>
</div>
<button type="button" class="button button1"><em><a href = "fourth.php">Next</a></em></button>
<?php
include_once 'footer.php';
 ?>
