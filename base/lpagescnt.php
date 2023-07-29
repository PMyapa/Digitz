<?php
	session_start();
	if(!isset($_SESSION["username"])) 
		{
		header("Location:../error.php");
		exit;
	} else if(($_SESSION["cnt"]==0))
		{
		header("Location:../error.php");
		exit;
	}else
		include ('../base/logged.php');
?>