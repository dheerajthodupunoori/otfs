<!Doctype html>
<html lang="en">
<head>
  <title>JTax Nature of Bussiness Information page</title>
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
.bottom{
	border-style: inset;
	border-width:2px;
margin-top:100px;
	}
.div1
{
	margin-left:200px;
	width:500px;
}
.none:hover{
	text-decoration:none
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
  <h3 class="div1">Nature of Business</h3>
<div class="div1">
<form action="" class="form" method="post">
  <div class="form-group">
    <label>Name of the Bussiness</label>
  <select name="nob">
 <option value="AT0101">Manufacturing Industry (Agro-based industries)</option>
<option value="AT0102">Manufacturing Industry (Automobile and Auto parts)</option>
<option value="AT0103">Manufacturing Industry (Cement)</option>
<option value="AT0104">Manufacturing Industry (Diamond cutting)</option>
<option value="AT0105">Manufacturing Industry (Drugs and Pharmaceuticals)</option>
<option value="AT0106">Manufacturing Industry (Electronics including Computer Hardware)</option>
<option value="AT0107">Manufacturing Industry (Engineering goods)</option>
<option value="AT0108">Manufacturing Industry (Fertilizers, Chemicals, Paints)</option>
<option value="AT0109">Manufacturing Industry (Flour &amp; Rice Mills)</option>
<option value="AT0110">Manufacturing Industry (Food Processing Units)</option>
<option value="AT0111">Manufacturing Industry (Marble &amp; Granite)</option>
<option value="AT0112">Manufacturing Industry (Paper)</option>
<option value="AT0113">Manufacturing Industry (Petroleum and Petrochemicals)</option>
<option value="AT0114">Manufacturing Industry (Power and energy)</option>
<option value="AT0115">Manufacturing Industry (Printing &amp; Publishing)</option>
<option value="AT0116">Manufacturing Industry (Rubber)</option>
<option value="AT0117">Manufacturing Industry (Steel)</option>
<option value="AT0118">Manufacturing Industry (Sugar)</option>
<option value="AT0119">Manufacturing Industry (Tea, Coffee)</option>
<option value="AT0120">Manufacturing Industry (Textiles, Handloom, Powerlooms)</option>
<option value="AT0121">Manufacturing Industry (Tobacco)</option>
<option value="AT0122">Manufacturing Industry (Tyre)</option>
<option value="AT0123">Manufacturing Industry (Vanaspati &amp; Edible Oils)</option>
<option value="AT0124">Manufacturing Industry (Others)</option>
<option value="AT0201">Trading (Chain stores)</option>
<option value="AT0202">Trading (Retailers)</option>
<option value="AT0203">Trading (Wholesalers)</option>
<option value="AT0204">Trading (Others)</option>
<option value="AT0301">Commission Agents (General Commission Agents)</option>
<option value="AT0401">Builders (Builders)</option>
<option value="AT0402">Builders (Estate agents)</option>
<option value="AT0403">Builders (Property Developers)</option>
<option value="AT0404">Builders (Others)</option>
<option value="AT0501">Contractors (Civil Contractors)</option>
<option value="AT0502">Contractors (Excise Contractors)</option>
<option value="AT0503">Contractors (Forest Contractors)</option>
<option value="AT0504">Contractors (Mining Contractors)</option>
<option value="AT0505">Contractors (Others)</option>
<option value="AT0601">Professionals (Chartered Accountants, Auditors, etc.)</option>
<option value="AT0602">Professionals (Fashion designers)</option>
<option value="AT0603">Professionals (Legal professionals)</option>
<option value="AT0604">Professionals (Medical professionals)</option>
<option value="AT0605">Professionals (Nursing Homes)</option>
<option value="AT0606">Professionals (Specialty hospitals)</option>
<option value="AT0607">Professionals (Others)</option>
<option value="AT0701">Service Sector (Advertisement agencies)</option>
<option value="AT0702">Service Sector (Beauty Parlours)</option>
<option value="AT0703">Service Sector (Consultancy services)</option>
<option value="AT0704">Service Sector (Courier Agencies)</option>
<option value="AT0705">Service Sector (Computer training/educational and coaching institutes)</option>
<option value="AT0706">Service Sector (Forex Dealers)</option>
<option value="AT0707">Service Sector (Hospitality services)</option>
<option value="AT0708">Service Sector (Hotels)</option>
<option value="AT0709">Service Sector (IT. enabled services, BPO service providers)</option>
<option value="AT0710">Service Sector (Security agencies)</option>
<option value="AT0711">Service Sector (Software development agencies)</option>
<option value="AT0712">Service Sector (Transporters)</option>
<option value="AT0713">Service Sector (Travel agents, tour operators)</option>
<option value="AT0714">Service Sector (Others)</option>
<option value="AT0801">Financial Service Sector (Banking Companies)</option>
<option value="AT0802">Financial Service Sector (Chit Funds)</option>
<option value="AT0803">Financial Service Sector (Financial Institutions)</option>
<option value="AT0804">Financial Service Sector (Financial service providers)</option>
<option value="AT0805">Financial Service Sector (Leasing Companies)</option>
<option value="AT0806">Financial Service Sector (Money Lenders)</option>
<option value="AT0807">Financial Service Sector (Non-Banking Financial Companies)</option>
<option value="AT0808">Financial Service Sector (Share Brokers, Sub-brokers, etc.)</option>
<option value="AT0809">Financial Service Sector (Others)</option>
<option value="AT0901">Entertainment Industry (Cable T.V. productions)</option>
<option value="AT0902">Entertainment Industry (Film distribution)</option>
<option value="AT0903">Entertainment Industry (Film laboratories)</option>
<option value="AT0904">Entertainment Industry (Motion Picture Producers)</option>
<option value="AT0905">Entertainment Industry (Television Channels)</option>
<option value="AT0906">Entertainment Industry (Others)</option>
  </select>
  </div>
  

   <div class="form-group">
    <label>Trade Name *</label>
	<p class="bg-info">You can enter your name here if you are the sole proprietor.</p>
    <input type="text" class="form-control" name="tn" required/>
  </div></br> 
  <button type="button" class="btn btn-success success">
  <a href="Jtaxbussiness.php" class="none">Add</a></button>
</form>
</div>
<a href="Jtaxbussiness.php" class="h3one">Back to Bussiness And Profession</a>
<br></br>
<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
  </body>
</html>