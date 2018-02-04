<!Doctype html>
<html lang="en">
<head>
  <title>JTax Self Assessment page</title>
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
	margin-left:300px;
}
.none:hover
{
	text-decoration:none;
}
.h4one
{
	
	margin-left:400px;
}
.text-info1
{
	
	margin-left:200px;
}
.div1
{
	margin-left:400px;
}
.entry
{
	margin-right:100px;
}
.bottom{
	border-style: inset;
	border-width:2px;

	}
	.form
	{
		width:500px;
	}
	.div1
	{
		margin-left:200px;
	}
	.none:hover
{
	text-decoration:none;
}
.save
{
	background-color:white;
	margin-left:50px;
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


<h3 class="h3one">Add an Advance Tax or Self Assessment Tax entry</h3>
<br>
<h4 class="div1">Taxes Paid</h4>
<p class="text-info div1"><b>Provide details about any Advance Tax or Self Assessment Tax paid</b></p>
<br>


<div class="div1">
<form action="" method="post" class="form">



<div class="form-group">
  <div class="form-group col-md-12">
    <label for="inputAddress2">Amount Paid *</label>
    <input type="number_format" class="form-control" id="inputAddress2" placeholder=""  name="number" required/>
  </div>
</div>




<div class="form-group">
  <div class="form-group col-md-12">
    <label for="inputAddress2">Date of Payment *</label>
	<p class="bg-info">Specify date in format like 25/2/2011 </p>
    <input type="number_format" class="form-control" id="inputAddress2" placeholder="dd/mm/yyyy"  name="dop" required/>
  </div>
</div>


<div class="form-group">
  <div class="form-group col-md-12">
    <label for="inputAddress2">BSR Code of the bank you deposited with * </label>
	<a href="sample_tax_receipt_challan_challan_no.png">Click here to see the sample
	</a>
    <input type="number_format" class="form-control" id="inputAddress2" placeholder=""  name="bsr" required/>
  </div>
</div>



<div class="form-group">
  <div class="form-group col-md-12">
    <label for="inputAddress2">Challan number * </label>
	<a href="sample_tax_receipt_challan_bsr_code.png">Click here to see the sample
	</a>
    <input type="number_format" class="form-control" id="inputAddress2" placeholder=""  name="cn" required/>
  </div>
</div>

<a href="tax_receipt_download.png">Where can I find my tax receipt?</a>
<br></br>
<button type="submit" class="btn btn-primary save">
  <a href="Jtaxtaxespaid.php" class="none">Save</a>
  </button>
 
</form>
</div>



<br>
<a href="Jtaxselftaxpayments.php" class="h3one">Back to TDS Summary</a>
<br></br>

 <hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
</body></html>
