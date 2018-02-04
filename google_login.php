<?php

<script>
alert("hello");
</script>
$email=$_POST['email'];
echo  $email;
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
  
$query="select * from signup where email='$email'";
$result = $conn->query($query);
$row = $result->fetch_assoc()
echo $row['email'];
?>