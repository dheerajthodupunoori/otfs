<!Doctype html>
<html lang="en">
<head>
  <title>JTax Section IA page</title>
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
<h3>Deductions Under Section 80IA, IB, IC/IE</h3>
<br>
<h4><b>Deductions under section 80-IA
</b></h4><br>
<form action="" method="post" class="form">


<div class="form-row">
   <div class="form-group col-md-4">
      <label for="inputState"> 
Infastructure facitlity (80IA(i))</label>

      <input type="number" class="form-control" name="if" />
	  
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Telecommunication Services (80IA(ii))</label>
        <input type="number" class="form-control" id="inputCity" name="ts"/>
    </div>  
	 <div class="form-group col-md-4">
      <label for="inputCity">Industrial Park and SEZs (80IA(iii))</label>
        <input type="number" class="form-control" id="inputCity" name="ip" required/>
    </div>  
	</div>




<div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Power (80IA(iv))</label>

      <input type="number" class="form-control" name="power" required/>
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Revival of power generating plant (80IA(vi))</label>
        <input type="number" class="form-control" id="inputCity" name="revival" required/>
    </div>  
	</div>

<br></br>



<h4><b>Deductions under section 80-IB
</b></h4><br>

<div class="form-row">
   <div class="form-group col-md-4">
      <label for="inputState"> 

Small-scale Industry</label>

      <input type="number" class="form-control" name="ssi" />
	  
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Industrial undertaking in Jammu Kashmir</label>
        <input type="number" class="form-control" id="inputCity" name="jk"/>
    </div>  
	 <div class="form-group col-md-4">
      <label for="inputCity">Industrial undertaking in Backward states as specified in Eight schedule</label>
        <input type="number" class="form-control" id="inputCity" name="bs" required/>
    </div>  
	</div>



	
	<div class="form-row">
   <div class="form-group col-md-4">
      <label for="inputState"> 
Industrial undertaking in backward districts</label>

      <input type="number" class="form-control" name="bd" />
	  
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Multiplex Theater</label>
        <input type="number" class="form-control" id="inputCity" name="mt"/>
    </div>  
	 <div class="form-group col-md-4">
      <label for="inputCity">Convention center</label>
        <input type="number" class="form-control" id="inputCity" name="cc" required/>
    </div>  
	</div>

	
	<div class="form-row">
   <div class="form-group col-md-4">
      <label for="inputState"> 
Scientific research</label>

      <input type="number" class="form-control" name="sr" />
	  
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Undertaking for refining of mineral oil</label>
        <input type="number" class="form-control" id="inputCity" name="rmo"/>
    </div>  
	 <div class="form-group col-md-4">
      <label for="inputCity">Undertaking for developing housing projects</label>
        <input type="number" class="form-control" id="inputCity" name="dhp" required/>
    </div>  
	</div>

	
	
	<div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState"> 
Undertaking for operating a cold chain facility</label>

      <input type="number" class="form-control" name="ccf" />
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Undertaking engaged in processing of fruits and vegetables</label>
        <input type="number" class="form-control" id="inputCity" name="fv"/>
    </div>  
	 
	</div>
	
	
	
	<div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState"> 
Undertaking engaged in storage and transportation of food grains</label>

      <input type="number" class="form-control" name="fg" />
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Undertaking a rural hospital</label>
        <input type="number" class="form-control" id="inputCity" name="fv"/>
    </div>  
	 
	</div>

	
	
	<h4><b>Deductions under section 80-IC or section 80-IE
</b></h4><br>
	<div class="form-row">
   <div class="form-group col-md-4">
      <label for="inputState"> 
Undertaking in Sikkim</label>

      <input type="number" class="form-control" name="sk" />
	  
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Undertaking in Himachal Pradesh</label>
        <input type="number" class="form-control" id="inputCity" name="hp"/>
    </div>  
	 <div class="form-group col-md-4">
      <label for="inputCity">Undertaking in Uttaranchal</label>
        <input type="number" class="form-control" id="inputCity" name="u" required/>
    </div>  
	</div>
	
	
	
	
	<div class="form-row">
   <div class="form-group col-md-4">
      <label for="inputState"> 
Undertaking in Assam</label>

      <input type="number" class="form-control" name="assam" />
	  
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Undertaking in Arunachal Pradesh</label>
        <input type="number" class="form-control" id="inputCity" name="ap"/>
    </div>  
	 <div class="form-group col-md-4">
      <label for="inputCity">Undertaking in Manipur</label>
        <input type="number" class="form-control" id="inputCity" name="manipur" required/>
    </div>  
	</div>
	
	
	<div class="form-row">
   <div class="form-group col-md-4">
      <label for="inputState"> 
Undertaking in Mizoram</label>

      <input type="number" class="form-control" name="mizoram" />
	  
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Undertaking in Meghalaya</label>
        <input type="number" class="form-control" id="inputCity" name="meghalaya"/>
    </div>  
	 <div class="form-group col-md-4">
      <label for="inputCity">Undertaking in Nagaland</label>
        <input type="number" class="form-control" id="inputCity" name="nagaland" required/>
    </div>  
	</div>
	
	
	
	<div class="form-row">
   <div class="form-group col-md-12">
      <label for="inputState"> 
Undertaking in Tripura</label>

      <input type="number" class="form-control" name="tripura" />
	  
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
  

