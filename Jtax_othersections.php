<!Doctype html>
<html lang="en">
<head>
  <title>JTax Other Sections page</title>
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
.none:hover
{
	text-decoration:none;
}
.bottom{
	border-style: inset;
	border-width:2px;
margin-top:50px;
	}
		.save
{
	background-color:white;
	margin-left:50px;
}
.div1
{
	margin-left:200px;
}
.form
{
	width:600px;
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

<div class="div1">


<h3>Additions to Profit and Loss Account</h3>
<p class="text-info">On this page, enter information related to Section 36, 37, 40A and 41 of Schedule OI and certain sections of Schedule BP. </p>
<p class="text-info">To enter details of<a href="Jtax_section43b.php"> <b>Section 43B</b> </a>click here and for <a href="jtax_section40.php"> <b>Section 40</b> </a>, click here</p>
<br>

<form action="" method="post" class="form">
<div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Section *</label>
      <select name="s" class="form-control">
        <option value="1">Amount disallowable U/S 36</option>
		<option value="2">Amount disallowable U/S 37</option>
		<option value="3">Amount disallowable U/S 40 A</option>
		<option value="4">Deemed under Section 41</option>
		<option value="5">Interest disallowable U/S 23 (Micro, Small and Medium Enterprises Development Act, 2006)</option>
		<option value="6">Income U/S 33AB/33ABA/35ABB/72A/80HHD/80-IA</option>
		<option value="7">Any items of addition U/S 28 to 44DA</option>
		<option value="8">Any other Income not included in P&amp;L</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Sub Section *</label>
       <select name="ss" class="form-control">
        <option value="1">Section 36(1)(i) premium paid for insurance against risk of damage or destruction of stocks or store [36(1)(i)]</option>
		<option value="2">Section 36(1)(ib)premium paid for insurance on the health of employees [36(1)(ib)] </option>
		<option value="3">Section 36(1)(ii) any sum paid to an employee as bonus or commisssion for services rendered, where such sum was other</option>
		<option value="4">Section 36(1)(iii) any amount of interest paid inrespect of borrowed capital []</option>
		<option value="5">Interest disallowable U/S 23 (Micro, Small and Medium Enterprises Development Act, 2006)</option>
		<option value="6">Income U/S 33AB/33ABA/35ABB/72A/80HHD/80-IA</option>
		<option value="7">Any items of addition U/S 28 to 44DA</option>
		<option value="8">Any other Income not included in P&amp;L</option>
      </select>
    </div>  
  </div>
  
  
  
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Description </label>
	  <br>
      <input type="text" class="form-control" name="d" required/><br>
	  <p class="bg-info">Specify nature of expenses incurred here. (e.g. Insurance premium payment for Arun Gupta) </p>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Amount *</label>
        <input type="number" class="form-control" id="inputCity" name="ap">
    </div>  
  </div>


<button type="button" class="btn btn-default btn-block">
				<a href="Jtaxbussiness.php" class="none">
				Add Entry</a>
			</button>

</form> <br>
<a href="Jtaxbussiness.php">Back to Bussiness And Profession</a>
 </div>

 
 
 <br>
 <hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
  </body>
</html>
	