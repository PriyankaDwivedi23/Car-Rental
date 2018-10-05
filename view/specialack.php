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
var city=document.forms["myForm"]["city"].value;
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
if (city==null || city=="" || city=="Select City")
  {
  alert("Please Select a City from the List");
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
	padding-top:5%;
	float:left;
}
#rightSide {
	background-color:#fff;
	
	width:30%;
	padding:5px;
	margin-top:5%;
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
.style15 {font-size: 14px}
.style16 {color: #999999}
</style>

</head>

<body bgcolor="#F7F7F7">
<div id="container-form">
  <div id="leftSide"><table width="100%" border:1px solid #CCC; cellspacing="2" cellpadding="0">
  <tr>
    <th scope="col"><div align="justify"><span class="style6">Dear <?php echo $this->wheels->name ?>, Thank You for Selecting Wheels On Hire for your Travel. <br />
     
      <BR />
      You will receive a Call from us within next 24 hours at your contact no <?php echo $this->wheels->contact ?>.<BR />
      <br />
      You will subsequently receive E-Mail from us regarding the package offer at <?php echo $this->wheels->email; ?>. <BR />
      <br />
      For any other Query pertaining to your Travel or Booking Support feel free to contact us at enquiry@wheelsonhire.co.in<br />
	  <br />
      You can also Call Us at +91 9324245547. <br />
      </span>&nbsp;</div></th>
	  <th scope="col" >&nbsp;</th>  
  </tr>
</table>  </div>
  <div id="rightSide">
 
  <span class="style11">Trip Details</span> <BR /><BR /><div align="justify"><span class="style6"><B>Source City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</B><span class="style7"><?php echo $this->wheels->source; ?></span> <BR /><B>Destination City: </B><span class="style7"><?php echo $this->wheels->destination; ?> </span><BR /><B>Trip Duration: &nbsp;&nbsp;&nbsp;&nbsp;</B><span class="style7"><?php echo $this->wheels->duration; ?>&nbsp;days</span> <BR /> <B>Journey Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B><span class="style7"><?php echo $this->wheels->date; ?> </span><br />
  --------------------------------------------<br />
    <b>Preffered Car:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="style7"><?php echo $this->wheels->carname ?></span><br />
      <b>Rate Per KM:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="style7">Rs. <?php echo $this->wheels->rateperkm ?> /-</span>
	  <br />
      <b>Estimated Amount:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="style7"><BR />Rs. <?php echo $this->wheels->amount ?> /-</span><br />
      <span class="style15">(please Note, This is just an Approximate Amount. The Actual Amount will be Quoted after analysis of complete Trip Details).</span>      <BR />
  <BR />
  </span> </div>
</div>
  <div class="clear"></div>
</div>

<p>This will go as an Email to <span class="style6"><?php echo $this->wheels->email; ?></span> and also at enquiry@wheelsonhire.co.in </p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="1%" rowspan="2" bgcolor="#CCCCCC" scope="col">&nbsp;</th>
    <th width="52%" rowspan="2" bgcolor="FBFBFB" scope="col"><img src="images/logoplain.PNG" alt="Wheels On Hire" width="262" height="84" /></th>
    <th width="47%" bgcolor="FBFBFB" class="style15 style16" scope="col"><div align="left"><a href="www.wheelsonhire.in">Home</a> | <a href="www.wheelsonhire.in">Outstation Travel</a> | <a href="www.wheelsonhire.in/index.php?tab=local">Local Travel</a> | <a href="www.wheelsonhire.in/index.php?page=specialpackages">Special Package</a> </div></th>
  </tr>
  <tr>
    <th scope="col" bgcolor="FBFBFB"><div align="left">Call Us On: +91 9324245547 <br />
    Mail us on: enquiry@wheelsonhire.co.in </div></th>
  </tr>
  <tr>
    <th height="103" colspan="3" scope="col"><div id="div">
      <div id="div2">
        <table width="100%" border:1px="border:1px" solid="solid" #CCC; cellspacing="2" cellpadding="0">
          <tr>
            <th width="68%" rowspan="2" scope="col"><div align="justify"><span class="style6"><BR /><BR />Dear <?php echo $this->wheels->name ?>, Thank You for Selecting Wheels On Hire for your Travel. <br />
                      <br />
              You will receive a Call from us within next 24 hours at your contact no <?php echo $this->wheels->contact ?>.<br />
              <br />
              You will subsequently receive E-Mail from us regarding the package offer<br /> 
              at <?php echo $this->wheels->email; ?>. <br />
              <br />
              For any other Query pertaining to your Travel or Booking Support feel<br /> 
              free to contact us at enquiry@wheelsonhire.co.in<br />
              <br />
              You can also Call Us at +91 9324245547. <br />
            </span>&nbsp;</div></th>
            <th width="32%" height="45" scope="col" ><div align="left"><span class="style6"><span class="style11">Trip Details</span><br />
            </span></div></th>
          </tr>
          <tr>
            <th scope="col" ><div align="left"><span class="style6"><b>Source City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><span class="style7"><?php echo $this->wheels->source; ?></span> <br />
                <b>Destination City: </b><span class="style7"><?php echo $this->wheels->destination; ?> </span><br />
                <b>Trip Duration: &nbsp;&nbsp;&nbsp;&nbsp;</b><span class="style7"><?php echo $this->wheels->duration; ?>&nbsp;days</span> <br />
                <b>Journey Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="style7"><?php echo $this->wheels->date; ?> </span><br />
              --------------------------------------------<br />
              <b>Preffered Car:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="style7"><?php echo $this->wheels->carname ?></span><br />
              <b>Rate Per KM:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="style7">Rs. <?php echo $this->wheels->rateperkm ?> /-</span> <br />
              <b>Estimated Amount:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="style7"><br />
              Rs. <?php echo $this->wheels->amount ?> /-</span><br />
              <span class="style15">(please Note, This is just an Approximate Amount. The Actual Amount will be Quoted after analysis of complete Trip Details).</span></span></div></th>
          </tr>
        </table>
      </div>
      <div id="div3"><br />
          <br />
        <div align="justify"><span class="style6"><br />
          <br />
          </span> </div>
      </div>
      <div class="clear"></div>
    </div></th>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
