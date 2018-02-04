<!Doctype html>
<html lang="en">
<head>
  <title>JTax Add Income Under 44AD page</title>
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
.div2
{
	margin-left:200px;
	width:700px;
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
      <button type="button" class="btn btn-primary info"><a href="Jtaxpersonalinfo.php" class="link">Information</a></button>
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


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="h3one">
				Edit Presumptive Income Under Section 44AD
			</h3>
			<h4 class="h3one">
				Section 44 AD Details
			</h4>
		</div>
	</div>
</div>

<br>

<div class="container-fluid div2">
	<div class="row">
		<div class="col-md-4">
		
		
		
		
	
		</div>
		<div class="col-md-4">
		<label>	 Non-Digital Transactions 
(8%)</label>
		</div>
		<div class="col-md-4">
			 <label>	Digital Transactions 
(6%)</label>
		</div>
	</div>
	
	
	<br>
	
	
	
	<div class="row">
	
	<form action="" method="post" class="form">
	
		<div class="col-md-4">
			  <label>	Gross turnover or Gross Receipts *</label>
		</div>
		
		
		<div class="col-md-4">
			
				<div class="form-group">
					 
					<input type="number" class="form-control" id="exampleInputEmail1" name="ndt1" required />
				</div>
		</div>
		<div class="col-md-4">
			
				<div class="form-group">
					 
					<input type="number" class="form-control" id="exampleInputEmail1" name="dt1" required />
				</div>
		</div>
		
				<div class="col-md-4">
			  <label>	Total Income as per your calculation *</label>
		</div>
				
				<div class="col-md-4">
			
				<div class="form-group">
					 
					<input type="number" class="form-control" id="exampleInputEmail1" name="ndt2" required />
				</div>
		</div>
		<div class="col-md-4">
			
				<div class="form-group">
					 
					<input type="number" class="form-control" id="exampleInputEmail1" name="dt2" required />
				</div>
		</div>
				
				
		
		
		<h4 class="h4one">Financial Particulars of the Business (only for ITR-4)</h4>
		
		<div class="form-row">
    <div class="form-group col-md-6">
      <label>Amount of total Sundry Debtors * </label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="" name="sd" required />
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Amount of total Sundry Creditors *
</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="" name="sc" required />
    </div>
  </div>
  
  
  
		
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Amount of the cash balance *</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="" name="sd" required />
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Amount of total Stock-in-trade *
</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="" name="sc" required />
    </div>
  </div>
		<button type="submit" class="btn btn-primary save">
  <a href="Jtaxbussiness.php" class="none">Save</a>
  </button>
		</form>
	</div>
	</div>
	<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
  </body>
</html>
