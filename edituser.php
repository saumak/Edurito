<?php
include('connections.php');
session_start();
?>
<?php
	$editname=$_POST['name'];
	$editemail=$_POST['email'];
	$editphone=$_POST['phonenumber'];
	$editcourse=$_POST['course'];
	
	$query = "update users set email='".$editemail."', phonenumber='".$editphone."', course='".$editcourse."' WHERE name='".$editname."' ";	
	$result = pg_query($connections, $query);
	
	$_SESSION['useredited'] = $editname;
	
	header("Location:admin1.php");

?>