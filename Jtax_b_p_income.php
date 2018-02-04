<!Doctype html>
<html lang="en">
<head>
  <title>JTax Speculative Business & Profession Income page</title>
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

<h3>Schedule Business and Profession - Income from Business and Profession</h3>
<br>

<form action="" method="post" class="form">
 
 <label>Profit before tax as per P/L Account. *</label>
 <br>
 
  <input type="number" class="form-control" id="inputCity" name="pl" required/>
  <br>
  
  <h4>Income from other sources credited to P&L </h4>
  <br></br>
  
  
   <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Salaries *</label>
	  
      <input type="number" class="form-control" name="s" required/>
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">House Properties *</label>
        <input type="number" class="form-control" id="inputCity" name="hp" required/>
    </div>  
  </div>
  
  <br>
 
  
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState"> Capital Gains *</label>

      <input type="number" class="form-control" name="cg" required/>
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Any Other Sources *</label>
        <input type="number" class="form-control" id="inputCity" name="aos" required/>
    </div>  
  </div>
  
   <div class="form-row">
   <div class="form-group col-md-12">
      <label for="inputState"> u/s 115BBF *</label>

      <input type="number" class="form-control" name="us" required/>
	  
    </div>
  </div>
  <hr class="line">
<h4>Expenses from other sources debited to P&L </h4>
<br></br>
  
  
   <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Salaries *</label>
	  
      <input type="number" class="form-control" name="s1" required/>
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">House Properties *</label>
        <input type="number" class="form-control" id="inputCity" name="hp1" required/>
    </div>  
  </div>
  
  <br>
 
  
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState"> Capital Gains *</label>

      <input type="number" class="form-control" name="cg1" required/>
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Any Other Sources *</label>
        <input type="number" class="form-control" id="inputCity" name="aos1" required/>
    </div>  
  </div>
  
   <div class="form-row">
   <div class="form-group col-md-12">
      <label for="inputState"> u/s 115BBF *</label>

      <input type="number" class="form-control" name="us1" required/>
	  
    </div>

	</div>
	
	
	 <div class="form-row">
   <div class="form-group col-md-12">
      <label for="inputState">Exempt Income credited to P&L *</label>

      <input type="number" class="form-control" name="ei" required/>
	  
    </div>

	</div>
	

	
	
 <label>Depreciation as per books (debited to P&L). *</label>
 <br>
 
  <input type="number" class="form-control" id="inputCity" name="pl" required/>
  <br>
	
	
	
	 <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState"> Excess Amount Deduction under section 35AC *

</label>

      <input type="number" class="form-control" name="ead" required/>
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Any other amount allowable as deduction *
</label>
        <input type="number" class="form-control" id="inputCity" name="aoa" required/>
    </div>  
  </div>
  
  
   <button type="submit" class="btn btn-primary save">
  <a href="Jtaxbussiness.php" class="none">Save</a>
  </button>
  
  
 </form></div> 
 
 
 <hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
  </body>
</html>
  
  
  