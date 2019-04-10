<?php
   include('connections.php');
   session_start();

$user = $_POST['username'];
$pwd  = $_POST['password'];

$query = "SELECT * FROM users WHERE name='".$user."' AND pass='".$pwd."' ";

$rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
if($rs and pg_num_rows($rs)){
	while ($ro = pg_fetch_object($rs)) {

	$user = $ro->name;
	$pwd = $ro->pass;
	//$email = $ro->email;
	//$phoneNumber = $ro->phoneNumber;

	if ($user == $_POST['username'] && $pwd == $_POST['password']){
	   $_SESSION["username"] = $user;
	   $query = "update users set timein=NOW() WHERE name='".$user."' AND pass='".$pwd."' ";
	   $result = pg_query($connections, $query);
	   $_SESSION["name"] = $user;
	   $_SESSION["pass"] = $pwd;

	   //redirect to the respective pages
	   $query = "select course from users WHERE name='".$user."' AND pass='".$pwd."' ";
	   $rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
	   $ro = pg_fetch_object($rs);
	   $cour = $ro->course;

	   if($user=="admin"){
			header("Location:admin1.php");
			exit();
	   }

	   switch($cour){
			case ($cour == "HTML"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "CSS"):{
				header("Location:css1.php");
				exit();
			}
			case ($cour == "Javascript"):{
				header("Location:jscript.php");
				exit();
			}
			case ($cour == "Java"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "PHP"):{
				header("Location:php_sc.php");
				exit();
			}
			case ($cour == "SQL"):{
				header("Location:sql.php");
				exit();
			}
			case ($cour == "Python"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "C++"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "ML"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "DL"):{
				header("Location:first.php");
				exit();
			}
			case ($cour == "Bootstrap"):{
				header("Location:boot.php");
				exit();
			}
			case ($cour == "Basicprog"):{
				header("Location:first.php");
				exit();
			}
		}
		//Default
		header("Location:first.php");
		exit();

	   //$_SESSION["email"] = $email;
	   //$_SESSION["phoneNumber"] = $phoneNumber;
	}
	if ($user != $_POST['username']) {
	header("Location: login.html?error=Invalid%20Information!");

	}

	/*if ($user == "admin") {
		header("Location: profilepage2.php");

	}*/

	}
} else {
	header("Location: login.html?error=Invalid%20Information!");
}
pg_close($connections);
?>
