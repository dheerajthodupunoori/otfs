<!Doctype html>
<html lang="en">
<head>
  <title>JTax Schedule ESR page</title>
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
	width:1000px;
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
<h3>ESR Details</h3>
<br>
<form action="" method="post" class="form">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			 <label>Section</label>
		</div>
		<div class="col-md-4">
			<label>Amount Debited to P&L </label>
		</div>
		<div class="col-md-4">
			 <label>Amount of Deduction allowable</label>
		</div>
	</div>
</div>

<br></br>


<div class="container-fluid">
	<div class="row">
	
		<div class="col-md-4">
			 <label>35(1)(i)</label>
		</div>
		
		<div class="col-md-4">
		
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(1)(i) debited" />
					</div>
				</div>
				
		</div>
		<div class="col-md-4">
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(1)(i) allowable" />
					</div>
				</div>
				
			
		</div>
	</div>
</div>




<br></br>


<div class="container-fluid">
	<div class="row">
	
		<div class="col-md-4">
			 <label>35(1)(ii)</label>
		</div>
		
		<div class="col-md-4">
		
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(1)(ii) debited" />
					</div>
				</div>
				
		</div>
		<div class="col-md-4">
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(1)(ii) allowable" />
					</div>
				</div>
				
			
		</div>
	</div>
</div>

<br></br>


<div class="container-fluid">
	<div class="row">
	
		<div class="col-md-4">
			 <label>35(1)(iii</label>
		</div>
		
		<div class="col-md-4">
		
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(1)(iii) debited" />
					</div>
				</div>
				
		</div>
		<div class="col-md-4">
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(1)(iii) allowable" />
					</div>
				</div>
				
			
		</div>
	</div>
</div>



<br></br>


<div class="container-fluid">
	<div class="row">
	
		<div class="col-md-4">
			 <label>35(1)(iv)</label>
		</div>
		
		<div class="col-md-4">
		
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(1)(iv) debited" />
					</div>
				</div>
				
		</div>
		<div class="col-md-4">
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(1)(iv) allowable" />
					</div>
				</div>
				
			
		</div>
	</div>
</div>



<br></br>


<div class="container-fluid">
	<div class="row">
	
		<div class="col-md-4">
			 <label>35(2AA)</label>
		</div>
		
		<div class="col-md-4">
		
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(2AA) debited" />
					</div>
				</div>
				
		</div>
		<div class="col-md-4">
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(2AA) allowable" />
					</div>
				</div>
				
			
		</div>
	</div>
</div>


<br></br>


<div class="container-fluid">
	<div class="row">
	
		<div class="col-md-4">
			 <label>35(2AB)</label>
		</div>
		
		<div class="col-md-4">
		
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(2AB) debited" />
					</div>
				</div>
				
		</div>
		<div class="col-md-4">
				<div class="form-group">
					 
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" name="35(2AB) allowable" />
					</div>
				</div>
				
			
		</div>
	</div>
</div>
<br></br>
<button type="submit" class="btn btn-primary save">
  <a href="Jtaxbussiness.php" class="none">Save</a>
  </button>

</form>
<a href="Jtaxbussiness.php">Back to Bussiness And Profession</a>
</div>
<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
  </body>
</html>