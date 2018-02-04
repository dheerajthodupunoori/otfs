<!DOCTYPE html>
<html>
<head>

<title>Google sign in</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="google-signin-client_id" content="132258389297-j4o2u0hom8ttvuur1944p8e9cd9bqog6.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>
<style>
.g-signin2
{
	margin-left:500px;
	margin-top:200px;
}
.data
{
	display:none;
}
</style>
</head>
<body>
<div class="g-signin2" data-onsuccess="onSignIn" data-longtitle="true"></div>
 <div class="data">
 <p>Profile Details</p>
 <img id="pic" class="img-circle"  width="100" height="100"/>
 <p>Email Address</p>
 <p id="email" class="alert alert-danger"></p>
 <button onclick="signOut()" class="btn btn-danger">Sign out</button>
 </div>
</body>
</html>
