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

    <h2>What is Bootstrap?</h2>
<ul>
  <li>Bootstrap is a free front-end framework for faster and easier web development</li>
  <li>Bootstrap includes HTML and CSS based design templates for typography, forms, buttons, tables, navigation, modals, image carousels and many other, as well as optional JavaScript plugins</li>
  <li>Bootstrap also gives you the ability to easily create responsive designs</li>
</ul>
<div class="w3-panel w3-note">
<p><b>What is Responsive Web Design?</b><br><br>
Responsive web design is about creating web sites which automatically adjust
themselves to look good on all devices, from small phones to large desktops.</p>
</div>
<hr>

<h2>Bootstrap History</h2>
<p>Bootstrap was developed by Mark Otto and Jacob Thornton at Twitter, and released as an open source product in August 2011 on GitHub.</p>
<p><strong>In June 2014 Bootstrap was the No.1 project on GitHub!</strong></p>
<hr>

<h2>Why Use Bootstrap?</h2>
<p>Advantages of Bootstrap:</p>
<ul>
  <li><strong>Easy to use:</strong> Anybody with just basic knowledge of HTML and CSS can start using Bootstrap</li>
  <li><strong>Responsive features:</strong> Bootstrap's responsive CSS adjusts to phones, tablets, and desktops</li>
  <li><strong>Mobile-first approach:</strong> In Bootstrap 3, mobile-first styles are part of the core framework</li>
  <li><strong>Browser compatibility:</strong> Bootstrap is compatible with all modern browsers (Chrome, Firefox, Internet Explorer, Safari, and Opera)</li>
</ul>
<hr>

<h2>Where to Get Bootstrap?</h2>
<p>There are two ways to start using Bootstrap on your own web site.</p>
<p>You can:</p>
<ul>
  <li>Download Bootstrap from getbootstrap.com</li>
  <li>Include Bootstrap from a CDN</li>
</ul>
<hr>

<h2>Bootstrap CDN</h2>
<p>If you don't want to download and host Bootstrap yourself, you can include it from a CDN (Content Delivery Network).</p>
<p>MaxCDN provides CDN support for Bootstrap's CSS and JavaScript. You must also include jQuery:</p>
<div class="w3-example">
<h3>MaxCDN:</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;!-- Latest compiled and minified CSS --&gt;<br>&lt;link rel=&quot;stylesheet&quot; href=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css&quot;&gt;<br>
 <br>&lt;!-- jQuery library --&gt;<br>&lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt;<br>
 <br>&lt;!-- Latest compiled JavaScript --&gt;<br>&lt;script src=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js&quot;&gt;&lt;/script&gt;</div>
</div>

<div class="w3-panel w3-note">
<p><b>One advantage of using the Bootstrap CDN:</b><br>
Many users already have downloaded
Bootstrap from MaxCDN when visiting
another site. As a result, it will be loaded from cache when they visit your site, which leads to faster loading time.
Also, most CDN's will make sure that once a user requests a file from it, it will be served
from the server closest to them, which also leads to faster loading time.</p>
<p><strong>jQuery</strong><br>Bootstrap uses jQuery for JavaScript plugins (like modals, tooltips, etc). However, if you just use the
CSS part of Bootstrap, you don't need jQuery.</p>
</div>

<hr>

<h2>Create First Web Page With Bootstrap</h2>
<p><strong>1. Add the HTML5 doctype</strong></p>
<p>Bootstrap uses HTML elements and CSS properties that require
the HTML5 doctype.</p>
<p>Always include the HTML5 doctype at the beginning of
the page, along with the lang attribute and the correct character set:</p>
<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
&lt;!DOCTYPE html&gt;<br>&lt;html lang=&quot;en&quot;&gt;<br>&nbsp; &lt;head&gt;<br>&nbsp;&nbsp;&nbsp; &lt;meta charset=&quot;utf-8&quot;&gt; <br>&nbsp; &lt;/head&gt;<br>&lt;/html&gt;</div>
</div>

<p><strong>2. Bootstrap 3 is mobile-first</strong></p>
<p>Bootstrap 3 is designed to be responsive to mobile devices. Mobile-first styles are
part of the core framework.</p>
<p>To ensure proper rendering and touch zooming, add the following <code class="w3-codespan">&lt;meta&gt;</code> tag inside the
<code class="w3-codespan">&lt;head&gt;</code> element:</p>
<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;</div>
</div>

<p>The <code class="w3-codespan">width=device-width</code> part sets the width of the page to follow the screen-width
of the device (which will vary depending on the device).</p>
<p>The <code class="w3-codespan">initial-scale=1</code> part sets the initial zoom level when the page is first loaded
by the browser.</p>
<p><strong>3. Containers</strong></p>
<p>Bootstrap also requires a containing element to wrap site contents. </p>
<p>There are two container classes to choose from:</p>
<ol>
  <li>The <code class="w3-codespan">.container</code> class provides a responsive <strong>fixed width container</strong></li>
  <li>The <code class="w3-codespan">.container-fluid</code> class provides a <strong>full width container</strong>, spanning the entire width of the viewport</li>
</ol>

<div class="w3-row-padding" style="margin:16px -16px 0 -16px">
  <div class="w3-half">
    <div class="w3-padding w3-padding-16" style="border:4px solid #f1f1f1">
      <div style="height:100px;width:80%;margin:auto;background:#d9d9d9" class="w3-display-container"><span class="w3-display-middle">.container</span></div>
    </div>
  </div>
  <div class="w3-half">
    <div class="w3-padding-16" style="border:4px solid #f1f1f1">
      <div style="height:100px;width:100%;background:#d9d9d9" class="w3-center w3-display-container"><span class="w3-display-middle">.container-fluid</span></div>
    </div>
  </div>
</div>

<hr>
<h2>Two Basic Bootstrap Pages</h2>
<p>The following example shows the code for a basic Bootstrap page (with a responsive fixed width container):</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;!DOCTYPE html&gt;<br>&lt;html lang=&quot;en&quot;&gt;<br>&lt;head&gt;<br>&nbsp; &lt;title&gt;Bootstrap Example&lt;/title&gt;<br>&nbsp; &lt;meta charset=&quot;utf-8&quot;&gt;<br>&nbsp; &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;<br>&nbsp; &lt;link rel=&quot;stylesheet&quot; href=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css&quot;&gt;<br>
 &nbsp;
 &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt;<br>
 &nbsp;
 &lt;script src=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js&quot;&gt;&lt;/script&gt;<br>
 &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class=&quot;container&quot;&gt;<br>&nbsp; &lt;h1&gt;My First Bootstrap Page&lt;/h1&gt;<br>&nbsp; &lt;p&gt;This is some text.&lt;/p&gt; <br>&lt;/div&gt;<br>
 <br>&lt;/body&gt;<br>&lt;/html&gt;</div>

</div>

<p>The following example shows the code for a basic Bootstrap page (with a full width container):</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;!DOCTYPE html&gt;<br>&lt;html lang=&quot;en&quot;&gt;<br>&lt;head&gt;<br>&nbsp; &lt;title&gt;Bootstrap Example&lt;/title&gt;<br>&nbsp; &lt;meta charset=&quot;utf-8&quot;&gt;<br>&nbsp; &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;<br>&nbsp; &lt;link rel=&quot;stylesheet&quot; href=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css&quot;&gt;<br>
 &nbsp; &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt;<br>
 &nbsp;
 &lt;script src=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js&quot;&gt;&lt;/script&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class=&quot;container-fluid&quot;&gt;<br>&nbsp; &lt;h1&gt;My First Bootstrap Page&lt;/h1&gt;<br>&nbsp; &lt;p&gt;This is some text.&lt;/p&gt; <br>&lt;/div&gt;<br>
 <br>&lt;/body&gt;<br>&lt;/html&gt;</div>

</div>

</div>
<button type="button" class="button button1"><em><a href = "boot2.php">Next</a></em></button>
  <?php
    include_once 'footer.php';
  ?>
