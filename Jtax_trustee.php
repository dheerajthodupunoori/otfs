<!Doctype html>
<html lang="en">
<head>
  <title>JTax Manufactured Finished Product page</title>
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
.h3one
{
	margin-left:200px;
}
.save
{
	background-color:white;
	margin-left:50px;
}
.bottom{
	border-style: inset;
	border-width:2px;
margin-top:250px;
	}
	.div1
	{
		margin-left:200px;
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

<h3>Schedule FA: Details of Foreign Accounts where you have Signing Authority</h3>
<br>


<form action="" method="post" name="">
<div class="bhoechie-tab-content">

    <center>
   <button class="btn btn-info" type="button" id="firm_indirectowners_btn" >Add Entry</button>
     </center>
   <div id="fio_add_here" class="panel-group" style='margin-top:20px;'>                                                                
                </div>
</div>



<button type="submit" class="btn btn-primary save">
  <a href="Jtaxtaxfilingassets.php" class="none">Save</a>
  </button>



</form>
</div>


<script>
var firm_indirectowners_cntr=0;
var firm_io_ondel=[];
$(document).ready(function(){
$('#firm_indirectowners_btn').click(function()
{
                                firm_indirectowners_cntr=firm_indirectowners_cntr+1;
   var ele="<div class='panel panel-default' id='pnlfio"+firm_indirectowners_cntr+"'><div class='panel-body' style='max-height:340px;'><div style='margin:20px;position: relative;left: 10px;top: -43px; margin-top:61px;'>ID<input type='number_format' id='fioiln"+firm_indirectowners_cntr+"' style='position:relative;left:10px;' onkeydown='firm_indirectowners=1;' name='id'/></div><div style='margin:20px; position: relative;left: 300px;top: -85px;'>Country<input type='text' id='fioit"+firm_indirectowners_cntr+"' style='position:relative;left:10px;' onkeydown='firm_indirectowners=1; name='country'/></div><div style='margin:20px; position: relative;left: 620px;top: -135px;'>Name Of Trust<input type='text' name='noi' id='fiortd"+firm_indirectowners_cntr+"' style='position:relative;left:10px;' onkeydown='firm_indirectowners=1;'/></div><div style='margin:20px; position: relative;left: 6px;top: -126px;'>Address Of Trust<input type='text' name='aoi' id='fiortd"+firm_indirectowners_cntr+"' style='position:relative;left:10px;' onkeydown='firm_indirectowners=1;'/></div><div style='margin:20px; position: relative;left: 370px;top: -172px;'>Name Of Other Trustees<input type='text' name='not' id='fiortd"+firm_indirectowners_cntr+"' style='position:relative;left:10px;' onkeydown='firm_indirectowners=1;'/></div><div style='margin:20px; position: relative;left: 6px;top: -163px;'>Address Of Other Trustees<input type='text' name='aot' id='fiortd"+firm_indirectowners_cntr+"' style='position:relative;left:10px;' onkeydown='firm_indirectowners=1;'/></div><div style='margin:20px; position: relative;left: 422px;top: -209px;'>Name Of Settlor<input type='text' name='nos' id='fiortd"+firm_indirectowners_cntr+"' style='position:relative;left:10px;' onkeydown='firm_indirectowners=1;'/></div><div style='margin:20px; position: relative;left: 703px;top: -289px;'>Address Of Settlor<input type='text' name='aos' id='fiortd"+firm_indirectowners_cntr+"' style='position:relative;left:10px;' onkeydown='firm_indirectowners=1;'/></div></div><div class='panel-footer'><button class='btn btn-danger' type='button' onclick='fiood("+firm_indirectowners_cntr+")'>delete</button></div></div>";
                     $('#fio_add_here').append(ele);
                                });
                
});


function fiood(a){
                                firm_io_ondel.push(a);
                                //alert(firm_io_ondel);
                                document.getElementById("pnlfio"+a).style.display="none";
                }

</script>
<hr class="bottom">
<p class="footer">JTax is a product by JUGGERNAUTS</p>
  </body>
</html>

