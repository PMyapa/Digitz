<?php
	session_start();
	
	if(isset($_SESSION["acn"]))  {
		unset($_SESSION["acn"]);
	}
	
	header("Location:./index.php");
	exit;
?>

