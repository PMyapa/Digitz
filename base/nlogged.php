<div style="background: linear-gradient(#17A589,#0E6251,#0E6251,#1A5276); height:180px; width:100%; box-shadow: 0 1px 10px 0 rgba(32,33,36,1); position:sticky;" class="ltab", >
<div class="logo" style="margin:30px 30px 30px 120px; width:100px; float:left;">
<img src="../img/csp.png" height=100px>
</div>
<div class="bltab" style="color:white; float:right; width:40%; ">
<?php


$mess="";


if(isset($_POST["submit"])&&$_POST["submit"]=="Sign in") {	
	//conncet to the database
	require_once("../dbcon/user.php");
	include("../dbcon/dbcon.php");	//database connection function
	
	
	$user=$_POST["uname"];
	$password=md5($_POST["password"]);
	
	
	//retriving data from db
	$query = "SELECT username,email,cont FROM uinfo WHERE username = '$user' AND password = '$password'";
	$result=mysqli_query($con,$query);
		
	while($row=mysqli_fetch_array($result)) {
		$name=$row["0"];
		$ema=$row["1"];
		$cnt=$row["2"];
	}
	
	if(mysqli_affected_rows($con)==0) {
		$mess = "<font color=orange size=2><b>Wronge username or password.Please try again.</b></font>";
	} else {
		$_SESSION["username"]=$name;
		$_SESSION["ematype"]=$ema;
		$_SESSION["cnt"]=$cnt;
		
		header("Location:../index.php");
		exit;
	}
}

?>

	<center>		
		
		<!-- start of user loging part -->
		
		<div class="login" style="width:100%; border-radius: 15px;   ">
		<div class="loginh" style="background-color:#1A5276; opacity:0.5; border-radius: 15px 15px 0 0; height:40px;">
		<h1>Sign in</h1>
		</div>
		<form  name="signin" method="post"  action="">
			
			<table height="30px" >
				<tr><td style="color:#aaaaff;">User Name:</td>
					<td><input type="text" name="uname" style="width:100%;" value="" ></td>
					<td style="color:#aaaaff;">Password:</td>
					<td><input type="password" name="password" style="width:100%;"  value=""></td>
					<td><input style="border-radius: 10px; margin:20px 0 20px 0;" type="submit" name="submit" value="Sign in"></td>
			
			</table>
			
			
			
		</form>
		</div>
		</center>

	
		<!-- end of loging part -->
		
	
			
		
	<!-- start of new user registration link -->

	<div style="float:right;">
					<?php	
		echo $mess."";	
	?>
		<font size="3">If you are a new user  </font>
		<div class="regw" style="background-color:#90FF00; border-radius:10px; padding:5px; width:100px; float:right;">
		<a href="../user/registration.php">Register now</a>
		</div>
		</div>

	<!-- end of new user registration link -->
		

</div>
</div>

