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
  .htmlHigh{
    text-align: left;
  }

  </style>
</head>
<body>
  <div class = "content"><br>
    <h2>The &lt;script&gt; Tag</h2>
    <p>In HTML, JavaScript code must be inserted between &lt;script&gt; and &lt;/script&gt; tags.</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
    &lt;script&gt;<br>
    document.getElementById(&quot;demo&quot;).innerHTML = &quot;My First JavaScript&quot;;<br>
    &lt;/script&gt;
    </div>
    <p>

    </p>
    </div>

    <div class="w3-panel w3-note">
    <p>Old JavaScript examples may use a type attribute: &lt;script type=&quot;text/javascript&quot;&gt;.<br>
    The type attribute is not required. JavaScript is the default scripting language in HTML.</p>
    </div>

    <hr>
    <h2>JavaScript Functions and Events</h2>
    <p>A JavaScript <strong>function</strong> is a block of JavaScript code, that can be executed when &quot;called&quot; for.</p>
    <p>For example, a function can be called when an <b>event</b> occurs, like when the user clicks a button.</p>
    <div class="w3-panel w3-note">
    <p>You will learn much more about functions and events in later chapters.</p>
    </div>
    <hr>

    <h2>JavaScript in &lt;head&gt; or &lt;body&gt;</h2>
    <p>You can place any number of scripts in an HTML document.</p>
    <p>Scripts can be placed in the &lt;body&gt;, or in the &lt;head&gt; section of an HTML page, or in both.</p>

    <hr>
    <h2>JavaScript in &lt;head&gt;</h2>
    <p>In this example, a JavaScript function is placed in the &lt;head&gt; section
    of an HTML page.</p>
    <p>The function is invoked (called) when a button is clicked:</p>

    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
    &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<p>&lt;head&gt;<br>
    &lt;script&gt;<br>
    function myFunction() {<br>
    &nbsp;&nbsp;&nbsp;
    document.getElementById(&quot;demo&quot;).innerHTML = &quot;Paragraph changed.&quot;;<br>
    }<br>
    &lt;/script&gt;<br>
    &lt;/head&gt;</p>
     <p>&lt;body&gt;</p>
    <p>&lt;h1&gt;A Web Page&lt;/h1&gt;<br>&lt;p id=&quot;demo&quot;&gt;A Paragraph&lt;/p&gt;<br>&lt;button type=&quot;button&quot; onclick=&quot;myFunction()&quot;&gt;Try
    it&lt;/button&gt;</p>
    <p>&lt;/body&gt;<br>
    &lt;/html&gt;
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

    <h2>JavaScript in &lt;body&gt;</h2>
    <p>In this example, a JavaScript function is placed in the &lt;body&gt; section of an HTML page.</p>
    <p>The function is invoked (called) when a button is clicked:</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
    &lt;!DOCTYPE html&gt;<br>
    &lt;html&gt;<br>
    &lt;body&gt;
    <br><br>&lt;h1&gt;A Web Page&lt;/h1&gt;<br>
      &lt;p id=&quot;demo&quot;&gt;A Paragraph&lt;/p&gt;<br>
      &lt;button type=&quot;button&quot; onclick=&quot;myFunction()&quot;&gt;Try
    it&lt;/button&gt;<br>
     <br>&lt;script&gt;<br>
    function myFunction() {<br>
    &nbsp;&nbsp;&nbsp;document.getElementById(&quot;demo&quot;).innerHTML = &quot;Paragraph changed.&quot;;<br>
    }<br>
    &lt;/script&gt;<br>
     <br>&lt;/body&gt;<br>
    &lt;/html&gt;
    </div>

    </div>

    <div class="w3-panel w3-note">
    <p>Placing scripts at the bottom of the &lt;body&gt; element improves the display
    speed, because script compilation slows down the display.</p>
    </div>

    <hr>
    <h2>External JavaScript</h2>
    <p>Scripts can also be placed in external files:</p>
    <div class="w3-example">
    <h3>External file: myScript.js</h3>
    <div class="w3-code notranslate jsHigh">
    function myFunction() {<br>
    &nbsp;&nbsp;&nbsp;document.getElementById(&quot;demo&quot;).innerHTML = &quot;Paragraph changed.&quot;;<br>
    }
    </div>
    </div>

    <p>External scripts are practical when the same code is used in many different web pages. </p>
    <p>JavaScript files have the file extension<strong> .js</strong>.</p>
    <p>To use an external script, put the name of the script file in the src (source) attribute of
    a &lt;script&gt; tag:</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
    &lt;script src=&quot;myScript.js&quot;&gt;&lt;/script&gt;</div>

    </div>

    <p>You can place an external script reference in &lt;head&gt; or &lt;body&gt; as you like.</p>
    <p>The script will behave as if it was located exactly where the &lt;script&gt; tag is located.</p>

    <div class="w3-panel w3-note">
    <p>External scripts cannot contain &lt;script&gt; tags.</p>
    </div>

    <hr>
    <h2>External JavaScript Advantages</h2>
    <p>Placing scripts in external files has some advantages:</p>
    <ul>
     <li>It separates HTML and code</li>
     <li>It makes HTML and JavaScript easier to read and maintain</li>
     <li>Cached JavaScript files can speed up page loads</li>
    </ul>
    <p>To add several script files to one page&nbsp; - use several script tags:</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
    &lt;script src=&quot;myScript1.js&quot;&gt;&lt;/script&gt;<br>
    &lt;script src=&quot;myScript2.js&quot;&gt;&lt;/script&gt;
    </div>
    </div>


    <hr>
    <h2>External References</h2>
    <p>External scripts can be referenced with a full URL or with a path relative to the current web
    page.</p>
    <p>This example uses a full URL to link to a script: </p>

    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
    &lt;script src=&quot;https://www.w3schools.com/js/myScript1.js&quot;&gt;&lt;/script&gt;
    </div>

    </div>

    <p>This example uses a script located in a specified folder on the current web
    site:</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
    &lt;script src=&quot;/js/myScript1.js&quot;&gt;&lt;/script&gt;
    </div>

    </div>

    <p>This example links to a script located in the same folder as the current page:</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
    &lt;script src=&quot;myScript1.js&quot;&gt;&lt;/script&gt;
    </div>

    </div>


</div>

<?php
  include_once 'footer.php';
 ?>
