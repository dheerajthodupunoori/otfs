<?php
$mobile=$_POST["mn"];
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
$apikey="81eb7191-fffd-11e7-a328-0200cd936042";
$url="https://2factor.in/API/V1/".$apikey."/SMS/+91".$mobile."/AUTOGEN";
$status='';
$k="";
echo '<script>
var x;
$.get("https://2factor.in/API/V1/81eb7191-fffd-11e7-a328-0200cd936042/SMS/+91'.$mobile.'/AUTOGEN", function(data, status){
            alert("Data: " + data["Details"] + "\nStatus: " + status);
			x=data;

        }
		);
$k=x;		
</script>';

?>