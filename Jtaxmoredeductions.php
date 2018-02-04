<!Doctype html>
<html lang="en">
<head>
  <title>JTax More Deductions page</title>
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
.h4one
{
	margin-left:200px;
}
.form
{
	margin-left:200px;
	width:500px;
}
.none:hover
{
	text-decoration:none;
}
.line
{
	border-style: inset;
	border-width: 2px;
}
.bottom{
	border-style: inset;
	border-width: 2px;
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

<h3 class="h3one">More deductions Under Section 80</h3>
<br></br>

<form action="" method="post" class="form">

  <div class="form-group">
  
       <h4>Section 80D: Deductions for Medical Insurance</h4>
  
       <p class="bg-info">Deductions for Medical Insurance Premium or Preventive Health Check-Up Fees Paid by you </p>

       <label>Medical Insurance Premium for you, your spouse, or dependent children </label>
	
       <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="mip">
	   <br></br>
  </div> 
  
  <div class="form-group">
  
	    <label>Preventive Health Check-Up fees for you, your spouse, or dependent children </label>
	
       <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="phf">
	   <br>
  </div>
  
  <div class="form-group">
  
	   <label>Medical Insurance Premium for your parents </label>
	<p class="bg-info">Medical insurance premium paid by you for your parents. </p>
       <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="phf">
	   <br>
 </div>  
 
 <div class="form-group">
  
	 <label>Are your parents who hold the policy senior citizens? </label>
	 <p class="bg-info">60 years or older  </p>
	 <select name="sc">
	 <option value="Policy holder is Senior Citizen">Policy holder is Senior Citizen</option>
<option value="No Policy holder is Senior Citizen">No Policy holder is Senior Citizen</option>   
</select> 
  </div>
  <br>
 
  <hr class="line">
  
  <br>
  
  <h4>Section 80CCG - Rajiv Gandhi Equity Saving Scheme</h4>
  
  <div class="form-group">
  
	    <label>Investment made under Rajiv Gandhi Equity Saving Scheme</label>
	
       <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="80ccg">
	   <br>
  </div>
  <br>
  
  
   <hr class="line">
  
  <br>
  
  <h4>Section 80E - Education Loan on higher studies (Graduate or PostGraduate)</h4>
  <p class="text-info">You can claim tax deduction on the interest paid on an education loan for higher studies</p>
  <div class="form-group">
  
	    <label>Interest on higher education loan paid this year</label>
	<p class="bg-info">Interest paid by you on loan taken out by you. Loan can be for yourself or your spouse or your children </p>
       <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="80e">
	   <br>
  </div>
  <br>
  
   <hr class="line">
  
  <br>
  
 <h4> <b>The following deductions are applicable less often.</b></h4>
 <br>
 
 
 <h4>Section 80CCC - Contribution to Pension Plan / Annuity Fund</h4>
  <div class="form-group">
	    <label>Contribution amount to Pension Plan / Annuity Fund for Section 80CCC</label>
       <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="80ccc">
	   <br>
  </div>
   <hr class="line">  
  <br>
  
  
  
  <h4>Section 80CCD (1) and (1B) - Employee Contribution to New Pension Scheme (NPS).</h4>
  <h5>Employee's contribution to the New Pension System (NPS).</h5>
  <p class="text-info">Please enter your own contribution to NPS.
ClearTax will automatically split it into Section 80 CCD(1) and CCD(1B) in your tax return.
The split will be optimised to give you maximum tax savings.</p>
  <div class="form-group">
	    <label>Contribution towards Section 80CCD(1)</label>
       <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="80CCD(1)">
	   <br>
  </div>
   <hr class="line">  
  <br>
  
  
  
   
  <h4>Section 80CCD(2) - Employer Contribution in NPS</h4>
   <div class="form-group">
	    <label>Employers contribution towards NPS (upto 10% of Salary).</label>
       <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="80CCD(2)">
	   <br>
  </div>
   <hr class="line">  
  <br>
  
  
  
   
  <h4>Section 80GG - Deduction for House Rent. Self-employed or Salary with no HRA.</h4>
  <h5>Not a commonly applicable deduction. Please be careful while claiming. If you receive HRA benefit, then you cannot claim this deduction.</h5>
  
  <h5>If you are looking to claim HRA, this is NOT the section.</h5>
  
  <p class="text-info">Eligibility: Your spouse or minor child should not own House Property in same town where paying rent. Self occupied house property Interest deduction should not have been availed.</p>
  <br>
   <div class="form-group">
	    <label>Rent Paid Per Month</label>
       <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="rp">
	   <br>
  </div>
  
  
  
   <div class="form-group">
	    <label>Number of Months Rent Paid</label>
		<br>
      <select name="nom">
	  <option value="1">1</option>
	   <option value="2">2</option>
	    <option value="3">3</option>
		 <option value="4">4</option>
		  <option value="5">5</option>
		   <option value="6">6</option>
		    <option value="7">7</option>
			 <option value="8">8</option>
			  <option value="9">9</option>
			   <option value="10">10</option>
			    <option value="11">11</option>
				 <option value="12">12</option>
				 </select>
	   <br>
  </div>
  <hr class="line">  
  <br>
  
  
  <h4>Section 80DDB: Deductions for treatment of specified diseases and ailments</h4>
  <h5 class="text-info">This deduction is for certain specified diseases. (It is not a commonly applicable deduction). Please be careful while claiming this deduction.</h5>
  <div class="form-group">
    <label>Medical Treatment Costs for specified Diseases under Section 80DDB</label>
  <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="mtc">
	   <br>
  </div>
  
  <div class="form-group">
    <label>Age of person for whom deduction is being claimed. </label>
	<br>
<select name="aop">
<option value="Below 60 Years">Below 60 Years</option>
<option value="60 to 79 Years">60 to 79 Years</option>
<option value="80 Years or Above">80 Years or Above</option>
</select>
	   <br>
  </div>
  
  
   <hr class="line">  
  <br>
  
  
  
  <h4>Section 80EE - Interest on Home Loan</h4>
  <p class="text-info">Read about the eligibility criteria of Section 80EE: Deduction under section 80EE is available on 
  interest on loan on your first house purchased. This purchase should be in the Financial Year 2016-17
  (between April 1st, 2016 to March 31st 2017).
  The purchase price of the house can be upto Rs. 50 Lakhs and the total home loan can be upto Rs. 35 Lakhs.</p>
   <div class="form-group">
    <label>Deductions under Section 80EE</label>
  <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="80ee">
	   <br>
  </div>
  
    <hr class="line">  
  <br>
  
  
  
  <h4>Section 80QQB - Royalty Received on books</h4>
  <p class="text-info">Deduction for Author of literary/scientific/artistic book. Royalty/copyright-fees/lump-sum consideration are eligible for deduction.</p>
   <div class="form-group">
    <label>Enter the deduction amount</label>
  <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="80qqb">
	   <br>
  </div>
  
    <hr class="line">  
  <br>
  
  
  
  
   <h4>Section 80RRB - Income on Patents/Inventions</h4>
  <p class="text-info">Deduction for Patentee - Royalty/transfer-of-rights/lump-sum consideration are eligible for deduction.</p>
   <div class="form-group">
    <label>Enter the deduction amount</label>
  <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="80rrb">
	   <br>
  </div>
  
    <hr class="line">  
  <br>
  
  
  
   <h4>Section 80GGA - Contribution To Research or Rural Development</h4>
  <p class="text-info">For example, Helpage India or CRY are eligible under Section 80GGA</p>
   <div class="form-group">
    <label>Contribution to Research & Development or Rural Development</label>
  <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="80gga">
	   <br>
  </div>
  
    <hr class="line">  
  <br>
  
  
  
  <h4>Section 80GGC - Contribution To Political Party</h4>
  
   <div class="form-group">
    <label>Contribution or Donations to Political Party</label>
  <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="80ggc">
	   <br>
  </div>
  
    <hr class="line">  
  <br>
  
  
  
  
  
  <h4>Section 80JJA</h4>
  
   <div class="form-group">
    <label>Deduction exempting profits from bio-degradable waste business </label>
  <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="0" name="80jja">
	   <br>
  </div>
  
    <hr class="line">  
  <br>
  
  
  
  
  
    <button type="button" class="btn btn-success">
	<a href="Jtaxotherdeductions.php" class="none">
	Save</a></button>
	
	
	<br></br>
	
	
</form>
<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
</body>
</form>