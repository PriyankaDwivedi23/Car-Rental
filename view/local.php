
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="title" content="Car Rental | Rent a Car Online | Car Hire Online | Budget Car Rent and Online Booking Service - Wheels On Hire">
<meta name="description" content="Get best deals on car rental service, online cab booking and car hire for all Indian cities.  Rent a car online, book luxury, AC, Non-AC cab for Airport transfers, city to city travel, and holiday or long distance tours.   Cab Booking available for New Delhi, Mumbai, Chennai, Kolkata and all other cities.">
<meta name="keywords" content="Car Rental, Car Booking, Car on Hire, Cab Hire, Cab Booking, Car Booking deals, car hire Discounts, Car on rent, cheap car hire, cheap cab booking">
<title>Car Rental | Rent a Car Online | Car Hire Online | Budget Car Rent and Online Booking Service - WheelsOnHire</title>


 <link rel="stylesheet" type="text/css" href="css/style.css"/>
 

 <script type="text/javascript" src="js/form.js"></script>
  

	
<style type="text/css">
*{margin:0; padding:0;}

body{
	background: url(images/bg1.PNG);	
	font:normal 11px/1.5em Arial, Helvetica, sans-serif;
}
a{outline:none;}

.select {
	position: absolute;
	width: 150px; /* With the padding included, the width is 190 pixels: the actual width of the image. */
	height: 40px;
	padding: 10px 35px 5px 25px;
	color: #666666;
	font: 16px/21px arial,sans-serif;
	background: url(images/select1.png) no-repeat;
	float:left;
	overflow: visible;
}/* CSS Document */
#tabContaier{
	background:#f0f0f0;
	border:1px solid #fff;
	margin:0px auto;
	padding:2px;
	position:relative;
	width:89%;
	height:100%;
}
	#tabContaier ul{
		overflow:hidden;
		border-right:0px solid #fff;
		height:35px;
		position:absolute;
		z-index:100;
	}
	#tabContaier li{
		float:left;
		list-style:none;
	}
	#tabContaier li a{
		background:#ccff66;
		border:1px solid #fcfcfc;
		border-right:0;
		color:#666;
		cursor:pointer;
		display: block;
		height:35px;
		line-height:35px;
		padding:0 25px;
		text-decoration:none;
		
	}
	#tabContaier li a:hover{
		background:#f5f5f5;
	}
	#tabContaier li a.active{
		background:#FFFFFF;
		border:5px solid #fff;
		border-right:0;
		color:#666666;
	}
	.tabDetails{
		background:#FFFFFF;
		border:0px solid #fff;
		margin:35px 	0 0;
	}
	.tabContents{
		padding:00px
	}
	.tabContents h1{
		font:normal 24px/1.1em Georgia, "Times New Roman", Times, serif;
		padding:0 0 10px;
	}
	.tabContents p{
		padding:0 0 10px;
	}
.style11 {
	font-family: "Palatino Linotype";
	font-size: 14px;
	color: #006666;
}
</style>
		<link rel="stylesheet" type="text/css" href="css/calendar-eightysix-v1.1-default.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/calendar-eightysix-v1.1-vista.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/calendar-eightysix-v1.1-osx-dashboard.css" media="screen" />
	
	<script type="text/javascript" src="js/mootools-1.2.4-core.js"></script>
	<script type="text/javascript" src="js/mootools-1.2.4.4-more.js"></script>
	<script type="text/javascript" src="js/calendar-eightysix-v1.1.js"></script>
	
	<script type="text/javascript">
		window.addEvent('domready', function() {
			//Example I
			new CalendarEightysix('exampleI', { 'offsetY': -4 });
		
			
			//Example V
			new CalendarEightysix('exampleV', { 'theme': 'default red', 'defaultDate': 'next Wednesday', 'minDate': 'tomorrow', 'offsetY': -4 });
			
		
			
			
			//Example XIII
			var calendarXIII = new CalendarEightysix('exampleXIII', { 'injectInsideTarget': true, 'alwaysShow': true, 'pickable': false });
			calendarXIII.addEvent('rendermonth', function(e) {
				//The event returns all the date related elements within the calendar which can easily be iterated
				e.elements.each(function(day) {
					day.set('title', day.retrieve('date').format('%A %d %B'));
					if(day.retrieve('date').get('date') == 14) {
						day.setStyles({ 'color': 'firebrick', 'font-weight': 'bold', 'cursor': 'pointer' }).addEvent('click', function() { alert('Fourteen is awesome!'); } );
					}					
				});
			});
			calendarXIII.render(); //Render again because while initializing and doing the first render it did not have the event set yet
		
		});	
	</script>
<script language="JavaScript" type="text/javascript">
function validateForm()
{
var x=document.forms["myForm"]["outstation-source"].value;
var y=document.forms["myForm"]["outstation-destination"].value;
var z=document.forms["myForm"]["dateI"].value;
  
if (x==null || x=="" || x=="---Select---")
  {
  alert("Please select the Source City");
  return false;
  } 
  
 if (y==null || y=="" || y=="---Select---")
  {
  alert("Please select the Destination City");
  return false;
  } 
  
  if(x == y)
  {
  alert("You have selected SAME city as Source and Destination \n Access Local City Usage Tab if You wish to book a Local Cab");
  return false;
  }
 
  if(z=="" || z=="null")
  {
  alert("Please Select the date");
  return false;
  }
     
    
    
  t1="10/08/2012" ;
  t2="15/08/2012";
   var my_date=Date("Month/dd/yyyy");
 
   //Total time for one day
        var one_day=1000*60*60*24; 
//Here we need to split the inputed dates to convert them into standard format

       
         
		 var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!


var yyyy = today.getFullYear();
if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} var today = mm+'/'+dd+'/'+yyyy;



 var x=t1.split("/");     
        var y=t2.split("/");
  //date format(Fullyear,month,date) 

        var date1=new Date(x[2],(x[1]-1),x[0]);
  
        var date2=new Date(y[2],(y[1]-1),y[0])
        var month1=x[1]-1;
        var month2=y[1]-1;
        
        //Calculate difference between the two dates, and convert to days
               
        Diff=Math.ceil((date2.getTime()-date1.getTime())/(one_day)); 



}
</script> 
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="100%" height="442" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="65%" scope="col">
	<div id="tabContaier">
		
	
<ul id="tabs">
<li id="tab2"><a class="active" href="index.php?tab=local">Local City Usage</a></li>
<li id="tab1"><a  href="index.php">Outstation</a></li>

<li id="tab3"><a href="index.php?tab=transfer">Transfer Services</a></li>
</ul>
	<div class="tabDetails">
    	<div id="tab1" class="tabContents">
		
<table width="100%" border="0" cellspacing="0" cellpadding="0">
          
          <tr>
            <th width="10%" height="31" align="left" scope="col"></th>
        </tr>
      </table>

<script>
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
	
	
	
	function getLocation(strURL) {		
		
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
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

	  
<form name="myForm"  method="post" action="index.php?page=local" >
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="10%" height="32" align="left" scope="col"><div align="center"><img src="images/wheels.ico" width="23" height="18" /></div></th>
    <th width="44%" align="left" scope="col"><img src="images/local.PNG" alt="I Want a Cab from"/><br /></th>
    <th width="46%" align="left" scope="col"><img src="images/location.PNG" width="125" height="22" /></th>
  </tr>
  <tr>
    <th height="26" align="left" scope="col">&nbsp;</th>
    <th width="44%" align="left" scope="col"><div align="left">
      
	   <select class="style11" style="width:120px" name="city" onChange="getLocation('view/showlocation.php?city='+this.value)" >
	<option>Select City</option>
	  <?php 
	 $this->wheels-> getCity(); 
		?>
	  </select>
    </div></th>
    <th width="46%" align="left" scope="col"><div align="left">
   <div id="citydiv">   <select name="location"> <option>Select Location</option>
	
        </select>
      </select></div>
    </div></th>
  </tr>
</table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          
          <tr>
            <th width="10%" height="31" align="left" scope="col">&nbsp;</th>
          </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th width="10%" height="22" align="left" scope="col">&nbsp;</th>
          </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th width="9%" height="21" align="left" scope="col"><div align="center"><img src="images/w.PNG" width="23" height="18" /></div></th>
            <th colspan="5" align="left" scope="col"><img src="images/when.PNG" alt="Trip Type" width="46" height="21" /></th>
          </tr>
          <tr>
            <th height="16" align="left" scope="col">&nbsp;</th>
            <th colspan="5" align="left" scope="col"><img src="images/line.PNG" width="90%" height="13" /></th>
          </tr>
          <tr>
            <th height="30" align="left" scope="col">&nbsp;</th>
            <th colspan="3" align="left" scope="col"><span class="style11">Select Date </span></th>
            <th width="4%" rowspan="2" align="left" scope="col"><img src="../images/faqhead_bg.gif" width="1" height="33" /></th>
            <th width="45%" align="left" scope="col"><div align="left"><span class="style11"> Duration</span></div></th>
          </tr>
          <tr>
            <th height="31" align="left" scope="col">&nbsp;</th>
            <th colspan="3" align="left" scope="col"><input id="exampleI" name="dateI" type="text" maxlength="10" 
			 onchange="getDate('view/validateDate.php?date='+this.value)" ></th>
            
			<th width="51%" align="center" scope="col"><div align="left"><span class="inputOuter flL">
              <select name="duration"  style="width:120px"  >
                <option value="80" selected="selected">Full Day/80 KM</option>
                <option value="40">Half Day/40 KM</option>
              </select>
            </span></div></th>
          </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th width="9%" height="18" align="left" scope="col">&nbsp;</th>
            <th width="91%" align="left" scope="col"><?php echo $msg; ?></th>
          </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th width="24%" height="22" align="left" scope="col"><div align="right"></div></th>
            <th width="69%" align="left" scope="col">
              
                <div align="right">
                  <input type="image" name="submit" src="images/search.PNG" value="Search-Cabs" width=150px  />
                </div></th>
            <th width="7%" align="left" scope="col">&nbsp;</th>
          </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th width="10%" height="2" align="left" scope="col">
            
      </form></th>
  </tr>
  <tr>
    <th height="58" scope="col">&nbsp;</th>
  </tr>
</table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th width="10%" height="22" align="left" scope="col"><img src="images/help.PNG" width="100%" height="39" /></th>
          </tr>
        </table>
        

	
	</th>
	<th width="65%" scope="col">
	<img src="images/steps.PNG" width="346" height="453" />	</th>
	
  </tr>

</table>
 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <div id="wrapper">
  <div class="container">
            		<div id="service-bar">
  <tr>
    <th scope="col">
	<div class="services">
         <img src="images/join.png" alt="img" />
       <h2>Wheels on Hire Blog </h2>
            <p align="justify">Find out Reviews about various locations, features traven destinations, latest packages<span class="readmore"><a href="#">Read more</a></span>        </p>
            </div>	</th>
    <th scope="col">
	<div class="services"><img src="images/join.png" alt="img" />
	  <h2>Make Your Own Trip </h2>
            <p align="justify">Need to Work on this!!! This module is very Important..<br />
              <span class="readmore"><a href="#">Read more</a></span>    </p>
          <th scope="col"><div class="services">
         <img src="images/donate.png" alt="img" />
       <h2>Track Your Booking</h2>
            <p align="justify">Customer will enter the booking verification no here to trak the booking. The Number will be provided at the time of booking via. Email  ...</p>
            <span class="readmore"><a href="#">TRACK</a></span>  </tr>
  <tr>
    <th scope="col"><img src="images/shadows.png" width="100%" height="21" /></th>
    <th scope="col"><img src="images/shadows.png" width="100%" height="21" /></th>
    <th scope="col"><img src="images/shadows.png" width="100%" height="21" /></th>
  </tr>
  </div>
  </div>
</div>
</table>
</body>
</html>
