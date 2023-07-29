<?php
	include ('../base/head.php');
	include ('../base/lpagescus.php');
	
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
<div class="tita1">
<div style=" background-image: url('photography.jpg'); min-height: 500px; background-attachment: fixed;  background-position: center;  background-repeat: no-repeat;  background-size: cover;" class="tita">
<div style=" padding:100px 20px 100px 20px; background: rgba(255,255,255, 0.5);">
<div style=" font-family: arial,sans-serif; ";>
	<center>
		<br>
		<br>
		<p style="text-shadow: 0 0 10px #FFFFFF,0 0 35px #0000FF;font-size:40px;"><b>PHOTOGRAPHY SERVICES</b></p>
		<br><br><br><br><br><br><br><br>
		
		
	</center>
</div>
</div>
</div>
</div>



<style rel="stylesheet" type="text/css">

.serv
{
	height:150%;
	margin-bottom:100px;
}

.serv div
{
	background-color:#43BA82  ;

	padding:10px;	
}

.serv div input
{
	border-radius:5px;
	background-color:#C2F5E4;
}
.oss div
{
	background-color:#FFFFFF;
	width:25%;
	height:30%;
	float:left;
	border-radius:10px;
	padding:2%;
	margin:20px 2% 30px 2%;
}
.os div
{
	background-color:#FFFFFF;
	width:20%;
	height:15%;
	float:left;
	border-radius:10px;
	padding:2%;
	margin:20px 5% 90px 4%;
}
.p
{
        text-size:7px;
        text-type:arial;
        aligh:right;
}
</style>
	<?php
		echo $mess;
	?>
	
<div class="serv">
<div>
<form name="service" method="post" >	

<p><font size="6px" type="arial" aligh="right"><b> Professional photography services for your website and digital marketing use</b></font></p>
<p>Desccription: <br/>  yfgeiygiwuhffhs dfefbkjw auh uiuerbmnfh uerw fj uye v bjhefue vjkngfnjf/ <br/>
jdbjkfiuefhjfw. gfdckjuefbcs cywfefhgf gfbjdfbsf vhvsnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkllllllllllllllllllllllllllllllll
,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,. </p>
<br><br><br><i><p><font size="5px" type="arial" aligh="right"><b>Here we have uploaded some photographs of our clients</b></font></p></i>
<div class="oss">
<div>
<img height="400px" width="450px" src="../img/1.png">
</div>
<div>
<img height="400px" width="450px" src="../img/2.jpg">
</div>
<div>
<img height="400px" width="450px" src="../img/1.jpg">
</div></div>

<center><h2>Our sevice Prices</h2></center>
<div class="os">
<div>
<h2><center>PACKAGE ONE - $275</center></h2><ol>
<li>One hour session</li>
<li>50 edited photos</li>
<li>One location</li>
<li>Online access</li></ol>
</div>
<div>
<h2><center>PACKAGE TWO - $500</center></h2><ol>
<li>2 hour session</li>
<li>125 edited photos</li>
<li>Two locations</li>
<li>Online access</li></ol>
</div>
<div>
<h2><center>PACKAGE THREE - $1000</center></h2><ol>
<li>One day session</li>
<li>500 edited photos</li>
<li>Four locations</li>
<li>Online access</li></ol>
</div></div>

<center><h1>Apply for this service from here</h1></center>
<center><p><font size="5.5px" type="arial"><b>Select the event date from here: <input type="date" name="enddpg" ><b></font> </p>
<input type="submit" name="submitpg" value="Request ">
<br><br><br><br><br>
</form>
</div>
</div>


<hr>

<?php
	include ('../base/footer.php');
?>