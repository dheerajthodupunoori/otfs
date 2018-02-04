<!Doctype html>
<html lang="en">
<head>
  <title>JTaxtax House Property Information Page</title>
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





.line
{
border-width: 3px;
}

.link{
text-decoration:none;
}
.nb
{
height:70px;
font-size:30px;
}
.h3one{
margin-left:200px;
}
.text-info
{
margin-left:200px;
width:500px;
}
.form{
margin-left:200px;
width:800px;
}
.rental{
margin-left:350px;
background-color: rgb(255,255,255);
      color: blue;
}
.info1{
margin-left:200px;
}
.form-row
{
width:600px;
}
.co-owner{
background-color: rgb(255,255,255);
      color: blue;
	  margin-right:20px;
	  margin-left:200px;
}
.bform{
margin-left:80px;
}
.none:hover
{
text-decoration:none;
}
.save:hover
{
text-decoration:none;
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
	   <a href="Jtaxdeductions.php"  class="none">Deductions</a></button>
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



  <h3 class="h3one">Tax savings on Self-occupied House Property</h3>
  <p class="text-info">In case you paid <b>Interest on Housing Loan for house property you live in </b>(self-occupied property), specify the Interest Paid below</p>
  <br>
  <p class="h3one">You can go to the next section if you don't own house property or if you hava a rental property</p>
  <br>
  
  <button type="button" class="btn btn-primary btn-md rental"><a href="Jtaxaddrental.php" class="none">Enter Rental property details</a></button>  
  
  <br></br>
  <form action="" method="post" class="form">
  <fieldset>
  <legend>Interest paid on housing loan for Self occupied property</legend>
  <p class="bg-info">If you have a housing loan against a house you live in (Self Occupied property) then you can claim a tax deduction of upto Rs. 2,00,000</p>
  <br>
  <b>Interest paid on loan for self occupied property </b>
  <p class="bg-info">The loan should have been taken after April 1, 1999</p>
  <input type="number" name="ios"/>
  <br></br>
  <br>
  <legend>Interest paid during the pre-construction period of self occupied property</legend>
  <br>
  <b>The financial year previous to completion of construction </b>
  <p class="bg-info">For example: If construction completed on 17th July 2010, you need to specify 2009-10 </p>
  <select name="fy">
  <option value="2014-2015">2014-2015</option>
  <option value="2015-2016">2015-2016</option>
  <option value="2016-2017">2016-2017</option>
  <option value="2017-2018">2017-2018</option>
  <option value="2018-2019">2018-2019</option>
  </select>
 <br></br>
<b> Total interest amount paid during the pre-construction period </b>
 <p class="bg-info">Interest paid from date of borrowing till 31st March of previous financial year. </p>
 <input type="number" class="tia"/>
 <br></br>
 <br>
 <legend>Your House Address</legend>
 </fieldset>
 </form>
 
 <div class="container">
 <form class="bform">
 
  <div class="form-row">
  
    <div class="form-group col-md-6">
      <label >Flat/Door/Block Number</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-6">
      <label >Road/Street</label>
      <input type="text" class="form-control" >
    </div>
  </div>
  
  
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Pincode</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-6">
      <label>Area/Locality</label>
      <input type="text" class="form-control" >
    </div>
  </div>
  
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Town/City</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-6">
      <label>State</label>
	<br>
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
  
  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Country</label>
      <input type="text" class="form-control" placeholder="India" >
    </div>
	</div>
	
    <div class="form-group col-md-6">
      <label >Ownership share of property</label>
      <input type="text" class="form-control" placeholder="100" >
    </div>
  </div>
  
  <br>
   <p class="h3one">In case if the property is jointly owned , specify co-owners of the property</p>
    <button type="button" class="btn btn-primary btn-md co-owner"><a href="Jtaxaddco-owner.php" class="none">Specify Co-owners of the property</a></button>  
<button type="button" class="btn btn-success"><a href="Jtaxcapitalgain.php" class="save">Save</a></button>
</form>
</div>
<hr class="line">
   <p class="footer">JTax is a product by JUGGERNAUTS</p>





</body>
</html>
