<?php
	/*connect to mysql database */	
	$con=mysqli_connect($host,$dbuser,$dbpassword) or die("Can't connect to server");
	mysqli_select_db($con,$dbase) or die("can't connect to database");	
	
?>