<!Doctype html>
<html lang="en">
<head>
  <title>JTax Audit Information page</title>
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

	}

.div1
{
	margin-left:200px;
	
}
.form
{
	width:700px;
}
.save
{
	background-color:white;
	margin-left:500px;
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

<h3>Audit Information and Filing Representative Information</h3>
<br>

<form action="" method="post" class="form">

<input type="checkbox" name="liable44aa" ><b> Are you liable to maintain accounts as per section 44AA?</b>

<br></br>
	 <input type="checkbox" name="liable44ab" value="Bike"><b>Are you liable for audit under section 44AB?</b>
<br></br>

<input type="checkbox" name="liable44ab" value="Bike"><b>If liable for audit under section 44AB, were the accounts audited by an accountant?</b>
<br></br>


<div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Name of the auditor (proprietorship/ firm)
</label>

      <input type="text" class="form-control" name="noa" />
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Auditor Name</label>
        <input type="text" class="form-control" id="inputCity" name="an" />
    </div>  
	</div>



<div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Membership Number of Auditor</label>

      <input type="number" class="form-control" name="mn" />
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Auditor Registration Number</label>
        <input type="number" class="form-control" id="inputCity" name="arn" />
    </div>  
	</div>




<div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Audit Firm PAN


</label>

      <input type="text" class="form-control" name="afp" />
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Date of report of the Audit</label>
        <input type="number" class="form-control" id="inputCity" name="dra" placeholder="dd/mm/yyyy" />
    </div>  
	</div>



<div class="form-row">
   <div class="form-group col-md-12">
      <label for="inputState">Date of furnishing the Audit Report


</label>

      <input type="text" class="form-control" name="dof" placeholder="dd/mm/yyyy"	  />
	  
    </div> </div>

<br></br>


<input type="checkbox" name="92e" ><b> Is Taxpayer liable to furnish a report under Section 92E?</b>
<p class="bg-info">If you are liable to furnish this report, please mention Date of Furnishing report in the 'Other audits' section on the right.
</p>

<br>

<input type="checkbox" name="pe" ><b> In the case of non-resident, is there a permanent establishment (PE) in India?</b>

<br></br>
<h3>Filing Representative</h3>
<br></br>

<label>Is Return Filed By Representative </label>
<br>
<select name="rfr">
<option value="1">yes</option>
<option value="2">no</option>
</select>
<br></br>




<div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Representative Name

</label>

      <input type="text" class="form-control" name="rs" />
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Representative PAN</label>
        <input type="text" class="form-control" id="inputCity" name="rp"  />
    </div>  
	</div>



<br></br>

<h3>Representative Address</h3>
<br></br>

<div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Pincode *

</label>

      <input type="number" class="form-control" name="pc" required/>
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Address Line *</label>
        <input type="text" class="form-control" id="inputCity" name="a"  required/>
    </div>  
	</div>
	
	
	<div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Town / City *

</label>

      <input type="text" class="form-control" name="t" required/>
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Address Line *</label>
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
  