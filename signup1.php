<?php
include('connections.php');

?>
<?php

// Inserting a new row
if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	//define the query
	//$query = "INSERT INTO erudito(username, password) VALUES('$username','$password')";
	//$query = "INSERT INTO users(name, pass) VALUES('$username','$password')";
	//$result = pg_query($connections, $query);
	$result=true;
	
	// if there was some sort of a query execution problem
	if(!$result) {
		header("Location: sign_up.php?error=Insert%20Error!");
	}
	// Insert was successful
	else {
		session_start();
		$_SESSION["abc"] = $_POST['username'];
		echo "<h1>Hello  $username</h1>";
		header("Location: status.php?success=you%20are%20successfully%20signed%20up!");
	}
}
else { // they left a box empty
	header("Location: sign_up.php?error=Fields%20required!");
}
?>