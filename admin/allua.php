

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
		
		<h2>View of User Information</h2>
		
		<?php
			echo "$mess<br>";
		?>

<?php
	/*Connect to MySQL database*/
	include("../dbcon/user.php");
	require_once("../dbcon/dbcon.php");


	/*Execute SQL command*/
	$query = "SELECT regno,fname, lname, gen, bday, email, phone, cont, username FROM
				uinfo";
	$result=mysqli_query($con,$query);	
	
	
	/* Output results as HTML table */
	echo "<table border=1 style='background-color:#c8d3e8; border-radius:10px; border:solid;' width=90%>\n";

	/* Output field names as table header */
	echo "<caption><font >User Information</font></caption>
		<tr>
		<th width='1%'>Index</th>
		<th width='2.4%'>Name</th>
		<th width='1.2%'>Gender</th>
		<th width='2.4%'>Date Of Birth</th>
		<th width='3%'>email address</th>
		<th width='1%'>role</th>
		<th width='1%'>Edit</th>
		<th width='1%'>Delete</th>
		
		</tr>";
	
	
	/* Output all records */
	while($myrow=mysqli_fetch_row($result) )  {
		echo "<tr>";
		$cont1=$myrow[7];
		$indexnum=$myrow[0];
		$tfname=$myrow[1];
		$tlname=$myrow[2];
	echo "<td width='1%' align='center'>", "000",$indexnum;
	echo "<td width='2.4%' >", $tfname,"  ",$tlname;
	
		for($f=3;$f<mysqli_num_fields($result)-3;$f++)  {
			echo "<td>&nbsp;".htmlspecialchars($myrow[$f]);
			
			
			
			
		}
		
	
	if($cont1=='0') {
		echo "<td width='1%' align='center'>", 'customer';
	} else {
		echo "<td width='1%' align='center'>", 'contributor';
	}
	
	echo "<td><a href='./emyp.php?uname=".urlencode($myrow[8])."'><img height=20px src='../img/editb.png'></a></td>";
	echo "<td><a href='./dlt.php?uname=".urlencode($myrow[8])."'><img height=20px src='../img/dlb.png'></a></td>";
	
	

	

		
	
	}
	echo "</table>\n";

	
?>
		<br/><br/><br/>
		<div class="regw" style="background-color:#FFEEFF; border-radius:10px; padding:5px; width:100px;">
		<a href="./newacc.php">Add new admin Account</a>
		</div>
		
	</center>
</div>
<?php
	include ('../base/footer.php');
?>

