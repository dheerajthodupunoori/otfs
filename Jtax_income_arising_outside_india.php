<!Doctype html>
<html lang="en">
<head>
  <title>JTax Income Arising outside India page</title>
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
.div1
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
	margin-top:70px;
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
<h3>Schedule FSI: Details of Income accruing or arising outside India</h3>
<br>
<b>Instructions:</b>
<br>
<p class="text-info">1.Mention details of income and taxes paid outside India on the specific income head.</p>

<p class="text-info">2.If you have a Tax Identification Number in the country where you earned foreign income, enter it in the TIN column.
Otherwise, enter your Passport Number. It is a mandatory field.</p>

<p class="text-info">3.Relief will be claimed U/S 90 and 90A if there is a DTAA. Otherwise it will be claimed U/S 91.
</p>
<br></br>
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
   var ele="<div class='panel panel-default' id='pnlfio"+firm_indirectowners_cntr+"'><div class='panel-body' style='max-height:340px;'><div style='margin:20px;position: relative;left: -1px;top: -43px; margin-top:61px;'>ID<input type='number_format' id='fioiln"+firm_indirectowners_cntr+"' style='position:relative;left:38px;' onkeydown='firm_indirectowners=1;'/></div><div style='margin:20px;top:-39px;position: relative;'> Country<select name='c'><option value='india'>India</option></select></div><div style='margin:20px; position: relative;left: 414px;top: -85px;'>Tax Identification No:<input type='number' id='fioit"+firm_indirectowners_cntr+"' style='position:relative;left:88px;' onkeydown='firm_indirectowners=1;'/></div><div style='margin:20px; position: relative;top: -79px;'>Income Head<select name='ih'><option value='salary'>Salary</option><option value='House Property'>House Property</option><option value='Capital Gain'>Capital Gain</option><option value='bussiness'>Bussiness</option><option value='other sources'>Other Sources</option></select></div><div style='margin:20px; position: relative;left: 414px;top: -126px;'>Income outside India<input type='number' id='fiortd"+firm_indirectowners_cntr+"' style='position:relative;left:75px;' onkeydown='firm_indirectowners=1;'/></div><div style='margin:20px; position: relative;top: -114px;'>Tax Paid Outside India<input type='number' id='fiorsd"+firm_indirectowners_cntr+"' onkeydown='firm_indirectowners=1;' style='position:relative;left:55px;' placeholder=''/>            </div><div style='margin:20px; position: relative;left: 414px;top: -158px;'>Section Under which Tax Relief Claimed <select id='fiopo"+firm_indirectowners_cntr+"' name='trc'><option value='90 - DTAA WITH Country'>90- DTAA With Country</option><option value='90 - DTAA WITH Association'>90 - DTAA WITH Association</option><option value='91 - no DTAA'>91 - no DTAA</option></select> </div><div style='margin:20px; position: relative;left: -23px;top: -142px;'>Tax payable in India Under Normal Provinsions<input type='number' id='fiortd"+firm_indirectowners_cntr+"' style='position:relative;left:75px;' onkeydown='firm_indirectowners=1;'/></div><div style='margin:20px; position: relative;left: -23px;top: -145px;'>If DTAA ,mention Relevant article<input type='text' id='fiortd"+firm_indirectowners_cntr+"' style='position:relative;left:75px;' onkeydown='firm_indirectowners=1;'/></div></div><div class='panel-footer'><button class='btn btn-danger' type='button' onclick='fiood("+firm_indirectowners_cntr+")'>delete</button></div></div>";
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
</body></html>
</body>
</html>