 <html>
 <head>
 <title>Otp verification Page</title>
 </head>
 <body>

 <div class="row margin" bg-color="white">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
           
            <label for="username" class="center-align">Username is your Mobile Number</label>
			 <input id="username" type="number" class="validate" name="mobile">
          </div>
		  
		  <br></br>
		  <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12"  type="submit" value="submit" onclick="mobile()">Send OTP</button>
</div>
        </div>


<!-- OTP verification-->
<script>
var sid=null;
//(adsbygoogle = window.adsbygoogle || []).push({});
function mobile()
  {
  var x=document.getElementById("username").value;
console.log(x);
/*$.get("https://2factor.in/API/V1/81eb7191-fffd-11e7-a328-0200cd936042/SMS/+91"+x+"/AUTOGEN", function(data, status){
            alert("Data: " + data["Details"] + "\nStatus: " + status);
			
			console.log(sid);
        }
		);	*/
		
		
		$.ajax({
     async: false,
     type: 'GET',
     url: 'https://2factor.in/API/V1/6afb480d-002d-11e8-a328-0200cd936042/SMS/+91'+x+'/AUTOGEN',
     success: function(data) {
	  alert("Data: " + data["Details"]);
         sid=data["Details"];
		 if(sid!=null){
		 window.location="Enterotp.php?sid="+sid;
		 }
     }
});
		//document.getElementById("sid").value = sid;
}	
</script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  
</body>