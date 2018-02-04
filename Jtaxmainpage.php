<?php

session_start();
	   if(isset($_SESSION['login_user'])) 
	   {
	   echo $_SESSION['login_user'];
	   }
	   else
	   {?>
   
	<script type="text/javascript">
	alert("User logged out");
	</script>
	
	   <?php
	   }


?>
<!Doctype html>
<html lang="en">
<head>
  <title>JTax Main Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width  initial-scale="1">
  <link rel="stylesheet" type="text/css" href="Jtaxmainpage.css">
  <style>
  .none1:hover
  {
  text-decoration:none;
  }
  </style>
</head>
<?php
if (isset($_SESSION['login_user'])) {
   // logged in
   include("logout_header.php");
 } else {
   // not logged in
   include("header.php");
 }

 ?>
  <body color="orange">
 <!-- <div class="container">
      
  <button type="button" class="jtax"><a href="Jtaxmainpage.php" class="jtaxicon">JTax</a></button>
  <button type="button" class="login" position="right-side"><a href="login.php" class="none1">Login</a></button>
  <button type="button" class="signup"><a href="register.php" class="none1">SignUp</a></button>
  <button type="button" class="signup"><a href="signout.php" class="none1">Sign Out</a></button>-->
  <br></br>
  <br>
  <br>
      
   <h2 class="one">Welcome to JTax!</h2>
  <br>
  <div class="one" style="min-height: 25px;">Do you have a Form-16 PDF?
  <br></br><br>
   <button type="button" class="form16">Upload Form-16 PDF</button>
   </div>
   <br>
<h3 class="one">Or</h3>
<br>
<div class="one" style="min-height: 25px;">No Form-16 PDF? Paper Form-16?
  <br></br>
  <br>
  <button type="button" class="uploadform16"><a href="Jtaxlist.php" class="continuehere">Continue here!</a></button>
  <br>
  <br></br>
<br></br>
 <hr>
    <!-- <br></br>
  
   <p align="left">JTax is a product by JUGGERNAUTS</p>-->
   
   <?php include("footer.php");?>
   </div>
   </div>
  </body>
  </html>