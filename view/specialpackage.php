<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>
function createXmlHttpRequestObject() {
    var xmlHttp; 
    try {
        xmlHttp = new XMLHttpRequest(); 
    } catch(e) {
        var XmlHttpVersions = new Array("MSXML2.XMLHTTP.6.0",
                            "MSXML2.XMLHTTP.5.0",
                            "MSXML2.XMLHTTP.4.0",
                            "MSXML2.XMLHTTP.3.0",
                            "MSXML2.XMLHTTP", 
                            "Microsoft.XMLHTTP"); 
        for(var i = 0; i < XmlHttpVersions.length && !xmlHttp; i++) {
            try {
                xmlHttp = new ActiveXObject(XmlHttpVersions[i]); 
            } catch(e) {} 
        }
    }
    if (!xmlHttp) alert("Error creating XmlHttpRequest object."); 
    else { return xmlHttp; } 
} 
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	
	var req = createXmlHttpRequestObject(); 
	
	function getLocation(strURL) {		
		
		
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('cardiv').innerHTML=req.responseText;
						document.getElementById('car1div').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
<script language="javascript" type="text/javascript">
function validateForm()
{
var car=document.forms["myForm"]["car"].value;
var name=document.forms["myForm"]["name"].value;
var contact=document.forms["myForm"]["contact"].value;
var email=document.forms["myForm"]["email"].value;
contact = contact.replace(/[^0-9]/g, '');

if (car==null || car=="" || car=="Select Car")
  {
  alert("Please Select a Preffered Car from the List");
  return false;
  }
if (name==null || name=="" || name=="Please Enter your Name")
  {
  alert("Please Enter your Name for our Reference");
  return false;
  }
if (contact==null || contact=="" || contact=="Please Enter your Contact No" || contact.length != 10)
  {
  alert("Please Enter a Valid Contact Number to allows us Contact You with special offers!!!");
  return false;
  }

var atpos=email.indexOf("@");
var dotpos=email.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Please Enter a Valid E-Mail Address. You will receive the Offer from us on this ID");
  return false;
  }


 

 
}
</script>
<style type="text/css">
body {
	background-color:#F7F7F7;
}
fieldset {
	border:1px dashed #CCC;
	padding:10px;
}
legend {
	font-family:Arial, Helvetica, sans-serif;
	font-size: 90%;
	letter-spacing: 1px;
	font-weight: bold;
	line-height: 1.1;
	color:#fff;
	background: #666;
	border: 1px solid #333;
	padding: 2px 6px;
	
}
h1 {
	font-family:Arial, Helvetica, sans-serif;
	font-size: 175%;
	letter-spacing: -1px;
	font-weight: normal;
	line-height: 1.1;
	color:#333;
}
label {
	width:142px;
	height:32px;
	margin-top:3px;
	margin-right:2px;
	padding-top:11px;
	padding-left:6px;
	background-color:#CCCCCC;
	float:left;
	display: block;
	font-family:Arial, Helvetica, sans-serif;
	font-size: 115%;
	letter-spacing: 1px;
	font-weight: normal;
	line-height: 1.1;
	color:#666;
}
.form {
	margin:0;
	padding:0;
}
#container-form {
	width:80%;
	margin:auto;
	padding:10px;
}
#top {
	width:100%;
	height:50px;
}
#leftSide {
	width:66%;
	padding-top:30%;
	float:left;
}
#rightSide {
	background-color:#fff;
	
	width:30%;
	padding:5px;
	margin-top:32%;
	float:right;
	border:1px solid #CCC;
	font:normal 12px Arial;
	color:#666666
}
.clear {
	clear:both;
}
.holder {
	background-color:#fff;

}
.div_texbox {
	width:347px;
	float:right;
	background-color:#E6E6E6;
	height:35px;
	margin-top:3px;
	padding-top:5px;
	padding-bottom:3px;
	padding-left:5px;
}
.div_textarea {
	width:347px;
	float:right;
	background-color:#E6E6E6;
	height:65px;
	margin-top:3px;
	padding-top:5px;
	padding-bottom:3px;
	padding-left:5px;
}
.textarea {
	background-image: url(images/16t.png);
	background-repeat: no-repeat;
	background-position:left;
	width:82%;
	font:normal 18px Arial;
	color: #999999;
	padding:3px 5px 3px 19px;
	height:45px;
}
.textarea:focus, .textarea:hover {
	background-color:#F0FFE6;
}
.select {
	background-image: url(images/16t.png);
	background-repeat: no-repeat;
	background-position:left;
	width:90%;
	font:normal 18px Arial;
	color: #999999;
	padding:3px 5px 3px 19px;
}
.select:focus, .select:hover {
	background-color:#F0FFE6;
}

.textbox {
	background-image: url(images/16t.png);
	background-repeat: no-repeat;
	background-position:left;
	width:285px;
	font:normal 18px Arial;
	color: #999999;
	padding:3px 5px 3px 19px;
}
.textbox:focus, .textbox:hover {
	background-color:#F0FFE6;
}

.username {
    	background-image: url(images/16m.png);
    	background-repeat: no-repeat;
    	background-position:left;
	width:285px;
    	font:normal 18px Arial;
    	color: #999999;
    	padding:3px 5px 3px 19px;
}
.username:focus, .username:hover {
	background-color:#F0FFE6;
}
   
.password {
    	background-image: url(images/16s.png);
    	background-repeat: no-repeat;
   	background-position:left;
	width:285px;
    	font:normal 18px Arial;
    	color: #999999;
    	padding:3px 5px 3px 19px;
}
.password:focus, .password:hover {
	background-color:#F0FFE6;
}

.button_div {
	width:287px;
	float:right;
	background-color:#fff;
	border:1px solid #ccc;
	text-align:right;
	height:35px;
	margin-top:3px;
	padding:5px 32px 3px;
}
.buttons {
	background: #e3e3db;
	font-size:12px; 
	color: #989070; 
	padding: 6px 14px;
	border-width: 2px;
	border-style: solid;
	border-color: #fff #d8d8d0 #d8d8d0 #fff;
	text-decoration: none;
	text-transform:uppercase;
	font-weight:bold;
}
.style6 {
	font-family: "Palatino Linotype";
	font-size: 16px;
	color: #003333;
}
.style7 {
	font-family: "Palatino Linotype";
	color: #FF6633;
}
.style11 {
	font-family: "Palatino Linotype";
	color: #666666;
	font-size: 24px;
	font-weight: bold;
}
.style13 {font-family: "Palatino Linotype"; font-size: 10px; color: #666666; }
</style>

</head>

<body bgcolor="#F7F7F7">
<div id="container-form">
  <div id="top">
    <table width="100%" border:1px solid #CCC; cellspacing="2" cellpadding="0">
  <tr>
    <th scope="col"><div align="justify"><span class="style6">Dear Customer, For MultiCity Travel, The Estimate of Total KM of travel depends upon <br />
      number of cities you wish to travel. <BR />
      <BR />
      A Special Package will be offered to you by Wheels on Hire for your Tailor Made Journey<br /> 
      within 24 Hours.<BR />
      <br />
      You will be contacted within 24 Hrs with a Package made only for you and will also recieve<br /> 
      the mail for the same. <BR />
      <br />
      Please share your personal Information with us by completing the form below which<br />
      will help us contact you. </span>&nbsp;</div></th>
	  <th scope="col" >&nbsp;</th>  
  </tr>
</table>

	
	
  </div>
  <div id="leftSide">
  <form name="myForm" action="index.php?page=specialsubmit" method="post" class="form" onsubmit="return validateForm();" >
  <fieldset>
<legend>Car Details</legend>

  <label for="username">Select CAR*</label>
   <div class="div_texbox">
	<?php 
		$car ="";
	  $result = mysql_query("SELECT carname FROM car"); ?>
     <select name="car" class="select" onchange="getLocation('view/getrate.php?car='+this.value)">
        <option selected="selected">Select Car</option>
		<?php
	  while($row = mysql_fetch_array( $result )) {
	  $carname = $row['carname'];
	  $this->wheels->carname = $carname; 
	  	  echo '<option value="'.$row['carname'].'">'.$row['carname'].'</option>';
	   }
	   ?>
		</select>
	</div>
	 <label for="password">Rate/KM</label>
    <div class="div_texbox">
      <div align="center" class="style13"><div align="left"><div class="style6" id="cardiv"> 
        --Estimated Rate per KM --  </div>
      </div>    
      </div>
    </div>
	

	</fieldset>
	<br /><hr size="1"><br />
  <fieldset>
<legend>Personal details</legend>

	<label for="name">Name*</label>
    <div class="div_texbox">
    <input name="name" type="text" class="textbox" id="name" value="Please Enter your Name" />
	</div>
	<label for="address">Email*</label>
	<div class="div_texbox">
    <input name="email" type="text" class="textbox" id="email" value="Please Enter your Email" />
	</div>
	<label for="city">Contact No*</label>
	<div class="div_texbox">
    <input name="contact" type="text" class="textbox" id="contact" value="Please Enter your Contact No" />
	</div>
	
	<label for="address">Trip Details</label>
	<div class="div_textarea">
	  
	  <textarea name="details" rows="4"  class="textarea" id="details" >Please Enter Trip Details
</textarea>
	 
	</div>
	<div class="button_div">
	<input type="hidden" name="source" value="<?php echo $this->wheels->source; ?>">
    <input type="hidden" name="destination" value="<?php echo $this->wheels->destination; ?>">
    
    <input type="hidden" name="duration" value="<?php echo $this->wheels->duration; ?>">
    <input type="hidden" name="date" value="<?php echo $this->wheels->date; ?>">
    
	 
	  <input name="Submit" type="submit" value="Submit" class="buttons"   />
	</div>
</form>
	</fieldset>
  </div>
  <div id="rightSide">
  <p><span class="style11">Trip Details</span> <BR /><BR /><div align="justify"><span class="style6"><B>Source City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</B><span class="style7"><?php echo $this->wheels->source; ?></span> <BR /><B>Destination City: </B><span class="style7"><?php echo $this->wheels->destination; ?> </span><BR /><B>Trip Duration: &nbsp;&nbsp;&nbsp;&nbsp;</B><span class="style7"><?php echo $this->wheels->duration; ?>&nbsp;days</span> <BR /> <B>Journey Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B><span class="style7"><?php echo $this->wheels->date; ?> </span><BR />
  <BR />
  </span> </div>
  </p></div>
  <div class="clear"></div>
</div>
</body>
</html>
