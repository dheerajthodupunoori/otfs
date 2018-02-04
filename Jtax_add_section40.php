<!Doctype html>
<html lang="en">
<head>
  <title>JTax Add Section 40 Page</title>
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
	width:700px;
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

<h3>Add Information</h3>
<h4>Section Info</h4>
<br>

<form action="" method="post" class="form">
 
    
 
 
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Section</label>
      <select name="s" class="form-control">
        <option value="1">Amount disallowable under section [40(a)(i)] on account of non-compliance with provisions of Chapter XVII-B</option>
		<option value="2">Amount disallowable under section [40(a)(ia)] on account of non-compliance with the provisions of Chapter XVII-B</option>
		<option value="3">Amount disallowable under section [40(a)(ib)], on account of non-compliance with the provisions of Chapter VIII</option>
		<option value="4">Amount disallowable under section [40(a)(iii)] on account of non-compliance with the provisions of Chapter XVII-B</option>
		<option value="5">Amount of tax or rate levied or assessed on the basis of profits [40(a)(ii)]</option>
		<option value="6">Amount paid as wealth tax [40(a)(iia)]</option>
		<option value="7">Amount paid by way of royalty, license fee, service fee etc. as per section [40(a)(iib)]</option>
		<option value="8">Amount of interest, salary, bonus, commission or remuneration paid to any partner or member [40(b)]</option>
		<option value="9">Any other disallowance</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Particulars</label>
      <input type="text" class="form-control" id="inputCity" name="p">
    </div>  
  </div>
  
   <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Brought forward from which Financial Year?</label>
      <input type="email" class="form-control" id="inputEmail4" name="fy" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Amount Brought Forward</label>
      <input type="number" class="form-control" id="inputPassword4" name="abf">
    </div>
  </div>
  
  
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Amount Allowed For Current Year</label>
      <input type="number" class="form-control" id="inputEmail4" name="al" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Amount Disallowed For Current Year</label>
      <input type="number" class="form-control" id="inputPassword4" name="ad">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary save">
  <a href="Jtaxbussiness.php" class="none">Save</a>
  </button>
</form>

</div>


<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
  </body>
</html>