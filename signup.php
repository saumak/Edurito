<?php
include('connections.php');
session_start();
?>
<?php

// Inserting a new row
if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirmPassword']) && $_POST['password'] == $_POST['confirmPassword']) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phone'];
	$totaltimes=$_POST['totaltime'];
	$totaltime=(int) preg_replace('/\D/', '', $totaltimes);
	//define the query
	if($_SESSION['course']!=''){
		$course=$_SESSION['course'];
		$query = "INSERT INTO users(name, pass,email,phonenumber,timein,totaltimeprovidedbyuser,course,totaltime) VALUES('$username','$password','$email','$phonenumber',NOW(),'$totaltime','$course',0)";
} 	else
	$query = "INSERT INTO users(name, pass,email,phonenumber,timein,totaltimeprovidedbyuser,totaltime) VALUES('$username','$password','$email','$phonenumber',NOW(),'$totaltime',0)";
	$result = pg_query($connections, $query);

	// if there was some sort of a query execution problem
	if(!$result) {
		header("Location: sign_up.php?error=Insert%20Error!");
	}
	// Insert was successful
	else {
		$_SESSION["name"] = $_POST['username'];
		$_SESSION["pass"] = $_POST['password'];
		$_SESSION["email"] = $_POST['email'];
		$_SESSION["phone"] = $_POST['phone'];
		header("Location: sign_up.php?success=You%20are%20successfully%20signed%20up!");
	}
}
else { // they left a box empty
	header("Location: sign_up.php?error=Fields%20required!");
}
?>
