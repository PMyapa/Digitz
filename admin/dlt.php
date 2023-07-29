<?php
	include ('../base/head.php');
	?>
	
<div style="background: linear-gradient(#17A589,#0E6251,#0E6251,#1A5276); height:180px; width:100%; box-shadow: 0 1px 10px 0 rgba(32,33,36,1); position:sticky;" class="utab", >
<div>
<div class="logo" style="margin:30px 30px 30px 120px; width:100px; float:left;">
<img src="../img/csp.png" height=100px>
</div>

</div>
</div>
<br/><br/>
<?php

	session_start();
	if(!isset($_SESSION["acn"])) 
		{
		header("Location:../error.html");
		exit;
	} else
	{
		echo "<font style='margin:50px;' color='gray'>Admin account:</font>".$_SESSION['acn']; 
		echo ("<br><a  style='text-decoration: none; color:red; margin:50px;' href='./logoff.php'>Log Out</a>") ;
	}

	
		$mess = "";
?>
<div style="height:100%;";>
	<center>
		
		<h2>Delete users</h2>
		
		<?php
			echo "$mess<br>";
		?>
		
	<?php

if(isset($_POST["yes"])) {
	
	if(isset($_GET["uname"])) {
	
		include("../dbcon/user.php");
		require_once("../dbcon/dbcon.php");
		
		
		$uname = $_GET["uname"];
		
		$query="DELETE FROM uinfo WHERE username = '$uname'";

		$result=mysqli_query($con,$query);
		if(!$result) {	
			print mysqli_error($con);
			exit();  
		}
		
		echo "<font color='blue'><b>Information has been deleted.</b></font>"; 
	echo "<br>";
	echo "<a href='./allua.php'>back</a>";
	
	exit;
	}
}

echo "<font>Delete user:   ".$_GET['uname']."??</font>
	";
	?>
	
	
	<script type="text/javascript">
		function dlt() {

			return confirm("Do you want to dlt?");
		}		
	</script>
	


	<form name="admin_edit" method="post" action="" onSubmit="dlt()">
	<input type="submit" name="yes" value="Delete">
	</form>
	
	<a href="./index.php"><button> Cancel</button></a>
	</center>
	<br/>
	
<?php
	include ('../base/footer.php');
?>