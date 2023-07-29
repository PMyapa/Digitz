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
		
		$username = $_GET["uname"];

		



	echo "<center>

	<h2>Edit of User Information</h2></center>";
		
	?>


<?php
			
			
	/*Connect to MySQL database*/
	include("../dbcon/user.php");
	require_once("../dbcon/dbcon.php");


	/*Execute SQL command*/
	$query = "SELECT regno,fname, lname, gen, bday, email, phone, cont, username FROM
				uinfo WHERE username='$username'";
	$result=mysqli_query($con,$query);	
	$myrow1=mysqli_fetch_row($result);
	$contm=$myrow1[7];			
			
if(isset($_POST["submit"]))
	{
		


	
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	
		
	$email=$_POST["email"];
	
	$phone=$_POST["phone"];
	
	
	if(isset($_POST["cont"])) {
		$cont='1';
	} else {
		$cont='0';
	}	
	
	
	
	
	
		
	$query = "UPDATE uinfo
				SET fname='$fname', lname='$lname', email='$email', phone='$phone', cont='$cont'
				WHERE username='$username' ";
		$result = mysqli_query($con,$query);
		
		if(!$result) {
			$error = mysqli_error($con);
			print $error;
			exit;
		}
		else{
		$mess = "<font color='blue'>User Successfully Updated</font>";
		header("Refresh:1");
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
			return confirm("Do you want to update?");
					
		}
	-->
	</script>	


	<?php
		echo "<center>".$mess."</center>";


	
	echo '<form name="user" method="post" action="" onSubmit="return testform()">	

	<div  class="myd" style="border-radius:10px; background-color:#28C8BD; width:60%; padding:2%; margin:0 10% 2% 10%;">
		<caption><font size="10" color="#17A589;"><b>Edit User Details</b></font></caption>
		<br>
				<br><br>
				<font>User Name:  <b>'. $myrow1[8].'</b> </font>
				
				<br/>
				<br/>
				
				<b>First Name:</b><br>
				<input style="border-style: hidden; background-color:#28C8BD;" type="text" name="fname" value='. $myrow1[1].' size="50" maxlength="60"><br><br>
				
				<b>Last Name:</b><br>
				<input style="border-style: hidden; background-color:#28C8BD;" type="text" name="lname" value='. $myrow1[2].' size="50" maxlength="60"><br><br>
						
									
				<b>Gender:</b><br>
				<font color="#444444">'. $myrow1[3].' </font>
				<br><br>
				
				<b>Date of Birth</b><br>
				<font color="#444444">'. $myrow1[4].' </font>
				<br/><br/>
						
				<b>E-mail:</b><br>
				<input style="border-style: hidden; background-color:#28C8BD;" type="text" name="email" value='. $myrow1[5].' size="50" maxlength="60"><br><br>
				
				<b>Phone Number</b><br>
				<input style="border-style: hidden; background-color:#28C8BD;" type="text" name="phone" value='. $myrow1[6].' size="20" maxlength="20"><br><br>
				
				
				<b>Contributor</b>'; 
					if($myrow1[7]==1) 
					{
					echo '<input type="checkbox" name="cont" value="send" checked><br><br>';
					}
					else
					{
					echo '<input type="checkbox" name="cont" value="send" ><br><br>';
					}
				echo '		
				
					
				<hr width="90%" color="black"/><br>
				<div align=right>
					<input type="submit" name="submit" value="UPDATE ">
					&nbsp;&nbsp;
					<input type="reset" name="reset_s" value="Discard">
				</div>	
				

	</div>
	
	</form>'
	;

?>
 <center><a href="./index.php">back</a></center>
	
<?php

	include ('../base/footer.php');
?>