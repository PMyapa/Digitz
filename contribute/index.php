
<?php
	include ('../base/head.php');
	include ('../base/lpagescnt.php');
?>


<div style="margin:10px 10px 10px 10px; font-family: arial,sans-serif;";>
	<center>
		<br>
		<br>
		<h1 style="color:purple;"  >Contribute</h1>
		<img src="../img/cs2.png" height=200px></img>
		<br><br>
		
	</center>
</div>


<?php
include("../dbcon/user.php");
require_once("../dbcon/dbcon.php");


	$query = "SELECT * FROM
				serv";
	$result=mysqli_query($con,$query);	
	
	
	/* Output results as HTML table */
	echo "<table border=1 style='background-color:#c8d3e8; border-radius:10px; border:solid;' width=90%>\n";

	/* Output field names as table header */
	echo "<caption><font >User Information</font></caption>
		<tr>
		<th width='2%'>Service Number</th>
		<th width='2%'>User</th>
		<th width='2%'>Email</th>
		<th width='2%'>Phone</th>
		<th width='2%'>Service</th>
		<th width='2%'>End date</th>
		
		</tr>";
	
	
	/* Output all records */
	while($myrow=mysqli_fetch_row($result) )  {
		echo "<tr>";
	
		for($f=0;$f<mysqli_num_fields($result);$f++)  {
			echo "<td>&nbsp;".htmlspecialchars($myrow[$f]);
			
			
			
			
		}
		
	
		
	
	}
	echo "</table>\n";

?>

<br>

<?php
	include ('../base/footer.php');
?>
