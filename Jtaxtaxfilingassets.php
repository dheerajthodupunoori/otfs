<!Doctype html>
<html lang="en">
<head>
  <title>JTax tax Filing Assets page</title>
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
	width:500px;
}
.form
{
	width:700px;
}
.h3one
{
	margin-left:200px;
}
.next
{
	margin-left:450px;
}
.next1
{
	margin-left:200px;
}
.line{
	margin-left:200px;
	margin-right:600px;
	border-style: inset;
	border-width: 2px;
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

<h3 class="h3one">Schedules FSI, TR and FA: Details in foreign income, assets, etc</h3>
<h4 class="h3one">In case you paid Foreign Income, any other Foreign Assets
or have paid Taxes outside India, then specify them below.</h4>
<br>
<button type="button" class="btn btn-default next">
<a href="Jtaxefiling.php" class="none">
Go to Next>></a></button>
<br>
<hr class="line">

<h3 class="h3one">Schedule FSI</h3>
<br>
<button type="button" class="btn btn-default next1">
<a href="Jtax_income_arising_outside_india.php" class="none">
Details of Income accruing or arising outside India</a></button>
<br><hr class="line">

<h3 class="h3one">
Schedule TR</h3>
<br>
<button type="button" class="btn btn-default next1">
<a href="Jtax_taxes_paid_outside_india.php" class="none">
Details of Taxes Paid outside India</a></button>
<br>
<hr class="line">


<h3 class="h3one">Schedule FA</h3>
<br>
<p class="text-info h3one"><b>Instructions:</b>You need to fill this section if you are a resident of India and have foreign assets in any of the following categories.
No need to fill this if you are a 'non-resident' or 'not-ordinarily resident'.</p>
<br>
<button type="button" class="btn btn-default next1">
<a href="Jtax_foreign_bank_accounts.php" class="none">
Details of Foreign Bank Accounts</a></button>
<br>

<br>
<button type="button" class="btn btn-default next1">
<a href="Jtax_financial_interest_foreign_entity.php" class="none">
Details of Financial Interest in any Foreign Entity</a></button>
<br>


<br>
<button type="button" class="btn btn-default next1">
<a href="Jtax_immovable_property_outside_india.php" class="none">
 Details of Immovable Property outside India</a></button>
<br>


<br>
<button type="button" class="btn btn-default next1">
<a href="Jtax_asset_investement_outside_india.php" class="none">
 Details of any other Asset / Investment outside India</a></button>
<br>



<br>
<button type="button" class="btn btn-default next1">
<a href="Jtax_signing_authority.php" class="none">
Details of accounts in which you have signing authority and which have not been included in A to D above</a></button>
<br>



<br>
<button type="button" class="btn btn-default next1">
<a href="Jtax_trustee.php" class="none">
 Details of trusts, created under the laws of a country outside India, in which you are a trustee</a></button>
<br>

<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
</body></html>