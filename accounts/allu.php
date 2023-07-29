

<?php
	include ('../base/head.php');
	include ('../base/lpages.php');


	
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
	} else
		echo "<td width='1%' align='center'>", 'contributor';
	

	

		
	
	}
	echo "</table>\n";

	
?>
		
	</center>
</div>
<?php
	include ('../base/footer.php');
?>

