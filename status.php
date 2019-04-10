<?php
		session_start();
		if(isset($_SESSION['abc']))
		{
		//unset($_SESSION['username']);
		//$_SESSION['abc']='abc';
		}
		//$user=$_POST['username'];
		$user=$_SESSION['name'];
		//$pwd=$_POST['password'];
?>
<html>
<head>
<title>Profile of <?php echo $user;?></title>
</head>
<body>
<h1>Hello <?php echo $user;?></h1>

<h3><a href="logout.php">Click here to log out</a></h3>
</body>
</html>