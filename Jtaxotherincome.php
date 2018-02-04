<!Doctype html>
<!Doctype html>
<html lang="en">
<head>
  <title>JTax tax Other Income Information page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale="1">
 <link rel="stylesheet" type="text/css" href="Jtaxpersonalinfo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
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
.solid{
 border-width: 2px;
  border-style:inset;
}
.footer
{
margin-left:20px;
}

.none:hover
{
	text-decoration:none;
}





.h2one{
margin-left:200px;
}
.form{
margin-left:200px;
width:500px;
}
.solid{
 border-width: 2px;
  border-style:inset;
}
.footer
{
margin-left:20px;
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
  
  
  
  
  
  
  
  
  
 
  
  <h2 class="h2one">Income other than salary</h2>
  <br>
  <form action="" method="post" class="form">
  <fieldset>
  <legend>Interest Income</legend>
  Interest Income from Saving Bank and Post office deposits 
  <br></br>
  <input type="number" name="ifsb" />
  <br></br>
  Other Interest Income: From Fixed deposits etc
  <br>
  <p class="bg-info">Interest from sweep accounts converted to FDs also specified here </p>
  <input type="number" name="oin" />
  <br></br>
 
 <legend>Other income</legend>
 Any Other Income
 <br>
 <p class="bg-info">Report any other income which is not part of Income from Salary, 
House Property, Capital Gain or Business and Profession head.
Gifts can be declared as Income here.</p>
<input type="number" name="aoi" />
<br></br>

<legend>Exempt Income</legend>
 Dividend earned
 <br>
 <p class="bg-info">Dividend from shares. Income earned on investments in Mutual Funds, ULIPs, UTI.</p>
 <input type="number" class="de" />
 <br></br>
 Exempt Interest Income
 <br>
 <p class="bg-info">Example: Interest earned on PPF</p>
 <input type="number" class="eii"/>
 <br></br>
 Other miscellaneous exempt Income
 <br>
 <p class="bg-info">Specify any other exempt income</p>
 <input text="number" class="mei"/>
 <br></br>
 <legend>Agriculture Income</legend>
 Gross Agriculture Receipt
 <br>
 <p class="bg-info">Specify gross agricultural income</p>
 <input type="nunber" class="gar"/>
 <br></br>
 Expenditure On Agriculture
 <br>
 <p class="bg-info">Specify expenditure on agriculture sources</p>
 <input type="number" class="e"/>
 <br></br>
Unabsorbed Agriculture Loss
<br>
<p class="bg-info">Specify unabsorbed agriculture loss</p>
<input type="number" class="l"/>
<br></br>
</fieldset>
<button type="submit" class="btn btn-success" value="submit"><a href="Jtaxhouse.php" class="none">Save</a></button>
</form>
<br>
<hr class="solid">
  <p class="footer">JTax is a product by JUGGERNAUTS</p>
 </body>
 </html>
 