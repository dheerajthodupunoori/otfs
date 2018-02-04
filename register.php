<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Signup / Registration form </title>
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
</style>

</head>

<body class="blue">
<!-- Start of the form-->

<form action="signup_save.php" method="post" name="form">
  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
	
       
		
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" class="validate" name="email" onblur="return checkEmail()" onfocus="true">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
		
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" class="validate" name="password">
            <label for="password">Password</label>
          </div>
        </div>
		
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password">
            <label for="password-again">Re-type password</label>
          </div>
        </div>
        
   
	  <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12"  type="submit" value="submit">Submit</button>
</div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="login.php">Login</a></p>
          </div>
      </div>
		
    </div>
  </div>
  
</form>
 

<!-- End of the form -->
  <center>
  <!--  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Post Page - Responsive 
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-5104998679826243"
     data-ad-slot="3470684978"></ins>-->

<!-- phone number validation-->	 


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


<!--email validation function-->

<script>
function checkEmail()
 {

    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}
</script>


</center>

 
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>



 <!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27820211-3', 'auto');
  ga('send', 'pageview');

</script>-->



<script src="//load.sumome.com/" data-sumo-site-id="1cf2c3d548b156a57050bff06ee37284c67d0884b086bebd8e957ca1c34e99a1" async="async">
</script>


  <!-- <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            © 2015 W3lessons.info
            <a class="grey-text text-lighten-4 right" href="http://w3lessons.info">Karthikeyan K</a>
            </div>
          </div>
  </footer>-->

</body>

</html>