<?php
$servername="localhost";
$username="root";
$password="";
$dbname="juggernautsonlinetaxfilingsystem";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
	{
    die("Connection failed: " . $conn->connect_error);
} 
else
      echo "connected successfully";
  
 $sql = "select FirstName,MiddleName,LastName from personalinfo";
 
 $query = mysqli_query($conn, $sql);
 
 if (!$query) 
	 {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>


<html lang="en">
<head>
  <title>JTax Personal Information page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" initial-scale="1">
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
.bottom{
	border-style: inset;
	border-width:2px;

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
.pan
{
	text-transform:uppercase;
}
.none:hover
{
text-decoration:none;
}

 </style>
<script type="text/javascript">
           function Validateform(){
		      
			 var firstname=document.getElementById("fn").value;
var lastname=document.getElementById("ln").value;
var gender=document.getElementById("g").value;
var fathername=document.getElementById("ftn").value;
var dateofbirth=document.getElementById("dob").value;
var pan=document.getElementById("pan").value;
var maritalstatus=document.getElementById("ms").value;
			  

			  if(firstname == ""){
			     alert("First Name Not Entered");
				 return false;
			  }
			  else if(lastname == ""){
				alert("Lastast Name Not Entered");
				return false;
			  }
			  else if(gender == ""){
				alert("Gender Not selected");
				return false;
			  }
			  else if(fathername == "" ){
				alert("Father Name Not Entered");
				return false;
			  }
			  else if(dob == ""){
			     alert("Date of Birth Not Entered");
				 return false;
			  }
			  else if(pan == "" ){
			     alert("PAN Code Not Entered");
				 return false;
			  }else if(maritalstatus == "" ){
			     alert("Marital Status Not Entered");
				 return false;
			  }  
			  else{
			     return true;
			  }
		   
		   }
		   
	</script>
<script type="text/javascript">
function validate_pan()
{
var u=document.getElementById("pan").value;
var i= /^[A-Z]{5}[0-9]{4}[A-Z]{1}?$/;
   	
				if(!i.test(u))
				{
					alert("Please enter the correct PAN number in the correct format as AAAPL1234C");
					return false;
				}
				return true;
}
 </script>
</head>
<?php include("header.php");?>

<br></br>
<?php include("navigation.php");?>





  <body>
<!-- <nav class="navbar navbar-default nb">
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

   
   
   <h4 class="h4one">Please enter your information here!</h4>-->
  <form  action="http://localhost/OTFS/Jtaxpersonalsave.php" method="post" class="form" onsubmit="return Validateform()">
 <fieldset>
  <legend>Personal Information</legend>
 
  <div>
  First Name*
  <br></br>
  <input type="text"  name="fn" id="fn" />
  <br></br>
  Middle Name
  <br></br>
  <input type="text" name="mn" id="mn" />
  <br></br>
  Last Name*
  <br></br>
  <input type="text" name="ln" id="ln" />
  <br></br>
  </div>
  Gender*
  <br></br>
  <select  name="g" id="g" required>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>
  <br></br>
  Date of birth*
  <br>
  <p>Provide date in 2017/12/20 format</p>
  <input type="date" name="dob" id="dob" onblur="return date_validation()" onfocus="true" />
  <br></br>
  PAN Number*
<br></br> 
 <input  type="text" name="pan" id="pan" onblur="return validate_pan()" onfocus="true" class="pan" />
  <br></br>
  Fathers's Name*
  <br></br>
  <input type="text" name="ftn" id="ftn"/>
  <br></br>
  Marital Status*
  <br></br>
  <select  name="ms" id="ms" >
  <option value="not married">Not Married</option>
  <option value="married">Married</option>
  <option value="prefer not to say">Perfer not to Disclose</option>
  </select>
 </fieldset>
 <br></br>
 <button type="submit" class="personalsave" value="submit">Save</button>
<!-- <button  class="next" value="next"><a href="C:\Users\HOME\Desktop\JTrustTeam\OTFS\Jtaxaddressinfo.php" class="jtaxicon">Next</a></button> -->
</form>
<br></br>
<br>



<div class="div2">

<table>
 <thead>
  <tr>
    <th>fn</th>
    <th>mn</th> 
    <th>ln</th>
  </tr>
  </thead>
  <tbody>
        
     
      <?php
		$no 	= 1;
	
		while ($row = mysqli_fetch_array($query))
		{
			//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['FirstName'].'</td>
					<td>'.$row['MiddleName'].'</td>
					
				</tr>';
			//$total += $row['amount'];
			$no++;
		}?>
		
		
        
		
    </tbody>
  
</table>

</div>

<br></br>


 <hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
</body></html>
  </div>
  </body>
  </html>