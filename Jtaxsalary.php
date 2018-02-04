<!Doctype html>
<html lang="en">
<head>
  <title>JTax tax Salary Information page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale="1">
  <link rel="stylesheet" type="text/css" href="Jtaxpersonalinfo.css">
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
      color:blue;
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
.line
{
margin-top:400px;
}
.footer{
margin-left:20px;
}
.link{
text-decoration:none;
}
.nb
{
height:70px;
font-size:30px;
}
.form
{
margin-left:200px;
margin-right:200px;
}
.h4one
{
margin-left:200px;
}
.success
{
margin-right:20px;
}
.none:hover
{
	text-decoration:none;
}
.footer
{
margin-left:20px;
}
.bottom{
	border-style: inset;
	border-width:2px;

	}
	.none:hover
	{
		text-decoration:none;
	}
	.div2
	{
		margin-left:200px;
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
  
  
  
  
  
  
  
  <h2 class="h4one">Salary</h2><br>
   <form  action="" method="post" align="left" class="form">
 <fieldset>
 <legend>Income from salary</legend>
 Income Chargeable under the head 'Salaries'
 <p class="bg-info">In your Form-16, find this information under Part-B - Details of Salary Paid (Heading 6)</p>
 <br>
 <input type="number" name="ifs" required/>
 <br></br>
 Name of the Employer
 <p class="bg-info">The name of Company / Organization</p>
 <br>
 <input type="text" name="noe" required/>
 <br></br>
 Employer type/Category
 <br></br>
 <select name="et" required>
 <option value="private">Private</option>
 <option value="government">Government</option>
 <option value="public">Public sector unti</option>
 </select>
 <br></br>
 
 
 
 <h3>TDS for Salary</h3>
 <p class="bg-info">Tax Deducted at Source by Employer: Provide this information from your Form 16</p>
 TAN of the Employer 
 <p class="bg-info">In your Form-16, find this under Part-A - TAN of Deductor</p>
 <br>
 <input type="text" name="tan" required/>
 <br></br>
 Tax Deducted at source on Salary
 <br>
 <p class="bg-info">In your Form-16, find this under Part-A: Total of Amount of tax deposited / Remitted</p>
 <br>
 <input type="number" name="td" required/>
 <br>
 <h3>Address of the Employer</h3>
 Pincode
 <br></br>
 <input type="number" name="pc" required\>
 <br></br>
 Address Line
 <br></br>
  <input type="text" name="al" required\>
 <br></br>
 Town/City
 <br></br>
 <input type="text" name="t" placeholder="Hyderabad" required\>
<br></br>
 State
  <br></br>
  <select name="st" required>
  <option value="andaman and nicobar islands">ANDAMAN AND NICOBAR ISLANDS</option>
  <option value="andhra pradesh">ANDHRA PRADESH</option>
  <option value="assam">ASSAM</option>
  <option value="arunanchal pradesh">ARUNANCHAL PRADESH</option>
  <option value="bihar">BIHAR</option>
  <option value="chandigarh">CHANDIGARH</option>
  <option value="chattisgarh">CHATTISGARH</option>
  <option value="dadra and nagar haveli">DADRA AND NAGAR HAVELI</option>
  <option value="daman and diu">DAMAN AND DIU</option>
  <option value="delhi">DELHI</option>
  <option value="goa">GOA</option>
  <option value="gujarat">GUJARAT</option>
  <option value="haryana">HARYANA</option>
  <option value="jammu and kashmir">JAMMU AND KASHMIR</option>
  <option value="jharkand">JHARKAND</option>
  <option value="karnataka">KARNATAKA</option>
  <option value="kerela">KERELA</option>
  <option value="lakshwadeep">LAKSHWADEEP</option>
  <option value="madhya pradesh">MADHYA PRADESH</option>
  <option value="maharashtra">MAHARASHTRA</option>
  <option value="manipur">MANIPUR</option>
  <option value="meghalaya">MEGHALAYA	</option>
  <option value="mizoram">MIZORAM</option>
  <option value="nagaland">NAGALAND</option>
  <option value="orissa">ORISSA</option>
  <option value="pondicherry">PONDICHERRY</option>
  <option value="punjab">PUNJAB</option>
  <option value="rajasthan">RAJASTHAN</option>
  <option value="sikkim">SIKKIM</option>
  <option value="tamil nadu">TAMIL NADU</option>
  <option value="telangana">TELANGANA</option>
  <option value="tripura">TRIPURA</option>
  <option value="uttranchal">UTTARANCHAL</option>
  <option value="uttar pradesh">UTTAR PRADESH</option>
  <option value="west bengal">WEST BENGAL</option>
  </select>
  <br></br> 
 
 
 
  </fieldset>
  <br>
 <button type="submit" class="btn btn-success success" value="submit">Save</button>
 <button  class="btn btn-success" value="next"><a href="Jtaxotherincome.php" class="none">Next</a></button>
<br>
 <hr>
 </form>
 <div class="div2">

 
 
 
 </div>
<br></br>
<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
  

</body>
</html>