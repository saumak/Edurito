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
    <h2>Color Names</h2>
<p>In HTML, a color can be specified by using a color name:</p>

<div class="w3-row w3-center" style="margin:0 -16px;line-height:80px;color:white;">
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:tomato;">Tomato</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:orange;">Orange</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:dodgerblue;">DodgerBlue</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:mediumseagreen;">MediumSeaGreen</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:gray;">Gray</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:slateblue;">SlateBlue</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:violet;">Violet</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:lightgray;color:#444444">LightGray</div>
  </div>
</div>
<p>HTML supports <a href="/colors/colors_names.asp">140 standard color names</a>.</p>
<hr>

<h2>Background Color</h2>
<p>You can set the background color for HTML elements:</p>

<div style="background-color:dodgerblue; text-align:center;color:white;font-size:24px;">Hello World</div>
<br>
<div class="w3-container" style="background-color:tomato;color:white;"><br>
  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
  Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br><br>
</div>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
  &lt;h1 style=&quot;background-color:DodgerBlue;&quot;&gt;Hello World&lt;/h1&gt;<br>&lt;p style=&quot;background-color:Tomato;&quot;&gt;Lorem
  ipsum...&lt;/p&gt;</div>
<br>

</div>

<hr>
<h2>Text Color</h2>
<p>You can set the color of text:</p>
<h3 style="color:tomato">Hello World</h3>
<p style="color:dodgerblue">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
<p style="color:mediumseagreen">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

<div class="w3-example">
 <h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
  &lt;h1 style=&quot;color:Tomato;&quot;&gt;Hello
  World&lt;/h1&gt;<br>&lt;p style=&quot;color:DodgerBlue;&quot;&gt;Lorem
  ipsum...&lt;/p&gt;<br>&lt;p style=&quot;color:MediumSeaGreen;&quot;&gt;Ut wisi
  enim...&lt;/p&gt;</div>

</div>

<hr>
<h2>Border Color</h2>
<p>You can set the color of borders:</p>
<h2 style="border: 2px solid Tomato;">Hello World</h2>
<h2 style="border: 2px solid DodgerBlue;">Hello World</h2>
<h2 style="border: 2px solid Violet;">Hello World</h2>

<div class="w3-example">
 <h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
  &lt;h1 style=&quot;border:2px
  solid Tomato;&quot;&gt;Hello
  World&lt;/h1&gt;<br>&lt;h1 style=&quot;border:2px
  solid DodgerBlue;&quot;&gt;Hello
  World&lt;/h1&gt;<br>&lt;h1 style=&quot;border:2px
  solid Violet;&quot;&gt;Hello
  World&lt;/h1&gt;</div>

</div>

<hr>
<h2>Color Values</h2>
<p>In HTML, colors can also be specified using RGB values, HEX values, HSL
values, RGBA values, and HSLA values:</p>
<p>Same as color name "Tomato":</p>

<div class="w3-center" style="line-height:60px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
  <div style="background-color:rgb(255, 99, 71);margin:10px 0;">rgb(255, 99, 71)</div>
  <div style="background-color:#ff6347;margin:10px 0;">#ff6347</div>
  <div style="background-color:hsl(9, 100%, 64%);margin:10px 0;">hsl(9, 100%, 64%)</div>
</div>
<p>Same as color name "Tomato", but 50% transparent:</p>
<div class="w3-center" style="line-height:60px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
  <div style="background-color:rgba(255, 99, 71, 0.5);margin:10px 0;">rgba(255, 99, 71, 0.5)</div>
  <div style="background-color:hsla(9, 100%, 64%, 0.5);margin:10px 0;">hsla(9, 100%, 64%, 0.5)</div>
</div>

<div class="w3-example">
 <h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
  &lt;h1 style=&quot;background-color:rgb(255,
  99, 71);&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:#ff6347;&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:hsl(9,
  100%, 64%);&quot;&gt;...&lt;/h1&gt;<br><br>&lt;h1 style=&quot;background-color:rgba(255,
  99, 71, 0.5);&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:hsla(9,
  100%, 64%, 0.5);&quot;&gt;...&lt;/h1&gt;</div>

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

<h2>RGB Value</h2>
<p>In HTML, a color can be specified as an RGB value, using this formula:</p>
<p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">rgb(<em>red,</em> <em>green</em>, <em>blue</em>)</p>
<p>Each parameter (red, green, and
blue) defines the intensity of the color between 0 and 255.</p>
<p>For example, rgb(255, 0, 0) is displayed as red,
because red is set to its highest value (255) and the others are
set to 0.</p>
<p>To display the color black, all color parameters must be set to 0, like this:
rgb(0, 0, 0).</p>
<p>To display the color white, all color parameters must be set to 255, like
this: rgb(255, 255, 255). </p>
<p>Experiment by mixing the RGB values below:</p>

<div class="w3-container xw3-light-grey">
  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-container w3-center">
    </div>
    <div class="w3-col m8 w3-container w3-center">
      <div id="rgbresult" style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace;line-height:80px;"><p id="rgbresulttext" style="">&nbsp;</p></div>
    </div>
    <div class="w3-col m2 w3-container w3-center">
    </div>
  </div>
  <div class="w3-row w3-container">
    <div class="w3-col m4 w3-container w3-center">
      <p>RED</p>
      <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideRed" name="slideRed" value="255" min="0" max="255">
      <div id="valRed2" xstyle="background-color:red;border-radius:5px;color:white;opacity:0.8">255</div>
    </div>
    <div class="w3-col m4 w3-container w3-center">
      <p>GREEN</p>
      <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideGreen" name="slideGreen" value="99" min="0" max="255">
      <div id="valGreen2" xstyle="background-color:#00ff00;border-radius:5px;opacity:0.8">0</div>
    </div>
    <div class="w3-col m4 w3-container w3-center">
      <p>BLUE</p>
      <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideBlue" name="slideBlue" value="71" min="0" max="255">
      <div id="valBlue2" xstyle="background-color:blue;border-radius:5px;color:white;opacity:0.8">0</div>
    </div>
  </div>
</div>

<div class="w3-example">
 <h3>Example</h3>
<div class="notranslate w3-white w3-container">
<div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(255, 0, 0);">rgb(255, 0, 0)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(0, 0, 255);">rgb(0, 0, 255)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(60, 179, 113);">rgb(60, 179, 113)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(238, 130, 238);">rgb(238, 130, 238)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(255, 165, 0);">rgb(255, 165, 0)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(106, 90, 205);">rgb(106, 90, 205)</div>
  </div>
</div>
</div>
<br>

</div>


<p>Shades of gray are often defined using equal values for all the 3 light sources:</p>
<div class="w3-example">
 <h3>Example</h3>
<div class="notranslate w3-white w3-container">
<div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(0, 0, 0);">rgb(0, 0, 0)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(60, 60, 60);">rgb(60, 60, 60)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(120, 120, 120);">rgb(120, 120, 120)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(180, 180, 180);">rgb(180, 180, 180)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(240, 240, 240);color:#555555">rgb(240, 240, 240)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgb(255, 255, 255);color:#555555">rgb(255, 255, 255)</div>
  </div>
</div>
</div>
<br>

</div>

<hr>
<h2>HEX Value</h2>
<p>In HTML, a color can be specified using a hexadecimal value in
the form:</p>
<p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">#<em>rrggbb</em></p>
<p>Where rr (red), gg (green) and bb (blue) are hexadecimal values between 00 and ff (same as decimal 0-255).</p>
<p>For example, #ff0000 is displayed as red, because red is set to its highest value (ff) and the others are set to
the lowest value (00).</p>

<div class="w3-example">
 <h3>Example</h3>
<div class="notranslate w3-white w3-container">

<div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#ff0000;">#ff0000</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#0000ff;">#0000ff</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#3cb371;">#3cb371</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#ee82ee;">#ee82ee</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#ffa500;">#ffa500</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#6a5acd;">#6a5acd</div>
  </div>
</div>
</div>
<br>

</div>


<p>Shades of gray are often defined using equal values for all the 3 light sources:</p>
<div class="w3-example">
 <h3>Example</h3>
<div class="notranslate w3-white w3-container">

<div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#000000;">#000000</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#3c3c3c;">#3c3c3c</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#787878;">#787878</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#b4b4b4;">#b4b4b4</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#f0f0f0;color:#555555">#f0f0f0</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:#ffffff;color:#555555">#ffffff</div>
  </div>
</div>
</div>
<br>

</div>

<hr>

<h2>HSL Value</h2>
<p>In HTML, a color can be specified using hue, saturation, and lightness (HSL) in
the form:</p>
<p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">hsl(<em>hue</em>, <em>saturation</em>, <em>lightness</em>)</p>
<p>Hue is a degree on the color wheel from 0 to 360. 0 is red, 120 is green, and 240 is blue.</p>
<p>Saturation is a percentage value, 0% means a shade of gray, and 100% is the full color.</p>
<p>Lightness is also a percentage, 0% is black, 50% is neither light or dark, 100% is white</p>

<div class="w3-example">
 <h3>Example</h3>
<div class="notranslate w3-white w3-container">

<div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(240, 100%, 50%)">hsl(240, 100%, 50%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(147, 50%, 47%);">hsl(147, 50%, 47%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(300, 76%, 72%);">hsl(300, 76%, 72%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(39, 100%, 50%);">hsl(39, 100%, 50%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(248, 53%, 58%);">hsl(248, 53%, 58%)</div>
  </div>
</div>
</div>
<br>

</div>
<hr>
<h3>Saturation</h3>
<p>Saturation can be describe as the intensity of a color.</p>
<p>100% is pure color, no shades of gray</p>
<p>50% is 50% gray, but you can still see the color.</p>
<p>0% is completely gray, you can no longer see the color.</p>

<div class="w3-example">
 <h3>Example</h3>
<div class="notranslate w3-white w3-container">

<div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 80%, 50%)">hsl(0, 80%, 50%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 60%, 50%);">hsl(0, 60%, 50%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 40%, 50%);">hsl(0, 40%, 50%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 20%, 50%);">hsl(0, 20%, 50%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 0%, 50%);">hsl(0, 0%, 50%)</div>
  </div>
</div>
</div>
<br>

</div>
<hr>

<h3>Lightness</h3>
<p>The lightness of a color can be described as how much light you want to give the color, where 0% means no light (black), 50% means 50% light (neither dark nor light) 100% means full lightness (white).</p>

<div class="w3-example">
 <h3>Example</h3>
<div class="notranslate w3-white w3-container">
<div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 100%, 0%);">hsl(0, 100%, 0%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 100%, 25%)">hsl(0, 100%, 25%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 100%, 75%);">hsl(0, 100%, 75%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 100%, 90%);color:#555555">hsl(0, 100%, 90%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 100%, 100%);color:#555555;">hsl(0, 100%, 100%)</div>
  </div>
</div>
</div>
<br>

</div>
<hr>

<p>Shades of gray are often defined by setting the hue and saturation to 0, and
adjust the lightness from 0% to 100% to get darker/lighter shades:</p>
<div class="w3-example">
 <h3>Example</h3>
<div class="notranslate w3-white w3-container">
<div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 0%, 0%);">hsl(0, 0%, 0%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 0%, 24%)">hsl(0, 0%, 24%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 0%, 47%);">hsl(0, 0%, 47%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 0%, 71%);">hsl(0, 0%, 71%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 0%, 94%);color:#555555">hsl(0, 0%, 94%)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsl(0, 0%, 100%);color:#555555;">hsl(0, 0%, 100%)</div>
  </div>
</div>
</div>
<br>

</div>

<hr>
<h2>RGBA Value</h2>
<p>RGBA color values are an extension of RGB color values with an alpha channel
- which specifies the opacity for a color.</p>
<p>An RGBA color value is
specified with:</p>
<p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">rgba(<em>red,</em> <em>green</em>, <em>blue,
alpha</em>)</p>
<p>The alpha parameter is a number
between 0.0 (fully transparent) and 1.0 (not transparent at all):</p>
  <div class="w3-example">
    <h3>Example</h3>
<div class="notranslate w3-white">
<div class="w3-row w3-center" >
    <div class="w3-col m6 w3-padding">
    <div style="background-color:rgba(255, 99, 71, 0);color:#555555;">rgba(255, 99, 71, 0)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgba(255, 99, 71, 0.2);color:#555555;">rgba(255, 99, 71, 0.2)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgba(255, 99, 71, 0.4);">rgba(255, 99, 71, 0.4)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgba(255, 99, 71, 0.6);">rgba(255, 99, 71, 0.6)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgba(255, 99, 71, 0.8);">rgba(255, 99, 71, 0.8)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:rgba(255, 99, 71, 1);">rgba(255, 99, 71, 1)</div>
  </div>
</div>
</div>
<br>

</div>

<hr>
<h2>HSLA Value</h2>
<p>HSLA color values are an extension of HSL color values with an alpha channel
- which specifies the opacity for a color.</p>
<p>An HSLA color value is
specified with:</p>
<p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">hsla(<em>hue,</em> <em>saturation</em>, <em>lightness,
alpha</em>)</p>
<p>The alpha parameter is a number
between 0.0 (fully transparent) and 1.0 (not transparent at all):</p>

<div class="w3-example">
 <h3>Example</h3>
<div class="notranslate w3-white">
<div class="w3-row w3-center"
  style="
    line-height:80px;
    color:white;
    font-size:20px;
    font-weight:bold;
    font-family:Consolas, 'Courier New', Courier, monospace;
    background-image:url(img_bg_eyeicon.png), url(img_bg_transparent.gif);
    background-repeat:no-repeat, repeat;
    background-position:center, top left;
    background-color:#ffffff;">
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsla(9, 100%, 64%, 0);color:#555555;">hsla(9, 100%, 64%, 0)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsla(9, 100%, 64%, 0.2);color:#555555;">hsla(9, 100%, 64%, 0.2)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsla(9, 100%, 64%, 0.4);">hsla(9, 100%, 64%, 0.4)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsla(9, 100%, 64%, 0.6);">hsla(9, 100%, 64%, 0.6)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsla(9, 100%, 64%, 0.8);">hsla(9, 100%, 64%, 0.8)</div>
  </div>
  <div class="w3-col m6 w3-padding">
    <div style="background-color:hsla(9, 100%, 64%, 1);">hsla(9, 100%, 64%, 1)</div>
  </div>
</div>
</div>
<br>

</div>
</div>
<?php
  include_once 'footer.php';
 ?>
