<!Doctype html>
<html lang="en">
<head>
  <title>JTax Bussiness And Profession page</title>
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
	
	margin-left:400px;
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
.line
{
	margin-left:200px;
	margin-right:100px;
	border-style: inset;
	border-width:2px;
}
.container-fluid
{
	margin-left:200px;
	width:800px;
}
.row1
{
	width:300px;
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


<h3 class="h3one">Income From Business and Profession</h3><br>
<button type="button" class="btn btn-default save">
<a href="Jtaxdeductions.php" class="none">
Go to Next>></a></button>
<br></br>


<hr class="line">


 <div class="container-fluid">
 
 
 
 
	<div class="row">
		<div class="col-md-4">
			<ul class="breadcrumb">
				<li>
					<b>Specify the nature of Bussiness</b> <span class="divider">/</span>
				</li>				
			</ul> 
			
			<button type="button" class="btn btn-default btn-block">
				<a href="Jtax_nature_bussiness_entry.php" class="none">
				Add Entry</a>
			</button>
		</div>
		<div class="col-md-4">
			<ul class="breadcrumb">
				<li>
					<b>Remuneration From Partnership Firm</b><span class="divider">/</span>
				</li>
			</ul> 
			<button type="button" class="btn btn-default btn-block">
				<a href="Jtax_remuneration_firm.php" class="none">
				Fill Details</a>
			</button>
		</div>
		<div class="col-md-4">
			<ul class="breadcrumb">
				<li>
				<b>No Books of Accounts Maintained</b> <span class="divider">/</span>
				</li>
				
			</ul> 
			<button type="button" class="btn btn-default btn-block">
				<a href="" class="none">
				Fill Details</a>
			</button>
		</div>
	</div>
	
	
	
	<br></br>
	<div class="row">
	
	
		<div class="col-md-12">
		
		
		
			<ul class="breadcrumb">
				<li>
					<b>Presumptive Income for filing ITR-4</b> <span class="divider"></span>
				</li>
				
			</ul> 
			<button type="button" class="btn btn-lg btn-info ">
			<a href="Jtax_add_income_44ad.php" class="none">	Add Income Under 44AD</a>
			</button> 
			<button type="button" class="btn btn-lg btn-info ">
				<a href="Jtax_add_income_44ada.php" class="none">Add Income Under 44ADA</a>
			</button> 
			<button type="button" class="btn btn-info btn-lg ">
				<a href="Jtax_add_income_44ae.php" class="none">Add Income Under 44AE</a>
			</button>
		</div>
	</div>
	
	<br></br>
	
	
	<hr class="line">
	
	<div class="row"> 
	
	
		<div class="col-md-12">
			<h3 class="text-center">
				Prepare your ITR-3
			</h3>
		</div>
	</div>
	
	<br></br>
	
	<div class="row">
	
	
		<div class="col-md-6">
			<ul class="breadcrumb">
				<li>
					<b>Balance Sheet + P&L Account</b> <span class="divider">/</span>
				</li>
				
			</ul> 
			<button type="button" class="btn btn-lg">
			<a href="Jtax_pl_account.php" class="none">	Fill Details</a>
			</button>
		</div>
		
		
		
		<div class="col-md-6">
			<ul class="breadcrumb">
				<li>
					<b>Additions to P&L in Schedule BP</b> <span class="divider">/</span>
				</li>
				
			</ul>
			<div class="row">
				<div class="col-md-6">
					 
					<button type="button" class="btn btn-info">
					<a href="jtax_section40.php" class="none">	Section 40
					</a></button>
				</div>
				<div class="col-md-6">
					 
					<button type="button" class="btn btn-info">
					<a href="Jtax_section43b.php" class="none">	Section 43B
					</a></button>
				</div>
			</div>
			<br></br>
			<div class="row">
				<div class="col-md-12">
					 
					<button type="button" class="btn btn-info">
						<a href="Jtax_othersections.php" class="none">Other Sections</a>
					</button>
				</div>
			</div>
		</div>
	</div>
	
	
	<br></br>
	<hr class="line">
	
	<div class="row row1">
	 
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li>
					<b>Schedule BP</b> <span class="divider"></span>
				</li>
				
			</ul> 
			<button type="button" class="btn btn-info">
				<a href="Jtax_schedule_bp.php" class="none">Fill Details</a>
			</button>
			
			<br>
			
			<ul class="breadcrumb">
				<li>
					<b>Depreciation</b> <span class="divider"></span>
				</li>
				
			</ul> 
			<button type="button" class="btn btn-info">
			<a href="Jtax_depreciation.php" class="none">	Fill Details</a>
			</button>
			
			<br>
			
			<ul class="breadcrumb">
				<li>
					<b>Other Information for your ITR</b> <span class="divider"></span>
				</li>
				
			</ul> 
			<button type="button" class="btn btn-info">
				<a href="" class="none">	Fill Details</a>
			</button>
			
			<br>
			
			
			<ul class="breadcrumb">
				<li>
					<b>Audit information</b> <span class="divider"></span>
				</li>
				
			</ul> 
			<button type="button" class="btn btn-info">
				<a href="Jtax_audit_info.php" class="none">	Fill Details</a>
			</button>
			<br>
		</div>
	</div>
	
	
	<br></br>
	
	<div class="row row1">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li>
					<b>Speculative Business & Profession Income</b> <span class="divider"></span>
				</li>
				
			</ul> 
			<button type="button" class="btn btn-info">
			<a href="Jtax_b_p_income.php" class="none">	Fill Details</a>
			</button>
		</div>
	</div>
	<br></br>
	<hr class="line">
	
	<br>
	
	<div class="row row1">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li>
					<b>Deductions</b> <span class="divider"></span>
				</li>
				
			</ul>
			
			
			
			<div class="row">
				<div class="col-md-6">
					 
					<button type="button" class="btn btn-info">
						<a href="Jtax_section10a.php" class="none">	Section 10A/AA/B</a>
					</button>
				</div>
				
				
				<div class="col-md-6">
					 
					<button type="button" class="btn btn-info">
						<a href="Jtax_section_ia.php" class="none">	Section 80 IA/IB/IC/IE</a>
					</button>
				</div>
				
				
			</div>
			
			<br>
			
			<ul class="breadcrumb">
				<li>
					<b>Schedule ESR</b> <span class="divider"></span>
				</li>
				
			</ul>
			<button type="button" class="btn btn-info">
				<a href="Jtax_schedule_esr.php" class="none">	Fill Details</a>
			</button>
			
			<br>
			
			<ul class="breadcrumb">
				<li>
					<b>Schedule AL: Assets & Liabilities at the end of FY</b> <span class="divider"></span>
				</li>
				
			</ul>
			<button type="button" class="btn btn-info">
			<a href="" class="none">	Fill Details</a>
			</button>
		</div>
	</div>
	
	
	<hr class="line">
	

	
	
	
	
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Quantitative Details
			</h3>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-md-4">
			<ul class="breadcrumb">
				<li>
					<b>Details of Trading Concern</b> <span class="divider"></span>
				</li>
				</ul>
			<button type="button" class="btn btn-info">
				<a href="Jtax_trading_concern.php" class="none">	Fill Details</a>
			</button>
		</div>
		
		
		
		<div class="col-md-4">
			<ul class="breadcrumb">
				<li>
					<b>Details of Manufacturing Concern (Raw Materials)</b> <span class="divider"></span>
				</li>
				</ul>
			<button type="button" class="btn btn-info">
				<a href="Jtax_raw_materials.php" class="none">	Fill Details</a>
			</button>
		</div>
		
		
		
		<div class="col-md-4">
			<ul class="breadcrumb">
				<li>
					<b>Details of Manufacturing Concern (Finished Products)</b> <span class="divider"></span>
				</li>
				</ul>
			<button type="button" class="btn btn-info">
				<a href="Jtax_finished_products.php" class="none">	Fill Details</a>
			</button>
		</div>
	</div>
	
	<br>
	<hr class="line"><br>
	
	
	
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li>
					<b>Schedule ICDS: Effect of Income Computation Disclosure Standards on profit</b> <span class="divider"></span>
				</li>
				</ul>
			<button type="button" class="btn btn-info">
				<a href="Jtax_schedule_icds.php" class="none">	Fill Details</a>
			</button>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
	
	<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
  </body>
</html>














