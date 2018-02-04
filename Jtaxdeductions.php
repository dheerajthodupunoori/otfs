<!Doctype html>
<html lang="en">
<head>
  <title>JTax Deductions page</title>
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
	
	margin-left:200px;
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



<h3 class="h3one">Deductions Under Section 80</h3>
<br></br>


<form action="" method="post" class="form">
  <div class="form-group">
  
  <h4>Investments under Section 80C</h4>
  
  <p class="bg-info">You can claim a deduction of upto Rs. 1,50,000 under this section. 
Add up all your 80C deduction and specify total amount here. </p>

    <label>Investment for Section 80C </label>
	
    <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="s80">
	<br>
	  <p class="bg-info">Section 80C includes contributions to LIC / Insurance premium, PPF, EPF, NSC, ELSS Mutual Funds, Children school fees, Payment of Principal in Housing Loan & other eligible items.</p>
<br> 
 <hr class="line">
  </div>
  
  <br></br>
 
 <div class="form-group">
  <h4>Section 80TTA: Deduction for Interest earned on Savings Bank Account</h4>
    <label>Interest earned on Savings Bank Account</label>
	
    <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="sba">
	<br>
	  <p class="bg-info">You do not need to enter a value for the 80TTA deduction here.
ClearTax automatically picks it up from your<a href="Jtaxotherincome.php"> declared interest incomefrom Savings Bank Accounnt and post office deposits</a></p>
 <br><hr class="line"> </div>
  <br></br>
  <div class="form-group">
   <h4>Section 80G : Donations to charitable organizations</h4>
   <br>
   <p class="bg-info">The government requires itemized details of donations for Section 80G</p>
  <br>
   <button type="button" class="btn btn-primary btn-md section80g">
   <a href="Jtaxsection80g.php" class="none">
   Add or Remove Donation Under Section 80G</a></button> 
   <br></br>
   </div>
   <hr class="line">
   <br>
    <button type="button" class="btn btn-success">
	<a href="Jtaxmoredeductions.php" class="none">
	Save</a></button>
</form>

<br></br>


	<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
  </body>
</html>
