<!Doctype html>
<html lang="en">
<head>
  <title>JTax Deductions Section 80G page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale="1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  .jtax {
   background-color: rgb(255,255,255);
    border: none;
    color: blue;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 40px;
	border-radius: 12px;
	float:left;
}
.jtaxicon
{
	text-decoration:none;
}
.jtax:hover {
    background-color: rgb(255,255,255); /* Green */
    color: black;
}
.info
	{
	background-color: rgb(255,255,255);
      color: rgb(0,0,0);
	}
.info:hover {
    background-color: rgb(255,255,255); /* Green */
    color: black;
}
.info:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.sources
	{
	background-color: rgb(255,255,255);
      color: blue;
	}
	.sources:hover {
    background-color: rgb(255,255,255); /* Green */
    color: black;
}
.sources:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.deductions
	{
	background-color: rgb(255,255,255);
      color: rgb(0,0,0);
	}
	.deductions:hover {
    background-color: rgb(255,255,255); /* Green */
    color: black;
}
.deductions:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.taxes
	{
	background-color: rgb(255,255,255);
      color: rgb(0,0,0);
	}
	.taxes:hover {
    background-color: rgb(255,255,255); /* Green */
    color: black;
}
.taxes:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.taxfiling
	{
	background-color: rgb(255,255,255);
      color: rgb(0,0,0);
	}
	.taxfiling:hover {
    background-color: rgb(255,255,255); /* Green */
    color: black;
}
.taxfiling:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.footer
{
margin-left:20px;
}

.h3one
{
	
	margin-left:400px;
}
.save
{
margin-left:500px;
}
.bussiness:hover
{
text-decoration:none;
}
.nature{
	
	margin-left:200px;
	width:500px;
	margin-right:30px;
}
.nature1{
	
	margin-left:200px;
	width:500px;
	margin-right:30px;
}
.success
{
	width:100px;
	margin-left:200px;
	color: rgb(255,255,255);
}
.none:hover
{
	text-decoration:none;
}
.form
{
	margin-left:200px;
	width:500px;
	
}
.line
{
	border-style: inset;
	border-width: 2px;
}
.section80g
{
	background-color:white;
	margin-left:300px;
}
.none:hover
{
	text-decoration:none;
}
</style>
</head>
  <body>
 <nav class="navbar navbar-default nb">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand nb" href="Jtaxmainpage.php">JTax</a>
    </div>
  </div>
</nav>
  <br>
  <br>
  <div class="container">
  <div class="btn-group btn-group-justified">
    <div class="btn-group">
      <button type="button" class="btn btn-primary info"><a href="Jtaxpersonalinfo.php" class="none">Information</a></button>
    </div>
   
	
	
	 <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle sources" data-toggle="dropdown">
      Income Sources <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="Jtaxsalary.php">Salary</a></li>
        <li><a href="Jtaxotherincome.php">Other Income</a></li>
		  <li><a href="Jtaxhouse.php">House Property</a></li>
		    <li><a href="Jtaxcapitalgain.php">Capital Gain</a></li>
			  <li><a href="Jtaxbussiness.php">Bussiness and Profession</a></li>
      </ul>
    </div>
	
	
	
    <div class="btn-group">
      <button type="button" class="btn btn-primary deductions">
	  <a href="Jtaxdeductions.php"  class="none">
	  Deductions</a></button>
    </div>
	<div class="btn-group">
      <button type="button" class="btn btn-primary taxes">
	  <a href="Jtaxtaxespaid.php" class="none">
	  Taxes paid</a></button>
    </div>
	
	
	
	<div class="btn-group">
      <button type="button" class="btn btn-primary taxfiling">
	  <a href="Jtaxtaxfiling.php" class="none">
	  Tax Filing</a></button>
    </div>
  </div>
</div>
<br>
<br></br>

<div>
<h4 class="h3one">Would you like to add any Donations made under Section 80G?</h4>
<br></br>
<button type="button" class="btn btn-primary btn-md section80g">
   <a href="Jtaxaddsection80g.php" class="none">
   Add Donation Under Section 80G</a></button> 
   
   <button type="button" class="btn btn-default save">
<a href="Jtaxdeductions.php" class="none">
Go to Next>></a></button>
