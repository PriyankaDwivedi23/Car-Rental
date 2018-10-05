<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
function validateForm()
{
var x=document.forms["myForm"]["email"].value;
var name=document.getElementById("name").value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
var contact=document.getElementById("contact").value;
var address=document.getElementById("address").value;

contact = contact.replace(/[^0-9]/g, '');
var errorMessage = "";

if (name==null || name=="" )
  {
 errorMessage += "Please Enter your Name for our Reference\n\n";

 
  }
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  errorMessage += "Please Enter a Valid E-Mail Address. You will receive the Quotation from us on this Mail.\n\n";
 
  }
if (contact==null || contact==""  || contact.length != 10)
  {
  errorMessage += "Please Enter a Valid Contact Number to allows us Contact You with special offers!!!\n\n";
  
  }
if (address==null || address=="" )
  {
  errorMessage += "Please Enter your Adress. This will allow us to provide you with Door Step Service.\n\n";
 
  }
if (document.forms.myForm.elements.payment_mode.value == "")
  {
   errorMessage += "Please select Payment Option.\n\n";
  
  
  }
if (!document.forms.myForm.elements.toc.checked)
  {
  errorMessage += "Please read Terms and Conditions carefully and Tick the Check box if you agree to it.\n\n";
  
  
  }
  


if (errorMessage != "")
    {
       alert(errorMessage);
       return false;        
    }

}
</script>
 <SCRIPT language="JavaScript" SRC="js/ajax.js"></SCRIPT>
<link rel="stylesheet" href="css/page.css"/>
<style type="text/css">

.style2 {font-size: 14px}
.style4 {
	font-size: 16px;
	font-family: "Palatino Linotype";
	color: #666666;
}
.style5 {
	font-size: 10px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style6 {font-size: 16px;
	font-family: "Palatino Linotype";
	color: #666666;}

</style>
</head>

<body bgcolor="#F7F7F7">
<div id="container-form">
  <div id="leftSide">
    <fieldset>
<legend>Personal details</legend>

<form name="myForm" action="" method="post" class="form" onsubmit="return validateForm();" >
  

	

	<label for="name">
	<div align="left">Name*</div>
	</label>
    <div class="div_texbox">
    <input name="name" type="text" class="textbox" id="name" value="" />
	</div>
	<label for="address">
	<div align="left">Email*</div>
	</label>
	<div class="div_texbox">
    <input name="email" type="text" class="textbox" id="email" value="" />
	</div>
	<label for="city">
	<div align="left">Contact No*</div>
	</label>
	<div class="div_texbox">
    <input name="contact" type="text" class="textbox" id="contact" value="" />
	</div>
	
	<label for="address">
	<div align="left">Address*</div>
	</label>
	<div class="div_textarea">
	  
	  <textarea name="address" rows="4"  class="textarea" id="address" >
</textarea>
	 
	</div>
	
	</fieldset>
	<br /><hr size="1"><br />
	<fieldset>
<legend>Select Payment Method</legend>
	
	
	
	
	<table width="100%" border="0" cellpadding="2" cellspacing="2" background="images/payment_bg.PNG">
      <tr>
        <th width="4%" height="69" scope="col">
          <div align="right">
            <input name="payment_mode" id="payment_mode" type="radio" value="cod" onClick="callAJAX('view/cod.html','displaydiv', '<center> <img src=loading6.gif></center>')" />
          </div></th>
        <th width="25%" scope="col"><div align="left"><span class="style4">Cash On Delivery</span></div></th>
        <th width="5%" scope="col"><div align="right">
          <input name="payment_mode" id="payment_mode" type="radio" value="neft" onClick="callAJAX('view/neft.html','displaydiv', '<center> <img src=loading6.gif></center>')" />
        </div></th>
        <th width="31%" class="style4" scope="col"><div align="left">NEFT Bank Transfer</div></th>
        <th width="3%" scope="col"><div align="right">
          <input name="payment_mode" id="payment_mode" type="radio" value="paypal" />
        </div></th>
        <th width="31%" class="style4" scope="col"><div align="left">Paypal(<span class="style5">For Intl. Customers</span>) <br />
        </div></th>
        <th width="1%" scope="col">&nbsp;</th>
      </tr>
    </table>
	
	<table width="100%" border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td id="displaydiv"></td>
      </tr>
    </table>
	<br />
	</fieldset>
	
		<br /><hr size="1"><br />
	
	<div class="button_div">
	
	  <div align="left"><span class="style4">
	      <input type="checkbox" name="toc" id="toc" value="toc" />
	      </span>
	        <span class="style4">	I have Read and Agreed to <a href="index.php?page=terms-and-conditions" target="_blank"  >Terms and Conditions</a> of Wheels On Hire </span><BR />
	        <BR /><BR />
          <input type="hidden" name="source" value="<?php echo $this->wheels->source; ?>">
          <input type="hidden" name="destination" value="<?php echo $this->wheels->destination; ?>">
	    
          <input type="hidden" name="duration" value="<?php echo $this->wheels->duration; ?>">
          <input type="hidden" name="date" value="<?php echo $this->wheels->date; ?>">
	    
	    
	      <input name="Submit" type="submit" value="Book Cab" class="buttons"   />
	      </div>
	</div>
</form>
	

	
	
 
  </div>
  <div id="rightSide">
  <table width="99%" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <th width="93%" scope="col"><span class="style11">Trip Details</span></th>
      <th width="7%" scope="col">&nbsp;</th>
    </tr>
  </table>
  <br />
  <div align="justify">
    <table width="100%" border="0" cellspacing="2" cellpadding="0">
      <tr>
        <th width="42%" scope="col"><div align="left"><span class="style4"><b>City:</b></span></div></th>
        <th width="58%" scope="col"><div align="left"><span class="style6"><?php echo $this->local->city; ?></span></div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left"><span class="style4"><b>Localtion: </b></span></div></th>
        <th scope="col"><div align="left"><span class="style6"><?php echo $this->local->location; ?></span></div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left"><span class="style6"><b>Duration:</b></span></div></th>
        <th scope="col"><div align="left"><span class="style6"><?php echo $this->local->duration; ?></span></div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left"><span class="style6"><b>Journey Date:</b></span></div></th>
        <th scope="col"><div align="left"><span class="style6"><b><?php echo $this->local->date; ?></b></span></div></th>
      </tr>
      
      <tr>
        <th scope="col"><div align="left"><span class="style6"><b>Car:</b><b>&nbsp;&nbsp;</b></span></div></th>
        <th scope="col"><div align="left"><span class="style6"><?php echo $this->wheels->carname; ?></span></div></th>
      </tr>
    </table>
    <p align="center" class="style6"><span class="style11">Vendor Details</span></p>
    <table width="100%" border="0" cellspacing="2" cellpadding="0">
      <tr>
        <th width="42%" scope="col"><div align="left"><span class="style6"><b>Vendor Name : </b></span></div></th>
        <th width="58%" scope="col"><div align="left"><span class="style6"><?php echo $this->wheels->vendor; ?></span></div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left"><span class="style6"><b>City : </b></span></div></th>
        <th scope="col"><div align="left"><span class="style6"><?php echo $this->wheels->source; ?></span></div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left"><span class="style6"><b>Rate Per KM :</b></span></div></th>
        <th scope="col"><div align="left"><span class="style6"><?php echo $this->wheels->rateperkm; ?></span></div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left"><span class="style6"><b>Estimated KMs : </b></span></div></th>
        <th scope="col"><div align="left"><span class="style6"><?php echo $this->wheels->km; ?></span></div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left"><span class="style6"><b>Driver Charges :</b></span></div></th>
        <th scope="col"><div align="left"><span class="style6"><b><?php echo $this->wheels->drivercharge; ?></b></span></div></th>
      </tr>
    </table>
    <br />
    <table width="100%" border="0" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
      <tr>
        <th width="52%" scope="col"><div align="left"><span class="style6"><b>TOTAL AMOUNT:</b></span></div></th>
        <th width="48%" scope="col"><div align="left"><span class="style6"><b><?php echo $this->wheels->amount; ?></b></span></div></th>
      </tr>
    </table>
    <p align="center" class="style6"><b><span class="style11">          Terms and Conditions</span></b><b>&nbsp;</b> </p>
    <p align="justify">After <span class="style6"><?php echo $this->wheels->km; ?></span>, For every KM travelled Rs. <span class="style6"><?php echo $this->wheels->rateperkm; ?></span> /Km  will be payable by the Customer. <span class="style2"><blink><?php echo $this->wheels->msg; ?></blink></span></p>
    <p align="justify">Driver charges are Rs. <b>250</b> per day.</p>
    <p align="justify">State permit tax is extra wherever applicable.</p>
    <p align="justify">Parking &amp; Toll charges extra. 
        <BR />
      </p>
    </div>
  </p></div>
  <div class="clear"></div>
</div>
</body>
</html>
