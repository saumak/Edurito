<?php
include('connections.php');
session_start();

$hint = "";

$edituser=$_REQUEST["q"];
if($edituser!==""){
	$query = "select name,email,phonenumber,course from users WHERE name='".$edituser."'";
	   $rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
	   $ro = pg_fetch_object($rs);
	   $e_name = $ro->name;
	   $e_email= $ro->email;
	   $e_phonenumber=$ro->phonenumber;
	   $e_course=$ro->course;
	   $hint ="User name is ".$e_name.", email is ".$e_email.", Phone number is ".$e_phonenumber.", and course is ".$e_course;
}
// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>