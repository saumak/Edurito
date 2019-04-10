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
  .test{
    width : 1115px;
  }
  button{
    float: right;
    height: 40px;
    width: 80px;
  }
  .cssHigh{
    text-align: left;
  }
  table.grid {
    width:100%;
    border:none;
    background-color:#f1f1f1;
    padding:0px;
}
table.grid tr {
    text-align:center;
}
table.grid td {
    border:4px solid white;
    padding:10px;
}
.test [class*="col-"] {
  padding: 15px;
  background-color: #f1f1f1;
  border: 1px solid #D8D8D8;
}


  </style>
</head>
<body>
  <div class = "content"><br>
    <h2>Bootstrap Grid System</h2>
    <p>Bootstrap's grid system allows up to 12 columns across the page.</p>
    <p>If you do not want to use all 12 columns individually, you can group the
    columns together to create wider columns:</p>
    <div class="table-responsive">
    <table class="table grid">
    <tr>
      <td>span 1</td>
      <td>span 1</td>
      <td>span 1</td>
      <td>span 1</td>
      <td>span 1</td>
      <td>span 1</td>
      <td>span 1</td>
      <td>span 1</td>
      <td>span 1</td>
      <td>span 1</td>
      <td>span 1</td>
      <td>span 1</td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;span 4</td>
      <td colspan="4">&nbsp;span 4</td>
      <td colspan="4">&nbsp;span 4</td>
    </tr>
    <tr>
      <td colspan="4">span 4</td>
      <td colspan="8">span 8</td>
    </tr>
    <tr>
      <td colspan="6">span 6</td>
      <td colspan="6">span 6</td>
    </tr>
    <tr>
      <td colspan="12">span 12</td>
    </tr>
    </table>
    </div>
    <p>Bootstrap's grid system is responsive, and the columns will re-arrange automatically depending on the screen size.</p>
    <hr>

    <h2>Grid Classes</h2>
    <p>The Bootstrap grid system has four classes:</p>
    <ul>
      <li><code class="w3-codespan">xs</code> (for phones - screens less than 768px wide)</li>
      <li><code class="w3-codespan">sm</code> (for tablets - screens equal to or greater than 768px wide)</li>
      <li><code class="w3-codespan">md</code> (for small laptops - screens equal to or greater than 992px wide)</li>
      <li><code class="w3-codespan">lg</code> (for laptops and desktops - screens equal to or greater than 1200px wide)</li>
    </ul>
    <p>The classes above can be combined to create more dynamic and flexible layouts.</p>
    <hr>

    <h2>Basic Structure of a Bootstrap Grid</h2>
    <p>The following is a basic structure of a Bootstrap grid:</p>
    <div class="w3-example">
     <div class="w3-code notranslate htmlHigh">
      &lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col-*-*&quot;&gt;&lt;/div&gt;<br>&nbsp;
       &lt;div class=&quot;col-*-*&quot;&gt;&lt;/div&gt;<br>&lt;/div&gt;<br>&lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col-*-*&quot;&gt;&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col-*-*&quot;&gt;&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col-*-*&quot;&gt;&lt;/div&gt;<br>&lt;/div&gt;<br>&lt;div class=&quot;row&quot;&gt;<br>&nbsp; ...<br>&lt;/div&gt;</div>
    </div>
    <p>First; create a row (<code class="w3-codespan">&lt;div
    class="row"&gt;</code>). Then, add the desired number of columns (tags with appropriate
    <code class="w3-codespan">.col-*-*</code> classes). Note that numbers in <code class="w3-codespan">.col-*-*</code> should always add up to 12 for each row.</p>
    <p>Below we have collected some examples of basic Bootstrap grid layouts.</p>
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

    <h2>Three Equal Columns</h2>
    <div class="container-fluid" style="margin:50px auto;">
    <div class="row test">
      <div class="col-sm-4">.col-sm-4</div>
      <div class="col-sm-4">.col-sm-4</div>
      <div class="col-sm-4">.col-sm-4</div>
    </div>
    </div>
    <p>The following example shows how to get a three equal-width columns starting at tablets and scaling to large desktops.
    On mobile phones <span lang="no-bok">or screens that are less than 768px wide,
    </span>the columns will automatically stack:</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
     &lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;.col-sm-4&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;.col-sm-4&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;.col-sm-4&lt;/div&gt;<br>&lt;/div&gt;</div>
    <a target="_blank" href="tryit.asp?filename=trybs_grid_ex1&stacked=h" class="w3-btn w3-margin-bottom">Try it Yourself &raquo;</a>
    </div>
    <hr>

    <h2>Two Unequal Columns</h2>
    <div class="container-fluid" style="margin:8px 0 15px 0;">
    <div class="row test">
      <div class="col-sm-4">.col-sm-4</div>
      <div class="col-sm-8">.col-sm-8</div>
    </div>
    </div>
    <p>The following example shows how to get two various-width columns starting at
    tablets and scaling to large desktops:</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
     &lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col-sm-4&quot;&gt;.col-sm-4&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;col-sm-8&quot;&gt;.col-sm-8&lt;/div&gt;<br>&lt;/div&gt;</div>
    <a target="_blank" href="tryit.asp?filename=trybs_grid_ex3&stacked=h" class="w3-btn w3-margin-bottom">Try it Yourself &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
    <p><strong>Tip:</strong> You will learn more about Bootstrap grids later in this tutorial.</p>
    </div>


  <?php
    include_once 'footer.php';
  ?>
