<?php
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
$doornumber=$_POST["dn"];
$street=$_POST["s"];
$pincode=$_POST["pc"];
$area=$_POST["a"];
$town=$_POST["t"];
$state=$_POST["st"];
$country=$_POST["c"];
$mobile=$_POST["mn"];
$email=$_POST["em"];
$alternateemail=$_POST["ae"];
$aadhaarcardnumber=$_POST["aan"];
$aadhaarcardenrollementnumber=$_POST["aaen"];
$sql = "insert into address values('$doornumber','$street','$pincode','$area','$town','$state','$country','$mobile','$email','$alternateemail','$aadhaarcardnumber','$aadhaarcardenrollementnumber')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header("location:Jtaxsalary.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>