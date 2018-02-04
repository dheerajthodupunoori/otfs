<!Doctype html>
<html lang="en">
<head>
  <title>JTax TDS On Immovable Property page</title>
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
.none:hover
{
	text-decoration:none;
}
.text-info1
{
	margin-left:200px;
}
 
.save
{
	background-color:white;
	margin-left:50px;
}
.form
{
	width:400px;
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


<h3 class="h3one">Add a TDS entry (Tax Deducted at Source) for Sale of Immovable Property (1% TDS)</h3>
<br>
<h4 class="h3one">Tax Deducted At Source for Sale of Immovable Property</h4>

<p class="text-info text-info1">Provide this information from TDS certificate provided by the property buyer</p>
<br>
<div class="h3one">



<form action="" method="post" class="form">




<div class="form-group">
  <div class="form-group col-md-12">
    <label for="inputAddress2">PAN of Property Buyer *</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder=""  name="pan" required/>
  </div>
  </div>
  
  
  
  
  <div class="form-group">
  <div class="form-group col-md-12">
    <label for="inputAddress2">Name of the Property Buyer *</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder=""  name="name" required/>
  </div>
  </div>
  
  
   <div class="form-group">
  <div class="form-group col-md-12">
    <label for="inputAddress2">Total Tax Deducted *</label>
    <input type="number" class="form-control" id="inputAddress2" placeholder=""  name="ttd" required/>
  </div>
  </div>
  
  
  
  
  
   <div class="form-group">
  <div class="form-group col-md-12">
    <label for="inputAddress2">Tax Deducted claimed for this year *</label>
	<p class="bg-info">Usually this amount is same as Total Tax Deducted. </p>
    <input type="number" class="form-control" id="inputAddress2" placeholder=""  name="tdc" required/>
  </div>
  </div>
  
  
  
  <div class="form-group">
  <div class="form-group col-md-12">
    <label for="inputAddress2">Financial Year in which TDS was deducted </label>
	<p class="bg-info">Usually this is the same as the Financial Year of the return (2016-2017).  </p>
    <select name="fy">
	<option value="2014-2015">2014-2015</option>
  <option value="2015-2016">2015-2016</option>
  <option value="2016-2017">2016-2017</option>
  <option value="2017-2018">2017-2018</option>
  <option value="2018-2019">2018-2019</option>
  </select>
 <br></br>
  </div>
   </div>
   
   
   
   <button type="submit" class="btn btn-primary save">
  <a href="Jtaxtaxespaid.php" class="none">Save</a>
  </button>
 
</form>
</div>
<br>

<a href="Jtaxtaxespaid.php" class="h3one">Back to TDS Summary</a>
<br>

<br>
<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
</body></html>