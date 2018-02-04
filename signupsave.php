<?php
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$password=$_POST["password"];
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
  $sql = "insert into signup values('$mobile','$email','$password')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header("location:Jtaxsalary.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>