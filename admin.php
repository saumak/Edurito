<?php
include('connections.php');
session_start();
if (isset($_GET['course'])){
	if($_GET['course']!=''){
		$_SESSION['course'] = $_GET['course'];
	}
}
if(isset($_SESSION['name'])){
	//header("Location: login.html?error=Session%20exists!");
	//redirect to the respective pages
	   $user=$_SESSION['name'];
	   $query = "select course from users WHERE name='".$user."'";
	   $rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
	   $ro = pg_fetch_object($rs);
	   $cour = $ro->course;
	   echo $cour;
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
}
?>