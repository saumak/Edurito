<?php
include('connections.php');
session_start();
?>

<?php
		$user = $_SESSION['name'];
		//$user ="admin";
		$pwd = $_SESSION['pass'];
		//$pwd ="admin";
		//$query = "update users set timeout=NOW() WHERE name='".$user."' AND pass='".$pwd."' ";
		
		$query = "select extract(days from (NOW()-timein)) as days from users WHERE name='$user' and pass='$pwd'";
		//echo $user;
		//echo $pwd;
		$result= pg_query($connections, $query) or die("Cannot execute query: $query\n");
		$row = pg_fetch_row($result);
		$days=$row[0];
		$query= "select extract(hour from (NOW()-timein)) as days from users WHERE name='$user' and pass='$pwd'";
		$result= pg_query($connections, $query) or die("Cannot execute query: $query\n");
		$row = pg_fetch_row($result);
		$hours=$row[0];
		$query= "select extract(minute from (NOW()-timein)) as days from users WHERE name='$user' and pass='$pwd'";
		$result= pg_query($connections, $query) or die("Cannot execute query: $query\n");
		$row = pg_fetch_row($result);
		$min=$row[0];
		$tottime = $days * 24 + $hours + $min/60;
		/*echo "<br>";
		echo $tottime;
		echo "<br>";*/
		////
		/*$query= "select totaltime+$tottime from users WHERE name='".$user."' AND pass='".$pwd."' "; 
		$result= pg_query($connections, $query) or die("Cannot execute query: $query\n");
		$row = pg_fetch_row($result);
		$min=$row[0];
		echo $min;*/
		////
		if($tottime==0){
			$query = "update users set timeout=NOW() WHERE name='".$user."' AND pass='".$pwd."' "; 
		}
		else $query = "update users set totaltime=totaltime+$tottime WHERE name='".$user."' AND pass='".$pwd."' "; 
	    $result = pg_query($connections, $query);
	   
		if(isset($_SESSION['name']))
		{
		unset($_SESSION['name']);
		}
		if(isset($_SESSION['pass']))
		{
		unset($_SESSION['pass']);
		}
		if(isset($_SESSION['email']))
		{
		unset($_SESSION['email']);
		}
		if(isset($_SESSION['phone']))
		{
		unset($_SESSION['phone']);
		}
		// Finally, destroy the session
		session_destroy();
		//echo '<h1>You have been successfully logout</h1>';
		header("Location: index.php");
?>