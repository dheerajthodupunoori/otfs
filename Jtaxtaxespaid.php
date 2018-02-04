<!Doctype html>
<html lang="en">
<head>
  <title>JTax Taxes Paid page</title>
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
	margin-left:200px;
}
.text-info
{
	margin-left:300px;
	width:500px;
}
.p1
{
	margin-left:350px;
}
.none:hover
{
	text-decoration:none;
}
.next
{
	margin-left:450px;
}
.line
{
	border-style: inset;
	border-width: 2px;
	margin-left:100px;
	margin-right:100px;
}
.line1
{
	margin-left:200px;
	margin-right:600px;
	border-style: inset;
	border-width: 2px;
}
.h3two
{
	margin-left:200px;
}
.rental
{
margin-left:200px;
background-color: rgb(255,255,255);
color:black;
}
.text-info1
{
	margin-left:200px;
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

<h3 class="h3one">Summary of Taxes deducted at Source (TDS)</h3>
<br>
<h4 class="h4one">Specify TDS which was deducted between the period of April 1, 2016 to March 31, <?php echo date("Y"); ?> .</h4>
<p class="text-info">Tax deductions from your Salary by your employer should NOT be entered here.</p>
<br>
<p class="p1">Go to next if you do not have any TDS entries.</p>
<button type="button" class="btn btn-default next">
<a href="Jtaxselftaxpayments.php" class="none">
Go to Next>></a></button>
<br>
<hr class="line">
<br>


<h3 class="h3two">Non Salary TDS</h3>
<br>
 <button type="button" class="btn btn-primary btn-md rental">
  <a href="Jtaxnonsalarytdsentry.php" class="none">
  Add Non-Salary TDS Entry</a></button>
  <br></br>
  
   <dl class="h3two">
    <dt>In this section, for example you can add:</dt>
    <dd>- Form-16A or TDS Certificates issued by your bank over Interest/ FD Income</dd>
   
    <dd>- Form-16A on professional or consulting income</dd>
  </dl> 
<br>
<p class="h3two">Have a <b> Form 26AS-PDF?></b>
<br>
Upload it and ClearTax will import all the TDS entries
</p>  
<br>
<div class="h3two">
 <form action="" method="post" name="form">
  <div class="form-group">
    <label >Choose File and Upload</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="button" class="btn btn-primary btn-md">Save</button>
   <button type="button" class="btn btn-primary btn-md">Cancel</button>
</form>
   </div>
   
   <hr class="line1">
<br>


<h3 class="h3two">TDS on Sale of Immovable Property</h3>
<br>
<p class="text-info text-info1">If you sell land, house, property or building etc (immovable property), the buyer may have deducted
 TDS at the rate of 1% on the sale price of the property and
 issued you a TDS certificate. You need to specify that TDS deduction details here.</p>
 
 
 
 <button type="button" class="btn btn-primary btn-md rental">
  <a href="Jtaxtdsonimmovable.php" class="none">
  Add TDS on Sale of Immovable Property</a></button>
  <br></br>
  <hr class="line1">
<br>
<h3 class="h3two">Tax Collected at Source (TCS)</h3>
<br>
<button type="button" class="btn btn-primary btn-md rental">
  <a href="Jtaxtcsentry.php" class="none">
  Add TCS Entry</a></button>
  <br></br>
  <p class="text-info text-info1">In this section, you can add TCS entries (For example - on purchase of cars).</p>
  <br></br>
  <hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
</body></html>