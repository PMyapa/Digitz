<?php
	session_start();
	if(!isset($_SESSION["username"])) 
		{
		include ('../base/nlogged.php');
	} else
		{
		include ('../base/logged.php');
	}
	

?>