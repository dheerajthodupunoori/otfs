<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main Header</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.nav1
{
	height:70px;
	background-color:#595959;
}
.text1
{
	margin-top:10px;
}
.nav2
{
	margin-right:430px;
}
.logout
{
	margin-top:20px;
	margin-right:10px;
}
</style>
<script>
function myFunction() {
    alert("Are you sure you want to logout?");
}
</script>
</head>
<body>

<nav class="navbar navbar-inverse nav1">
  <div class="container-fluid">
    <div class="navbar-header ">
      <a class="navbar-brand text1">Jtax</a>
    </div>
	
	
    <ul class="nav navbar-nav">
	<li><a href="Jtaxmainpage.php" class="text1">Home</a></li>
      <li><a href="#" class="text1">About Us</a></li>
      
      <li><a href="#" class="text1">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <button type="button" class="btn btn-default btn-sm logout " onclick="myFunction()"><a href="signout.php" class="none1">
          <span class="glyphicon glyphicon-log-out"></span> Log out
       </a> </button>
	   
    </ul>
  </div>
</nav>

</body>
</html>
