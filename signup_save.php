<?php
$servername="localhost";
$username="root";
$password="";
$dbname="juggernautsonlinetaxfilingsystem";
$conn = new mysqli($servername,$username,$password,$dbname);
$message="this mail is already registered";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
      echo "connected successfully";
//$mobile=$_POST["mobile"];
$email=$_POST['email'];
$password=$_POST['password'];


//echo "$email";
$sql = "insert into signup values('$email','$password')";

if ($conn->query($sql) === TRUE)
	{
		//echo "hello";
    echo "New record successfully";
	header("location:index.php");
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>