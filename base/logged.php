
<div style="background: linear-gradient(#17A589,#0E6251,#0E6251,#1A5276); height:180px; width:100%; box-shadow: 0 1px 10px 0 rgba(32,33,36,1); position:sticky;" class="utab", >
<div>
<div class="logo" style="margin:30px 30px 30px 120px; width:100px; float:left;">
<img src="../img/csp.png" height=100px>
</div>
<div class="utabr" >
<div class="butab" style=" color:white; float:right; margin:5px;">


<?php
echo $_SESSION['username']; 
echo "<br>";
echo $_SESSION['ematype'];
?>

<br>
<br><a  style="text-decoration: none; color:red;" href="../user/logoff.php">Log Out</a>

</div>
<br>
<br>
<style>
.dropbtn {
  background-color: #0E6251;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;

}

.dropbtn a {
  color: white;
  text-decoration: none;
}

.dropdown {
  position: relative;
  display: inline-block;


}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #17A589;
}
</style>
<div style=" width:100%; margin-top:90px;">
<div style="float:right; margin:0 88px 0 0 ;">
<div class="dropdown">
  <a href="../index.php"><button class="dropbtn">Home</button></a>
</div>

<div class="dropdown">
  <a href="../services"><button class="dropbtn">Services</button></a>
  <div class="dropdown-content">
  <a href="../services/index.php#wd">Web Design</a>
  <a href="../services/index.php#gd">Graphic Design</a>
  <a href="../services/index.php#ld">Logo Design</a>
  <a href="../services">See all</a>
  </div>
  
</div>

<div class="dropdown">
  <a href="../accounts"><button class="dropbtn">Accounts</button></a>
  <div class="dropdown-content">
  <a href="../accounts/myp.php">My Profile</a>
  <a href="../accounts/allu.php">All users</a>
  </div>
  
</div>

<div class="dropdown">
  <a href="../contribute"><button class="dropbtn">Contribute</button></a>
</div>

<div class="dropdown">
  <a href="../about"><button class="dropbtn">About</button></a>
  <div class="dropdown-content">
  <a href="../about/help.php">Help</a>
  <a href="../about/credits.php">Credits</a>
  </div>
  
</div>
</div>

</div>
</div>
</div>
</div>


