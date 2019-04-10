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
    <h2>HTML Elements</h2>
    <p>An HTML element usually consists of a <strong>start</strong> tag and <strong>end</strong> tag,
    with the content inserted in between:</p>
    <div class="htmlHigh" style="font-size:20px;padding:10px;margin-bottom:10px;">
    &lt;tagname&gt;Content goes here...&lt;/tagname&gt;
    </div>

    <p>The HTML <strong>element</strong> is everything from the start tag to the end tag:</p>
    <div class="htmlHigh" style="font-size:20px;padding:10px;margin-bottom:10px;">
    &lt;p&gt;My first paragraph.&lt;/p&gt;
    </div>

    <table class="w3-table-all notranslate">
    <tr>
    <th style="width:33%">Start tag</th>
    <th style="width:33%">Element content</th>
    <th>End tag</th>
    </tr>
    <tr>
    <td>&lt;h1&gt;</td>
    <td>My First Heading</td>
    <td>&lt;/h1&gt;</td>
    </tr>
    <tr>
    <td>&lt;p&gt;</td>
    <td>My first paragraph.</td>
    <td>&lt;/p&gt;</td>
    </tr>
    <tr>
    <td>&lt;br&gt;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    </table>

    <div class="w3-panel w3-note">
    <p>HTML elements with no content are called empty elements. Empty elements do not have an end tag, such as the &lt;br&gt;
      element (which indicates a line break).</p>
    </div>
    <hr>

    <h2>Nested HTML Elements</h2>
    <p>HTML elements can be nested (elements can contain elements).</p>
    <p>All HTML documents consist of nested HTML elements.</p>
    <p>This example contains four HTML elements:</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
    &lt;!DOCTYPE html&gt;<br>
    &lt;html&gt;<br>&lt;body&gt;<br><br>
     &lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>
    &lt;/body&gt;<br>&lt;/html&gt;
    </div>

    </div>
    <h3>Example Explained</h3>
    <p>The <code class="w3-codespan">&lt;html&gt;</code> element defines the <strong>whole document</strong>.</p>
    <p>It has a <strong>start</strong> tag &lt;html&gt; and an <strong>end</strong> tag &lt;/html&gt;.</p>
    <p>The element <strong>content</strong> is another HTML element (the <code class="w3-codespan">&lt;body&gt;</code> element).</p>
    <div class="w3-example">
    <div class="w3-code notranslate htmlHigh">
    &lt;html&gt;<br>
    &lt;body&gt;<br><br>
     &lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>
    &lt;/body&gt;<br>
    &lt;/html&gt;
    </div></div>

    <p>The <code class="w3-codespan">&lt;body&gt;</code> element defines the <strong>document body</strong>.</p>
    <p>It has a <strong>start</strong> tag &lt;body&gt; and an <strong>end</strong> tag &lt;/body&gt;.</p>
    <p>The element <strong>content</strong> is two other HTML elements (<code class="w3-codespan">&lt;h1&gt;</code> and <code class="w3-codespan">
    &lt;p&gt;</code>).</p>
    <div class="w3-example">
    <div class="w3-code notranslate htmlHigh">
    &lt;body&gt;<br><br>
     &lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>
    &lt;/body&gt;
    </div></div>

    <p>The <code class="w3-codespan">&lt;h1&gt;</code> element defines a <strong>heading</strong>.</p>
    <p>It has a <strong>start</strong> tag &lt;h1&gt; and an
    <strong>end</strong> tag &lt;/h1&gt;.</p>
    <p>The element <strong>content</strong> is: My First Heading.</p>

    <div class="w3-example">
    <div class="w3-code notranslate htmlHigh">
    &lt;h1&gt;My First Heading&lt;/h1&gt;
    </div>
    </div>

    <p>The <code class="w3-codespan">&lt;p&gt;</code> element defines a <strong>paragraph</strong>.</p>
    <p>It has a <strong>start</strong> tag &lt;p&gt; and an
    <strong>end</strong> tag &lt;/p&gt;.</p>
    <p>The element <strong>content</strong> is: My first paragraph.</p>

    <div class="w3-example">
    <div class="w3-code notranslate htmlHigh">
    &lt;p&gt;My first paragraph.&lt;/p&gt;
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
    <h2>Do Not Forget the End Tag</h2>
    <p>Some HTML elements will display correctly, even if you forget the end tag:</p>
    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
    &lt;html&gt;<br>&lt;body&gt;<br><br>
     &lt;p&gt;This is a paragraph<br>
     &lt;p&gt;This is a paragraph<br>
    <br>&lt;/body&gt;<br>&lt;/html&gt;</div>

    </div>

    <p>The example above works in all browsers, because the closing tag is considered optional. </p>
    <p><strong>Never rely on this. It might produce unexpected results and/or errors if you forget the end tag.</strong></p>
    <hr>

    <h2>Empty HTML Elements</h2>
    <p>HTML elements with no content are called empty elements.</p>
    <p><code class="w3-codespan">&lt;br&gt;</code> is an empty element without a closing tag (the <code class="w3-codespan">&lt;br&gt;</code> tag defines a line break).</p>
    <p>Empty elements can be &quot;closed&quot; in the opening tag like this: &lt;br /&gt;.</p>
    <p>HTML5 does not require empty elements to be closed. But if you want stricter
    validation, or if you need to make your document readable by XML parsers, you
    must close all HTML elements properly.</p>
    <hr>

    <h2>Use Lowercase Tags</h2>
    <p>HTML tags are not case sensitive: &lt;P&gt; means the same as &lt;p&gt;.</p>
    <p>The HTML5 standard does not require lowercase tags, but W3C
    <b>recommends</b> lowercase in HTML, and <b>demands</b> lowercase for stricter document types like XHTML.</p>

    <div class="w3-panel w3-note">
      <p>At W3Schools we always use lowercase tags.</p>
    </div>

</div>
<button type="button" class="button button1"><em><a href = "third.php">Next</a></em></button>
<?php
include_once 'footer.php';
 ?>
