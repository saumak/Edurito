<?php
include('connections.php');
session_start();
?>
<?php
	$editname=$_POST['name'];
	
	$query = "delete from users WHERE name='".$editname."' ";	
	$result = pg_query($connections, $query);
	
	$_SESSION['userdeleted'] = $editname;
	
	header("Location:admin1.php");

?>