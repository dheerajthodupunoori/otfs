<!Doctype html>
<html lang="en">
<head>
  <title>JTax Add Depreciation page</title>
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
	width:500px;
}
.save
{
	background-color:white;
	margin-left:500px;
}
.form
{
	width:500px;
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

<h3>Add Depreciation Entry</h3>
<br>


<form action="" method="post" class="form">

 <div class="form-row">
   <div class="form-group col-md-12">
      <label for="inputState">Depreciation Block</label>

     <select name="db">
	 <option value="1">Plant and Machinery - 15%</option>
	  <option value="2">Furniture - 10%</option>
	   <option value="3">Ships - 20%</option>
	    <option value="4">Intangible Assets - 25%</option>
		 <option value="5">Buildings - Residential - 5%</option>
		  <option value="6">Buildings - Office, Factory, Godowns - 10%</option>
		   <option value="7">Buildings - For Infrastructure facilities - 100%</option>
		    <option value="8">Plant and Machinery - Buses etc running on Hire. - 30%</option>
			 <option value="9">Plant and Machinery - Aeroplanes - 40%</option>
			  <option value="10">Plant and Machinery - New Vehicles, Glass or Plastic Containers, etc - 50%</option>
			   <option value="11">Plant and Machinery - Computers - 60%</option>
			    <option value="12">Plant and Machinery - Energy Saving Devices - 80%</option>
				 <option value="13">Plant and Machinery - Pollution Control Equipments - 100%</option>
	  </select>
    </div>
	</div>


	 <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState"> Description</label>

      <input type="text" class="form-control" name="d" />
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Opening Amount</label>
        <input type="number" class="form-control" id="inputCity" name="oa" />
    </div>  
	</div>
	

	
	 <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState"> Purchase Amount (Upto October 3)
</label>

      <input type="number" class="form-control" name="pa3" />
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Sale Amount (On assets purchased upto October 3)</label>
        <input type="number" class="form-control" id="inputCity" name="sa3" />
    </div>  
	</div>
	
	
	 <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState"> Purchase Amount (From October 4)

</label>

      <input type="number" class="form-control" name="pa4" />
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Sale Amount (On assets purchased from October 4)</label>
        <input type="number" class="form-control" id="inputCity" name="sa4" />
    </div>  
	</div>
	
	
	
	 <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputState">Date on which sale was made, if any (Optional)

</label>
<p class="bg-info">Please specify date of sale if you had sold any asset. This date is used for interest calculation purposes in case there is some capital gain. If you do not specify a date, then the capital gain will be attributed to the last quarter for purpose of interest calculation. </p>
      <input type="date" class="form-control" name="d" placeholder="dd/mm/yyyy" />
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Personal Usage Percentage</label>
        <input type="number" class="form-control" id="inputCity" name="pup" />
    </div>  
	</div>
	
	 <input type="checkbox" name="liable" value="Bike"> Is Block Nil?
<br></br>
	 <input type="checkbox" name="liable" value="Bike"> Additonal Depreciation?
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
  
  