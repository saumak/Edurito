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


<h2>What is SQL?</h2>
<ul>
  <li>SQL stands for Structured Query Language</li>
  <li>SQL lets you access and manipulate databases</li>
  <li>SQL became a standard of the American National Standards Institute (ANSI)
  in 1986, and of the International Organization for Standardization (ISO) in
  1987</li>
</ul>
<hr>
<h2>What Can SQL do?</h2>
<ul>
  <li> SQL can execute queries against a database</li>
  <li>SQL can retrieve data from a database</li>
  <li>SQL can insert records in a database</li>
  <li>SQL can update records in a database</li>
  <li>SQL can delete records from a database</li>
  <li>SQL can create new databases</li>
  <li>SQL can create new tables in a database</li>
  <li>SQL can create stored procedures in a database</li>
  <li>SQL can create views in a database</li>
  <li>SQL can set permissions on tables, procedures, and views</li>
</ul>
<hr>
<h2>SQL is a Standard - BUT....</h2>
<p>Although SQL is an ANSI/ISO standard, there are different versions of the SQL language.</p>
<p>However, to be compliant with the ANSI standard, they all support at least the major commands (such as SELECT, UPDATE, DELETE, INSERT, WHERE) in a similar manner.</p>

<div class="w3-panel w3-note">
<p><b>Note:</b> Most of the SQL database programs also have their own proprietary extensions in addition to the SQL standard!</p>
</div>
<hr>

<h2>Using SQL in Your Web Site</h2>
<p>To build a web site that shows data from a database, you will need:</p>
<ul>
  <li>An RDBMS database program (i.e. MS Access, SQL Server, MySQL)</li>
  <li>To use a server-side scripting language, like PHP or ASP</li>
  <li>To use SQL to get the data you want</li>
  <li>To use HTML / CSS to style the page</li>
</ul>
<hr>
<h2>RDBMS</h2>
<p>RDBMS stands for Relational Database Management System.</p>
<p>RDBMS is the basis for SQL, and for all modern database systems such as MS SQL Server, IBM DB2, Oracle, MySQL, and Microsoft Access.</p>
<p>The data in RDBMS is stored in database objects called tables. A table is a collection of related data entries and it consists of columns and rows.</p>
<p>Look at the &quot;Customers&quot; table:</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate sqlHigh">
SELECT * FROM Customers;
</div>

</div>

<p>Every table is broken up into smaller entities called fields. The fields in
the Customers table consist of CustomerID, CustomerName, ContactName, Address,
City, PostalCode and Country. A field is a column in a table that is designed to maintain
specific information about every record in the table.</p>
<p>A record, also called a row, is each individual entry that exists in a table.
For example, there are 91 records in the above Customers table. A record is a
horizontal entity in a table.</p>
<p>A column is a vertical entity in a table that contains all information
associated with a specific field in a table.</p>

</div>
<button type="button" class="button button1"><em><a href = "sql1.php">Next</a></em></button>
<?php
include_once 'footer.php'
?>
