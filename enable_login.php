<?php
/* code for database connection*/
$servername="localhost";
$username="root";
$password="";
$dbname="juggernautsonlinetaxfilingsystem";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
      echo "connected successfully";
  
  /* end of db connection*/
  
 /* gettig email and password from login form for validation*/

 
$email=$_POST["email"];
$password=$_POST["password"];
$query="select * from signup where email='$email' and password='$password'";

$result = $conn->query($query);

echo "hello";


 if($row = $result->fetch_assoc())
 {
	  
	  session_start(); //started session
	  
	  $_SESSION['login_user']= $row["email"]; //stored email in 'login_user' 
			echo $_SESSION['login_user'];
			//echo "hello";
			$message="you are successfullylogged in";
			echo "<script type='text/javascript'>alert('$message'); history.go(-1);</script>";
			header('location:Jtaxmainpage.php');
			
	}
	
 else{
	 $message = "Username and/or Password incorrect.\\nTry again. or please create account inorder to login";
     echo "<script type='text/javascript'>alert('$message');
	 history.go(-1); </script>";	 
	 
 }
	?>
































/*session_start();
$error='';
if (isset($_POST['submit'])) 
{
if (empty($_POST['username']) || empty($_POST['password'])) 
{
$error = "Username or Password is invalid";
}
 
else
{
/*$servername="localhost";
$username="root";
$password="";
$dbname="juggernautsonlinetaxfilingsystem";
$email=$_POST["email"];
$password=$_POST["password"];

$connection = mysql_connect("localhost", "root", "");


if ($connection->connect_error)
	{
    die("Connection failed: " . $conn->connect_error);
} 
else
{
      echo "connected successfully";

}

$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

 $_SESSION['login_user']= $email; 
echo $_SESSION['login_user'];


$db = mysql_select_db("juggernautsonlinetaxfilingsystem", $connection);

$query = mysql_query("select * from signup where email=$email and password=$password", $connection);
  $rows = mysql_num_rows($query);
   
    
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if ($rows == 1) {
$_SESSION['login_user']=$email; // Initializing Session
header("location: Jtaxmainpage.html"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}*/
   
?>