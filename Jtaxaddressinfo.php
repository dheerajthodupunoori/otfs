<!Doctype html>
<html lang="en">
<head>
  <title>JTax tax Address Information Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale="1">
  <link rel="stylesheet" type="text/css" href="Jtaxpersonalinfo.css">
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
      color:blue;
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
.line
{
margin-top:400px;
}
.footer{
margin-left:20px;
}
.link{
text-decoration:none;
}
.nb
{
height:70px;
font-size:30px;
}
.form
{
margin-left:200px;
}
.h4one
{
margin-left:200px;
}
.footer
{
margin-left:20px;
}
.bottom{
	border-style: inset;
	border-width:2px;
margin-top:100px;
	}
	.none:hover{
		text-decoration:none;
	}
  </style>
  <script type="text/javascript">
           function Validateaddress(){
		      
var doornumber=document.getElementById("dn").value;
var street=document.getElementById("s").value;
var pincode=document.getElementById("pc").value;
var area=document.getElementById("a").value;
var town=document.getElementById("t").value;
var state=document.getElementById("st").value;
var country=document.getElementById("c").value;
			  var mobile=document.getElementById("mobile").value;
var email=document.getElementById("email").value;
var aadhaar=document.getElementById("aan").value;
			  if(doornumber == ""){
			     alert("Door Number is  Not Entered");
				 return false;
			  }
			  else if(street == ""){
				alert("street is Not Entered");
				return false;
			  }
			  else if(pincode == ""){
				alert("pincode is Not selected");
				return false;
			  }
			  else if(area == "" ){
				alert("area is Not Entered");
				return false;
			  }
			  else if(town == ""){
			     alert("town is Not Entered");
				 return false;
			  }
			  else if(state == "" ){
			     alert("state is Not Entered");
				 return false;
			  }else if(country == "" ){
			     alert("country is Not Entered");
				 return false;
			  }  
			  else if(email == "" ){
			     alert("email is Not Entered");
				 return false;
			  }  
			  else if(aadhaar == "" ){
			     alert("Aadhaar number is Not Entered");
				 return false;
			  }  
			  else if(mobile == "" ){
			     alert("Mobile number is Not Entered");
				 return false;
			  }  
			  else{
			     return true;
			  }
		   
		   }
		   
	</script>
	 <script type="text/javascript">
	 function validate_mobile()
		   {
			   var number=document.getElementById("mn").value;
			   var u=/^([0-9]{10})$/;
			   f(!u.test(number))
				{
					alert("Enter the correct Mobile Number");
					return false;
				}
				return true;
		   }
	 </script>
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
  <h4 class="h4one">Please enter your information here!</h4> 
 <form  action="http://localhost/OTFS/Jtaxaddresssave.php" method="post" class="form" onsubmit="return Validateaddress()">
 <fieldset>
  <legend>Address</legend>
 
 
 
  DoorNumber* 
  <br></br>
  <input type="text"  name="dn" id="dn"/>
  <br></br>
  Street
  <br></br>
  <input type="text" name="s" id="s"/>
  <br></br>
  pincode*
  <br></br>
  <input type="number" name="pc" id="pc" />
  <br></br>

  Area/Locality*
  <br></br>
  <input type="text" name="a" id="a" />
  <br></br>
  Town/City*
<br></br> 
 <input  type="text" name="t" id="t" />
  <br></br>
  State*
  <br></br>
  <select name="st" is="st" required>
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
  <br></br>
  Country*
  <br></br>
  <input type="text" name="c" id="country"/>
  <br></br>
  Mobile*
  <br></br>
  <input type="number" name="mn" id="mobile" onblur="return validate_mobile()" onfocus="true"/>
  <br></br>
  Email*
  <br></br>
  <input type="text" name="em" id="email" />
  <br></br>
  Alternate Email
  <br></br>
  <input type="text"  name="ae">
  <br></br>
  Aadhaar card number*
  <a href="aaadhaar.png">Click here to see sample</a>
  <br></br>
  <input type="number" name="aan" id="aan" />
  <br></br>
  Aadhaar card enrollment number
  <a href="enrolment.png">Click here to see sample</a>
 <br></br> <input type="number" name="aaen">
  <br></br>
 </fieldset>
 <button type="submit" class="addresssave" value="submit">Save</button>
<!-- <button type="submit" class="next" value="next"><a href="C:\Users\HOME\Desktop\JTrustTeam\OTFS\Jtaxlist.html" class="jtaxicon">Next</button> -->
</form>
<br></br>
<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
  

</body>
</html>