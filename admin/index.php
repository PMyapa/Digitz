<?php
include ("../base/head.php");

	
?>


<div style="background: linear-gradient(#17A589,#0E6251,#0E6251,#1A5276); height:180px; width:100%; box-shadow: 0 1px 10px 0 rgba(32,33,36,1); position:sticky;" class="utab", >
<div>
<div class="logo" style="margin:30px 30px 30px 120px; width:100px; float:left;">
<img src="../img/csp.png" height=100px>
</div>

</div>
</div>




<?php

$mess="";

session_start();
	if(!isset($_SESSION["acn"])) 
	{
		
		
		
		
		
	
			if(isset($_POST["submit"])&&$_POST["submit"]=="Sign in") {	
				//conncet to the database
				require_once("../dbcon/user.php");
				include("../dbcon/dbcon.php");	//database connection function
				
				
				$acc=$_POST["acc"];
				$password=md5($_POST["password"]);
				
				
				//retriving data from db
				$query = "SELECT acc FROM admin WHERE acc = '$acc' AND password = '$password'";
				$result=mysqli_query($con,$query);
					
				while($row=mysqli_fetch_array($result)) {
					$acn=$row["0"];

				}
				
				if(mysqli_affected_rows($con)==0) {
					$mess = "<font color=purple size=2><b>Wronge username or password.<br>Please try again.</b></font>";
				} else {
					$_SESSION["acn"]=$acn;

					
					header("Location:./allua.php");
					exit;
				}
			}
			?>

			<div style="height:100%";>
				<center>
					<h1 style="color:purple;"  >Administrative accounts</h1>
						
					
					

					<div class="loginh" style="background-color:#FFA200; border-radius: 50px 50px 0 0; width:300px; height:45px;  margin:20px 0 0 0;  border:solid; border-width:1px 0 0 1px;;">
					<h1 style="margin:0;">Admin login</h1>
					</div>
							
					<div class="login" style=" width:300px; border-radius:0 0 50px 50px; border:solid; border-width:1px;   ">
					<form name="signin" method="post"  action="">
						
						<table height="80px">
							<tr><td>Account:
								<td><input type="text" name="acc" value="" >
									
							<tr><td>Password:
								<td><input type="password" name="password" value="">
						
						</table>
						
						<input style="border-radius: 10px; margin:20px;" type="submit" name="submit" value="Sign in">
						
						
					</form>
					</div>
					
				
				<?php	
					echo $mess."<br><br>";	
				?>
					
					
				
						
					
						<br>

				</center>

					
			</body>


					
					<br><br><br>
					
				</center>
			</div>

					
					
					
					
			<?php		
					
		
		
	}
	else
	{
		header("Location:./allua.php");
		exit;	

	}

	
include ('../base/footer.php');
?>
