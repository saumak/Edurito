<?php
include('connections.php');
session_start();
?>
<?php
	$tech=$_POST['tech'];
	$head=$_POST['head'];
	$content1=$_POST['content1'];
	$content2=$_POST['content2'];
	$content3=$_POST['content3'];
	$content4=$_POST['content4'];
	$content5=$_POST['content5'];
	$content6=$_POST['content6'];
	
	$query = "update pagecontent set head='".$head."', content1='".$content1."', content2='".$content2."', content3='".$content3."', content4='".$content4."', content5='".$content5."', content6='".$content6."' WHERE technology='".$tech."' ";
	$result = pg_query($connections, $query);
	echo $tech;

?>