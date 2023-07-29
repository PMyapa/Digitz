
<?php
	include ('../base/head.php');
	include ('../base/lpages.php');
	
			$mess = "";
		$username=$_SESSION['username'];
	
	
	require_once("../dbcon/user.php");
	include("../dbcon/dbcon.php");	
	
	
		$query = "SELECT regno,fname, lname, gen, bday, email, phone, cont, username FROM
				uinfo WHERE username='$username'";
	$result=mysqli_query($con,$query);	
	$myrow1=mysqli_fetch_row($result);
	$user=$myrow1[8];	
	$email=$myrow1[5];
	$phone=$myrow1[6];

		
				if(isset($_POST["submitwd"])) {
					
					$enddwd=$_POST["enddwd"];
					$service="Web designing";
					
					
					$query = "INSERT INTO serv(user, email, phone, service, date) VALUES('$user', '$email', '$phone', '$service', '$enddwd')";
					$result = mysqli_query($con,$query);
					if(!$result) {
								$error = mysqli_error($con);
								print $error;
								exit;
								}
								else{
								$mess = "<font color='blue'>Request sent</font>";
								}
					}
	

				if(isset($_POST["submitgd"])) {
					
					$enddwd=$_POST["enddgd"];
					$service="Graphic designing";
					
					
					$query = "INSERT INTO serv(user, email, phone, service, date) VALUES('$user', '$email', '$phone', '$service', '$enddwd')";
					$result = mysqli_query($con,$query);
					if(!$result) {
								$error = mysqli_error($con);
								print $error;
								exit;
								}
								else{
								$mess = "<font color='blue'>Request sent</font>";
								}
					}
	
	
				if(isset($_POST["submitld"])) {
					
					$enddwd=$_POST["enddld"];
					$service="Logo designing";
					
					
					$query = "INSERT INTO serv(user, email, phone, service, date) VALUES('$user', '$email', '$phone', '$service', '$enddwd')";
					$result = mysqli_query($con,$query);
					if(!$result) {
								$error = mysqli_error($con);
								print $error;
								exit;
								}
								else{
								$mess = "<font color='blue'>Request sent</font>";
								}
					}
	
	
				if(isset($_POST["submitsm"])) {
					
					$enddwd=$_POST["enddsm"];
					$service="Social Media Marketing";
					
					
					$query = "INSERT INTO serv(user, email, phone, service, date) VALUES('$user', '$email', '$phone', '$service', '$enddwd')";
					$result = mysqli_query($con,$query);
					if(!$result) {
								$error = mysqli_error($con);
								print $error;
								exit;
								}
								else{
								$mess = "<font color='blue'>Request sent</font>";
								}
					}


				if(isset($_POST["submitpg"])) {
					
					$enddwd=$_POST["enddpg"];
					$service="Photography";
					
					
					$query = "INSERT INTO serv(user, email, phone, service, date) VALUES('$user', '$email', '$phone', '$service', '$enddwd')";
					$result = mysqli_query($con,$query);
					if(!$result) {
								$error = mysqli_error($con);
								print $error;
								exit;
								}
								else{
								$mess = "<font color='blue'>Request sent</font>";
								}
					}


				if(isset($_POST["submitvp"])) {
					
					$enddwd=$_POST["enddvp"];
					$service="Video Production";
					
					
					$query = "INSERT INTO serv(user, email, phone, service, date) VALUES('$user', '$email', '$phone', '$service', '$enddwd')";
					$result = mysqli_query($con,$query);
					if(!$result) {
								$error = mysqli_error($con);
								print $error;
								exit;
								}
								else{
								$mess = "<font color='blue'>Request sent</font>";
								}
					}
	
	
	
	
	
	
?>
<style rel="stylesheet" type="text/css">

.serv
{
	height:100%;
	margin-bottom:100px;
}

.serv div
{
	background-color:#99eebb;
	border:solid;
	border-width:2px;
	border-radius:5px;
	margin:0 30px 0 30px;
	float:left;
	padding:10px;
	
}

.serv div h1
{
	color:purple;

}

.serv div h2
{
	display:inline;

}

.serv div input
{
	border-radius:5px;
	background-color:#aaffff;
}

</style>

	<?php
		echo $mess;
	?>

<div style="margin:40px 10px 40px 10px; font-family: arial,sans-serif; ";>
	<center>
		<br>
		<br>
		<h1 style="color:purple;"  >Services</h1>
		<img src="../img/cs2.png" height=200px></img>
		<br><br><br>
		
	</center>
	

	
<div class="serv">

<form name="service" method="post" >	

<a name="wd">
<div >
<h1>Web Design</h1>
<p>Desccription: <br/>  yfgeiygiwuhffhs dfefbkjw auh uiuerbmnfh uerw fj uye v bjhefue vjkngfnjf/ <br/>
jdbjkfiuefhjfw. gfdckjuefbcs cywfefhgf gfbjdfbsf vhvs. </p>
<h2>Before: </h2><input type="date" name="enddwd" ><br><br>
<input type="submit" name="submitwd" value="Request ">
</div>
</a>

<a name="gd">
<div>
<h1>Graphic Design</h1>
<p>Desccription: <br/>  yfgeiygiwuhffhs dfefbkjw auh uiuerbmnfh uerw fj uye v bjhefue vjkngfnjf/ <br/>
jdbjkfiuefhjfw. gfdckjuefbcs cywfefhgf gfbjdfbsf vhvs. </p>
<h2>Before: </h2><input type="date" name="enddgd" ><br><br>
<input type="submit" name="submitgd" value="Request ">
</div>
</a>

<a name="ld">
<div>
<h1>Logo Design</h1>
<p>Desccription: <br/>  yfgeiygiwuhffhs dfefbkjw auh uiuerbmnfh uerw fj uye v bjhefue vjkngfnjf/ <br/>
jdbjkfiuefhjfw. gfdckjuefbcs cywfefhgf gfbjdfbsf vhvs. </p>
<h2>Before: </h2><input type="date" name="enddld" ><br><br>
<input type="submit" name="submitld" value="Request ">
</div>
</a>


<a name="sm">
<div>
<h1>Social Media Marketing</h1>
<p>Desccription: <br/>  yfgeiygiwuhffhs dfefbkjw auh uiuerbmnfh uerw fj uye v bjhefue vjkngfnjf/ <br/>
jdbjkfiuefhjfw. gfdckjuefbcs cywfefhgf gfbjdfbsf vhvs. </p>
<h2>Before: </h2><input type="date" name="enddsm" ><br><br>
<input type="submit" name="submitsm" value="Request ">
</div>
</a>

<a name="pg">
<div>
<h1>Photography</h1>
<p>Desccription: <br/>  yfgeiygiwuhffhs dfefbkjw auh uiuerbmnfh uerw fj uye v bjhefue vjkngfnjf/ <br/>
jdbjkfiuefhjfw. gfdckjuefbcs cywfefhgf gfbjdfbsf vhvs. </p>
<h2>Before: </h2><input type="date" name="enddpg" ><br><br>
<input type="submit" name="submitpg" value="Request ">
</div>
</a>

<a name="vp" >
<div>
<h1>Video Production</h1>
<p>Desccription: <br/>  yfgeiygiwuhffhs dfefbkjw auh uiuerbmnfh uerw fj uye v bjhefue vjkngfnjf/ <br/>
jdbjkfiuefhjfw. gfdckjuefbcs cywfefhgf gfbjdfbsf vhvs. </p>
<h2>Before: </h2><input type="date" name="enddvp" ><br><br>
<input type="submit" name="submitvp" value="Request ">
</div>
</a>

</form>

</div>
</div>
<hr>

<?php
	include ('../base/footer.php');
?>
