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
  .sqlHigh{
    text-align: left;
  }

  </style>
</head>
<body>
  <div class = "content"><br>
    <h2>Database Tables</h2>
<p>A database most often contains one or more tables. Each table is identified
by a name (e.g. "Customers" or "Orders"). Tables contain records (rows) with
data.</p>
<p>In this tutorial we will use the well-known Northwind sample database
(included in MS Access and MS SQL Server).</p>
<p>Below is a selection from the "Customers" table:</p>
<div class="w3-responsive">
<table class="w3-table-all notranslate">
  <tr>
    <th>CustomerID</th>
    <th>CustomerName</th>
    <th>ContactName</th>
    <th>Address</th>
    <th>City</th>
    <th>PostalCode</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>1<br><br></td>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Obere Str. 57</td>
    <td>Berlin</td>
    <td>12209</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Ana Trujillo Emparedados y helados</td>
    <td>Ana Trujillo</td>
    <td>Avda. de la Constitución 2222</td>
    <td>México D.F.</td>
    <td>05021</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Antonio Moreno Taquería</td>
    <td>Antonio Moreno</td>
    <td>Mataderos 2312</td>
    <td>México D.F.</td>
    <td>05023</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>4<br><br></td>
    <td>Around the Horn</td>
    <td>Thomas Hardy</td>
    <td>120 Hanover Sq.</td>
    <td>London</td>
    <td>WA1 1DP</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Berglunds snabbköp</td>
    <td>Christina Berglund</td>
    <td>Berguvsvägen 8</td>
    <td>Luleå</td>
    <td>S-958 22</td>
    <td>Sweden</td>
  </tr>
</table>
</div>
<p>
The table above contains five records (one for each customer) and seven columns
(CustomerID, CustomerName, ContactName, Address, City, PostalCode, and Country).</p>
<hr>

<h2>SQL Statements</h2>
<p>Most of the actions you need to perform on a database are done with SQL
statements.</p>
<p>The following SQL statement selects all the records in the "Customers" table:</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate sqlHigh">
 SELECT * FROM Customers;
</div>
</div>


<p>In this tutorial we will teach you all about the different SQL statements.</p>
<hr>
<div style="overflow:auto;text-align:center">
<!-- MidContent -->
  <div id="snhb-mid_content-0"></div>
</div>
<hr>
<h2>Keep in Mind That...</h2>
<ul>
  <li>SQL keywords are NOT case sensitive: select is the same as SELECT</li>
</ul>


<p>In this tutorial we will write all SQL keywords in upper-case.</p>
<hr>

<h2>Semicolon after SQL Statements?</h2>
<p>Some database systems require a semicolon at the end of each SQL statement.</p>
<p>Semicolon is the standard way to separate each SQL statement in database
systems that allow more than one SQL statement to be executed in the same call
to the server.</p>
<p>In this tutorial, we will use semicolon at the end of each SQL statement.</p>
<hr>

<h2>Some of The Most Important SQL Commands</h2>
<ul>
  <li><b>SELECT</b> - extracts data from a database</li>
  <li><b>UPDATE</b> - updates data in a database</li>
  <li><b>DELETE</b> - deletes data from a database</li>
  <li><b>INSERT INTO</b> - inserts new data into a database</li>
  <li><b>CREATE DATABASE</b> - creates a new database</li>
  <li><b>ALTER DATABASE</b> - modifies a database</li>
  <li><b>CREATE TABLE</b> - creates a new table</li>
  <li><b>ALTER TABLE</b> - modifies a table</li>
  <li><b>DROP TABLE</b> - deletes a table</li>
  <li><b>CREATE INDEX</b> - creates an index (search key)</li>
  <li><b>DROP INDEX</b> - deletes an index
  </li>
</ul>


</div>

<?php
include_once 'footer.php'
?>
