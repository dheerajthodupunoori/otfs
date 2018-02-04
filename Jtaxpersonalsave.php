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
$firstname=$_POST["fn"];
$middlename=$_POST["mn"];
$lastname=$_POST["ln"];
$gender=$_POST["g"];
$dob=$_POST["dob"];
$pannumber=$_POST["pan"];
$fathername=$_POST["ftn"];
$maritalstatus=$_POST["ms"];
$sql = "insert into personalinfo values('$firstname', '$middlename', '$lastname','$gender','$dob','$pannumber','$fathername','$maritalstatus')";
if ($conn->query($sql) === TRUE) {
    echo "New record successfully";
	header("location:Jtaxaddressinfo.php");
	//<script type='text/javascript'> window.location.href = 'https://www.google.com';</script>
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>