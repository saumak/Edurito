<?php
include('connections.php');
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

  </style>
</head>
<body>
  <div class = "content">
    <!--<h2>HTML Documents</h2> -->
	<?php 
		$query = "select head from pagecontent WHERE technology='HTML'";
	    $rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
	    $ro = pg_fetch_object($rs);
	    $head = $ro->head;
	?><h2><?php echo $head; ?></h2>
  <p>All HTML documents must start with a document type declaration: <code class="w3-codespan">&lt;!DOCTYPE html&gt;</code>.</p>
  <p>The HTML document itself begins with <code class="w3-codespan">&lt;html&gt;</code> and ends with <code class="w3-codespan">&lt;/html&gt;</code>.</p>
  <p>The visible part of the HTML document is between <code class="w3-codespan">&lt;body&gt;</code> and <code class="w3-codespan">&lt;/body&gt;</code>. </p>
  <div class="w3-example">
  <h3>Example</h3>
  <div class="w3-code notranslate htmlHigh">
  &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>

  </div>
  <hr>

  <?php 
		$query = "select content1 from pagecontent WHERE technology='HTML'";
	    $rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
	    $ro = pg_fetch_object($rs);
	    $content1 = $ro->content1;
	?><h2><?php echo $content1; ?></h2>
  <p>HTML headings are defined with the <code class="w3-codespan">&lt;h1&gt;</code> to <code class="w3-codespan">&lt;h6&gt;</code> tags.</p>
  <p><code class="w3-codespan">&lt;h1&gt;</code> defines the most important heading. <code class="w3-codespan">&lt;h6&gt;</code> defines the least important
  heading:&nbsp;</p>
  <div class="w3-example">
  <h3>Example</h3>
  <div class="w3-code notranslate htmlHigh">
  &lt;h1&gt;This is heading 1&lt;/h1&gt;<br>
  &lt;h2&gt;This is heading 2&lt;/h2&gt;<br>
  &lt;h3&gt;This is heading 3&lt;/h3&gt;
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
  <?php 
		$query = "select content2 from pagecontent WHERE technology='HTML'";
	    $rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
	    $ro = pg_fetch_object($rs);
	    $content2 = $ro->content2;
	?><h2><?php echo $content2; ?></h2>
  <p>HTML paragraphs are defined with the <code class="w3-codespan">&lt;p&gt;</code> tag:</p>
  <div class="w3-example">
  <h3>Example</h3>
  <div class="w3-code notranslate htmlHigh">
  &lt;p&gt;This is a paragraph.&lt;/p&gt;<br>
  &lt;p&gt;This is another paragraph.&lt;/p&gt;
  </div>
  </div>
  <hr>

  <?php 
		$query = "select content3 from pagecontent WHERE technology='HTML'";
	    $rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
	    $ro = pg_fetch_object($rs);
	    $content3 = $ro->content3;
	?><h2><?php echo $content3; ?></h2>
  <p>HTML links are defined with the <code class="w3-codespan">&lt;a&gt;</code> tag:</p>
  <div class="w3-example">
  <h3>Example</h3>
  <div class="w3-code notranslate htmlHigh">
  &lt;a href=&quot;https://www.w3schools.com&quot;&gt;This is a link&lt;/a&gt;
  </div>

  </div>
  <p>The link's destination is specified in the <code class="w3-codespan">href</code> attribute.&nbsp;</p>
  <p>Attributes are used to provide additional information about HTML elements.</p>
  <p>You will learn more about attributes in a later chapter.</p>
  <hr>

  <?php 
		$query = "select content4 from pagecontent WHERE technology='HTML'";
	    $rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
	    $ro = pg_fetch_object($rs);
	    $content4 = $ro->content4;
	?><h2><?php echo $content4; ?></h2>
  <p>HTML images are defined with the <code class="w3-codespan">&lt;img&gt;</code> tag.</p>
  <p>The source file (<code class="w3-codespan">src</code>), alternative text (<code class="w3-codespan">alt</code>),
  <code class="w3-codespan">width</code>, and <code class="w3-codespan">height</code> are provided as attributes:</p>
  <div class="w3-example">
  <h3>Example</h3>
  <div class="w3-code notranslate htmlHigh">
  &lt;img src=&quot;w3schools.jpg&quot; alt=&quot;W3Schools.com&quot; width=&quot;104&quot; height=&quot;142&quot;&gt;
  </div>

  </div>
  <hr>

  <?php 
		$query = "select content5 from pagecontent WHERE technology='HTML'";
	    $rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
	    $ro = pg_fetch_object($rs);
	    $content5 = $ro->content5;
	?><h2><?php echo $content5; ?></h2>
  <p>HTML buttons are defined with the <code class="w3-codespan">&lt;button&gt;</code> tag:</p>
  <div class="w3-example">
  <h3>Example</h3>
  <div class="w3-code notranslate htmlHigh">
    &lt;button&gt;Click me&lt;/button&gt;</div>

  </div>
  <hr>

  <?php 
		$query = "select content6 from pagecontent WHERE technology='HTML'";
	    $rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
	    $ro = pg_fetch_object($rs);
	    $content6 = $ro->content6;
	?><h2><?php echo $content6; ?></h2>
  <p>HTML lists are defined with the <code class="w3-codespan">&lt;ul&gt;</code> (unordered/bullet list) or the <code class="w3-codespan">&lt;ol&gt;</code> (ordered/numbered list) tag, followed by <code class="w3-codespan">&lt;li&gt;</code>
  tags (list items):</p>
  <div class="w3-example">
  <h3>Example</h3>
  <div class="w3-code notranslate htmlHigh">
    &lt;ul&gt;<br>&nbsp; &lt;li&gt;Coffee&lt;/li&gt;<br>&nbsp; &lt;li&gt;Tea&lt;/li&gt;<br>&nbsp; &lt;li&gt;Milk&lt;/li&gt;<br>
    &lt;/ul&gt;
  </div>

  </div>

</div>
<button type="button" class="button button1"><em><a href = "scnd.php">Next</a></em></button>
<footer>
    <div class="container">
        <ul class="socials">
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-tumblr"></a></li>
            <li><a href="#" class="fa fa-google-plus"></a></li>
        </ul>
        <div class="copyright">&copy; <span id="copyright-year"></span> |
            <a href="#">Privacy Policy</a>
        </div>
    </div>
</footer>
</div>

<script src="js/script.js"></script>
</body>
</html>
