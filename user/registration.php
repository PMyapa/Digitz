<?php
		
$mess = "";

if(isset($_POST["submit"])) {
		
	//conncet to the database
	require_once("../dbcon/user.php");
	include("../dbcon/dbcon.php");	//database connection function

	
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	
	if(isset($_POST["gen"])) {
		$gen=$_POST["gen"];
	}
	else{$gen='other';
	}
	
	$bday=$_POST["bday"];
	
	
	$email=$_POST["email"];
	
	$phone=$_POST["phone"];
	
	
	if(isset($_POST["cont"])) {
		$cont='1';
	} else {
		$cont='0';
	}	
	
	
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	$password_conf=md5($_POST["password_conf"]);
	
	
	
	if($password!=$password_conf) {
		$mess="<font color='red'>Password and confirmation doesn't match.</font>";
	}
	
	$queryc = "SELECT username FROM uinfo WHERE username = '$username' ";
	$resultc=mysqli_query($con,$queryc);
	
	if(mysqli_num_rows($resultc)>0) {
		$mess = "<font color='red'>Username already taken</font>";			
			}
	else
	{
		
		$query = "INSERT INTO uinfo(fname, lname, gen, bday, email, phone, cont,
							username, password) VALUES('$fname', '$lname', '$gen', '$bday', '$email', '$phone', '$cont', '$username', '$password')";
			$result = mysqli_query($con,$query);
			
			if(!$result) {
				$error = mysqli_error($con);
				print $error;
				exit;
			}
			else{
			$mess = "<font color='blue'>User Successfully Created. <a href='../home'>Click here to Sign in</a></font>";
			}
	}
	

}
?>


<?php
	include ('../base/head.php');
?>
	
	<script language="javascript" >
	<!--
		function testform()
		{
			if(document.user.fname.value=='') { 
			alert("Please enter your first name");
			document.user.fname.focus();
			return false;
			
			}
			if(document.user.lname.value=='') { 
			alert("Please enter your last name");
			document.user.lname.focus();
			return false;
			
			}
			if(document.user.bday.value=='') { 
			alert("Please enter date of birth");
			return false;
			
			}
			if(document.user.email.value=='') { 
			alert("Please enter your email address");
			document.user.email.focus();
			return false;
			
			}
			if(document.user.phone.value=='') { 
			alert("Please enter your phone nmuber");
			document.user.phone.focus();
			return false;
			
			}
			if(document.user.username.value=='') { 
			alert("Please enter a valid user name");
			document.user.username.focus();
			return false;
			
			}
			if(document.user.password.value=='') { 
			alert("Please enter a password");
			document.user.password.focus();
			return false;
			}
			
			if(document.user.password_conf.value=='') { 
			alert("Please confirm your password");
			document.user.password_conf.focus();
			return false;
			
			}
			if(document.user.password.value!=document.user.password_conf.value) {
			alert("Password and confirmation does not match");
			document.user.password_conf.focus();
			return false;
			}
			return confirm("Do you want to register?");
					
		}
	-->
	</script>	
</head>

<body>

	<center>
	<?php
		echo $mess;
	?>

	
	<form name="user" method="post" action="" onSubmit="return testform()">	
	
	<table width="40%" bgcolor="#17A589" style="border-radius:10px">
		<caption><font size="10" color="green"><b>Registration Form</b></font></caption>
		<br>
		<tr>
			<td>
				<br><br>
				
				<b>First Name:</b><br>
				<input type="text" name="fname" size="50" maxlength="60"><br><br>
				
				<b>Last Name:</b><br>
				<input type="text" name="lname" size="50" maxlength="60"><br><br>
						
									
				<b>Gender:</b><br>
				<input type="radio" name="gen" value="Male"> &nbsp; Male
				<input type="radio" name="gen" value="Female"> &nbsp; Female
				<br><br>
				
				<b>Date of Birth</b><br>
				<input type="date" name="bday" ><br><br>
						
				<b>E-mail:</b><br>
				<input type="text" name="email" size="50" maxlength="60"><br><br>
				
				<b>Phone Number</b><br>
				<input type="text" name="phone" size="20" maxlength="20"><br><br>
				
				
				<b>Join as contributor?</b>
				<input type="checkbox" name="cont" value="send"><br><br>
				
						
				<b>User Name:</b><br>
				<input type="textbox" name="username" size="20"><br><br>
				
				<b>Password:</b><br>
				<input type="password" name="password" size="20" maxlength="20"><br><br>
					
				<b>Confirm Password:</b><br>
				<input type="password" name="password_conf" size="20" maxlength="20"><br><br>
					
				<hr width="90%" color="black"><br>
				<div align=right>
					<input type="submit" name="submit" value="Submit ">
					&nbsp;&nbsp;
					<input type="reset" name="reset_s" value="Discard">
				</div>	
				
			</td>
		</tr>
	</table>
	<a href="../index.php">Back to home</a>
	</center>
	
	</form>

<?php
	include ('../base/footer.php');
?>