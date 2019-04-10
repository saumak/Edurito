<?php
		include('connections.php');
		session_start();
		$query = "update users set timeout=NOW() WHERE name='".$_SESSION['abc']."'";
		$result = pg_query($connections, $query);
		$user=$_SESSION['abc'];
		/*if(isset($_SESSION['username']))
		{
		unset($_SESSION['username']);
		}*/
		$_SESSION["covered"] = 35;
?>
<html>
<head>
<title>Profile of <?php echo $user;?></title>
</head>
<h1>Hello <?php echo $user;?></h1>

<h3><a href="chart.php">Click here to log out</a></h3>
</html>