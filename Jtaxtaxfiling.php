<!Doctype html>
<html lang="en">
<head>
  <title>JTax TaxFiling page</title>
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
.h3one
{
	margin-left:200px;
}
.form
{
	width:700px;
}
.line
{
	
	margin-right:50px;
	border-style: inset;
	border-width:2px;
}
.line1
{
     margin-right:200px;
	border-style: inset;
	border-width:2px;	
}
.save
{
	background-color:white;
	margin-left:50px;
}
.bottom{
	border-style: inset;
	border-width:2px;

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



<h3 class="h3one">Additional Information needed for Income Tax Return</h3>
<br>
<h4 class="h3one">Primary Bank Account</h4>
<p class="text-info h3one">This is where you will receive your refund (if applicable).</p>
<div class="h3one">



<form action="" method="post" class="form">

 <div class="form-row">
    <div class="form-group col-md-6">
      <label>Bank Account Number * </label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="" name="bac" required />
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">IFSC code of your Branch * 
</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="" name="ifsc" required />
    </div>
  </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Type of Bak Account</label>
    <br>
	<select name="tba" required/>
	<option value="Saving Account">Saving Account</option>
	<option value="Current Account">Current Account</option>
	</select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Name of your Bank * 
</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="" name="nob" required />
    </div>
  </div>
  

 <div class="form-group">
  <div class="form-group col-md-12">
    <label for="inputAddress2">Cash deposited in Nov-Dec 2016</label>
	<p class="bg-info">Enter if you have deposited a total of more than 2 lakhs between 9th Nov 2016 and 30th Dec 2016  </p>
	<a href="C:\Users\HOME\Desktop\JTrustTeam\OTFS\Additional Information.php">Read more</a>
	<input type="number_format" class="form-control" id="inputPassword4" placeholder="" name="cd" required />
	 </div>
	 </div>
	 
	 
	 <br></br>
	 <br>
	 
	 <hr class="line">
	 <br>
	 
	 <h3>All Other Bank Accounts</h3>
	 <br>
	 <p class="text-info">Please enter details of all the bank accounts you hold here.
You need to do this as per the new guidelines from the Tax Department.</p>
<h4>Bank Account One</h4>
<div class="form-row">
    <div class="form-group col-md-4">
      <label>Bank A/C Number</label>
    <br>
	<input type="number_format" class="form-control" id="inputPassword4" placeholder="Bank A/C Number" name="bac1" required />
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">IFSC Code
      <input type="text" class="form-control" id="inputPassword4" placeholder="IFSC Code" name="ifsc1" required />
    </div>
	
	 <div class="form-group col-md-4">
      <label for="inputPassword4">Bank Name
</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Bank Name" name="bn1" required />
    </div>
</div>


<div class="form-row">
    <div class="form-group col-md-6">
      <label>Account Type</label>
    <br>
	<select name="tba1" required/>
	<option value="Saving Account">Saving Account</option>
	<option value="Current Account">Current Account</option>
	</select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Cash Deposit (?)
      <input type="number_format" class="form-control" id="inputPassword4" placeholder="" name="cd1" required />
    </div>	 
</div>
  
<br>
	 
	 <hr class="line1">
	 <br>
	 

<h4>Bank Account Two</h4>
<div class="form-row">
    <div class="form-group col-md-4">
      <label>Bank A/C Number</label>
    <br>
	<input type="number_format" class="form-control" id="inputPassword4" placeholder="Bank A/C Number" name="bac2" required />
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">IFSC Code
      <input type="text" class="form-control" id="inputPassword4" placeholder="IFSC Code" name="ifsc2" required />
    </div>
	
	 <div class="form-group col-md-4">
      <label for="inputPassword4">Bank Name
</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Bank Name" name="bn2" required />
    </div>
</div>


<div class="form-row">
    <div class="form-group col-md-6">
      <label>Account Type</label>
    <br>
	<select name="tba2" required/>
	<option value="Saving Account">Saving Account</option>
	<option value="Current Account">Current Account</option>
	</select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Cash Deposit (?)
      <input type="number_format" class="form-control" id="inputPassword4" placeholder="" name="cd2" required />
    </div>	 
</div>
  
<br>
	 
	 <hr class="line1">
	 <br>
	 
	 
	 
	 
	 <h4>Bank Account Three</h4>
<div class="form-row">
    <div class="form-group col-md-4">
      <label>Bank A/C Number</label>
    <br>
	<input type="number_format" class="form-control" id="inputPassword4" placeholder="Bank A/C Number" name="bac3" required />
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">IFSC Code
      <input type="text" class="form-control" id="inputPassword4" placeholder="IFSC Code" name="ifsc3" required />
    </div>
	
	 <div class="form-group col-md-4">
      <label for="inputPassword4">Bank Name
</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Bank Name" name="bn3" required />
    </div>
</div>


<div class="form-row">
    <div class="form-group col-md-6">
      <label>Account Type</label>
    <br>
	<select name="tba3" required/>
	<option value="Saving Account">Saving Account</option>
	<option value="Current Account">Current Account</option>
	</select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Cash Deposit (?)
      <input type="number_format" class="form-control" id="inputPassword4" placeholder="" name="cd3" required />
    </div>	 
</div>
  
<br>
	 
	 <hr class="line">
	 <br>
	


<h3>Additional Information needed for Income Tax Return</h3>	
<br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label>Mobile Phone number (secondary)
Optional </label>
    <br>
	 <input type="number_format" class="form-control" id="inputPassword4" placeholder="" name="smn" required />
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">STD code
Type in only STD code (like 011) 
      <input type="number_format" class="form-control" id="inputPassword4" placeholder="" name="std1" required />
    </div>	 
</div>


<div class="form-row">
    <div class="form-group col-md-6">
      <label>Landline Telephone number</label>
    <br>
	<p class="bg-info">Leave empty if you don't have a Landline </p>
	 <input type="number_format" class="form-control" id="inputPassword4" placeholder="" name="smn" required />
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Income Tax Ward/Circle 
<p class="bg-info">Leave empty if you don't know.</p>
      <input type="number_format" class="form-control" id="inputPassword4" placeholder="" name="std1" required />
    </div>	 
</div>


 <hr class="line">
	 <br>
	 <h3>Foreign Assets, Incomes & Taxes</h3>
	 <p class="text-info">Do you have any Foreign Assets or Income?
Have you paid taxes outside India?</p>
<button type="button" class="btn btn-default next">
<a href="Jtaxtaxfilingassets.php" class="none">
Add Foreign Assets,Incomes, and Taxes</a></button>
<br></br>
<button type="submit" class="btn btn-primary save">
  <a href="Jtaxefiling.php" class="none">Save</a>
  </button>
  </form>
</div>


 <hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
</body></html>