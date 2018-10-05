

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta name="title" content="Car Rental | Rent a Car Online | Car Hire Online | Budget Car Rent and Online Booking Service - Wheels On Hire">
<meta name="description" content="Get best deals on car rental service, online cab booking and car hire for all Indian cities.  Rent a car online, book luxury, AC, Non-AC cab for Airport transfers, city to city travel, and holiday or long distance tours.   Cab Booking available for New Delhi, Mumbai, Chennai, Kolkata and all other cities.">
<meta name="keywords" content="Car Rental, Car Booking, Car on Hire, Cab Hire, Cab Booking, Car Booking deals, car hire Discounts, Car on rent, cheap car hire, cheap cab booking">
<title>Car Rental | Rent a Car Online | Car Hire Online | Budget Car Rent and Online Booking Service - WheelsOnHire</title>


<style type="text/css">
		.tooltip {
			border-bottom: 1px dotted #000000; color: #000000; outline: none;
			cursor: help; text-decoration: none;
			position: relative;
		}
		.tooltip span {
			margin-left: -999em;
			position: absolute;
			
		}
		.tooltip:hover span {
			border-radius: 5px 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; 
			box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 5px 5px rgba(0, 0, 0, 0.1); -moz-box-shadow: 5px 5px rgba(0, 0, 0, 0.1);
			font-family: Calibri, Tahoma, Geneva, sans-serif;
			position: absolute; left: 1em; top: 2em; z-index: 99;
			margin-left: 0; width: 180px; float: left;
		}
		.tooltip:hover img {
			border: 0; margin: -10px 0 0 -55px;
			float: left; position: absolute;
		}
		.tooltip:hover em {
			font-family: Candara, Tahoma, Geneva, sans-serif; font-size: 1.2em; font-weight: bold;
			display: block; padding: 0.2em 0 0.6em 0;
		}
		.classic { padding: 0.8em 1em; float:left; }
		.custom { padding: 0.5em 0.8em 0.8em 2em; }
		* html a:hover { background: transparent; }
		.classic {background: #FFFFAA; border: 1px solid #FFAD33; float:left; left:auto}
		.critical { background: #FFCCAA; border: 1px solid #FF3334;	}
		.help { background: #9FDAEE; border: 1px solid #2BB0D7;	}
		.info { background: #9FDAEE; border: 1px solid #2BB0D7;	}
		.warning { background: #FFFFAA; border: 1px solid #FFAD33; }
		</style>

<style type="text/css">


.style1 {
	color: #336633;
	font-family: "Times New Roman", Times, serif;
}
.style4 {color: #666666; font-size: 14px; }
.style6 {
	color: #FF9933;
	font-size: 18px;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}

.style11 {
	font-size: 18px;
	font-family: "Palatino Linotype";
	color: #660033;
}
-->
</style>

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

</head>

<body  background="images/bg1.PNG"  leftmargin="0" rightmargin="0">

  <?php
$source = $_POST['outstation-source'];
$destination = $_POST['outstation-destination'];
$triptype = $_POST['outstationTripType'];
$date = $_POST['dateI'];
$duration = $_POST['duration'];


$driver_charge = 250 * $duration;



?>
  <table width="100%" height="70" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <th width="11%" height="37" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style1">
        <div align="right">Source City: </div>
      </div></th>
      <th width="5%" background="images/itenary_bg.PNG" scope="col" class="style4"><div align="left">&nbsp;<?php echo $source ?></div></th>
      <th width="7%" background="images/itenary_bg.PNG" scope="col">&nbsp;</th>
      <th width="8%" background="images/itenary_bg.PNG" scope="col"><div align="right"><span class="style1">Trip Type</span>: </div></th>
      <th width="15%" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style4">&nbsp;<?php echo $triptype ?></div>      </th>
      <th width="10%" background="images/itenary_bg.PNG" class="style4" scope="col">Journey Date: </th>
      <th width="39%" background="images/itenary_bg.PNG" scope="col"><div align="left"><span class="style4">&nbsp;<?php echo $date . "(" . $day . ")" ?></span></div></th>
      <th width="5%" background="images/itenary_bg.PNG" scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th height="33" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style1">
        <div align="right">Destination City: </div>
      </div></th>
      <th height="33" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style4">&nbsp;<?php echo $destination ?></div></th>
      <th height="33" background="images/itenary_bg.PNG" scope="col">&nbsp;</th>
      <th height="33" background="images/itenary_bg.PNG" scope="col"> <div align="right"><span class="style1">Duration</span>:</div></th>
      <th height="33" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style4">&nbsp;<?php echo $duration ?> &nbsp; Day</div>      </th>
      <th height="33" background="images/itenary_bg.PNG" class="style4" scope="col">&nbsp;</th>
      <th height="33" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style11">&nbsp;<?php echo $msg ?></div></th>
      <th height="33" background="images/itenary_bg.PNG" scope="col">&nbsp;</th>
    </tr>
  </table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="15%" height="29" background="images/trbg.PNG" scope="col"><div align="left"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAB </span></div></th>
    <th width="14%" background="images/trbg.PNG" scope="col"><div align="center"><span class="style1">FEATURES</span></div></th>
    <th width="13%" background="images/trbg.PNG" scope="col"><span class="style1">VENDOR</span></th>
    <th width="12%" background="images/trbg.PNG" scope="col"><span class="style1">CAPACITY</span></th>
    <th width="14%" background="images/trbg.PNG" scope="col"><span class="style1">PRICE DETAILS </span> </th>
    <th width="18%" background="images/trbg.PNG" scope="col"><span class="style1">PAYABLE AMOUNT </span> </th>
	<th width="14%" background="images/trbg.PNG" scope="col">&nbsp;</th>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
 
  <?php
	  $result = mysql_query("SELECT carname, description, seating, rateperkm, vendorname, actualquantity, rating, image, companyname
FROM car, vendor, vendor_has_car
WHERE vendor.id = vendor_has_car.vendor_id AND vendor_has_car.car_id = car.id AND vendor.sourcecity = '$source' AND vendor_has_car.actualquantity >0 ") or die(mysql_error());  
	  
	  
	  
	  while($row = mysql_fetch_array( $result)) {
	  ?>  
	  <?php $amount = $km * $row['rateperkm'];?> 
	
		<?php $image = $row['image']; ?>
		<?php
		//$id=$row['id'];
		$vendor = $row['companyname'];
		$car = $row['carname'];
		?>
	   <tr  height="100"> 
    <th width="15%" height="29"  scope="col" ><div align="left"><span class="style6">&nbsp;<?php echo $row['carname']     ?><br /> </span>   <img src="<?php print $row['image']; ?>" </div></th>
    <th width="14%"  scope="col"><div align="center"><span class="style4"><?php echo $row['description']     ?></span></div></th>
    <th width="13%"  scope="col"><div align="center"><span class="style4"><?php echo $row['companyname']     ?><br />
     <img align="middle" src="<?php echo $row['rating']  ;   ?>"</img><br> <a href=index.php?page=review>reviews</a>  </span></div><br /></th>
    <th width="12%"  scope="col"><span class="style4"><?php echo $row['seating']     ?> <b>+</b>&nbsp;Driver</span></th>
    <th width="14%"  scope="col"><div align="center"><span class="style4">Total KM:</span> <span class="style6">&nbsp;<?php echo $km;     ?> &nbsp;&nbsp; <br />
      </span> <span class="style4">Rate/KM: Rs.</span><span class="style6">
        <?php  echo $row['rateperkm']     ?> 
        </span><br />
		<a class="tooltip" onmouseover="getLocation('view/getrate1.php?car=<?php echo $car?>') href="#">Price Info<span class="classic" align="left"><div id="cardiv"> Terms and Conditions <BR> -----------------------------------<BR><BR>After <?php echo $km; ?> KM, Above mentioned Car Rate per KM will be charged. <BR> <BR> State Permit Tax whereever Applicable will be paid by the Customer.<br> <BR>Parking and Toll Chargers will be Extra, if Required. </div></span></a>
      </div></th>
    <th width="18%"scope="col"><span class="style6"><?php $amount = $amount + $driver_charge; echo "INR " .$amount ?>/-</span></th>
    <th width="14%"scope="col"><form method="post" action="index.php?page=book&carname=<?php echo $row['carname'] ?>&vendor=<?php echo $row['companyname'] ?>&amount=<?php echo $amount ?>&rateperkm=<?php echo $row['rateperkm'] ?> " >
	<input type="hidden" name="source" value="<?php echo $source; ?>">
    <input type="hidden" name="destination" value="<?php echo $destination; ?>">
    <input type="hidden" name="triptype" value="<?php echo $triptype; ?>">
    <input type="hidden" name="duration" value="<?php echo $date; ?>">
    <input type="hidden" name="date" value="<?php echo $duration; ?>">
    <input type="hidden" name="carname" value="<?php echo $row['carname'] ?>">
    <input type="hidden" name="vendor" value="<?php echo $row['companyname'] ?>">
    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
     <input type="hidden" name="km" value="<?php echo $km; ?>">
	  <input type="hidden" name="rateperkm" value="<?php echo $row['rateperkm']; ?>">
	  <input type="hidden" name="drivercharge" value="<?php echo $driver_charge; ?>">
 <input type="hidden" name="msg" value="<?php echo $msg; ?>">
	<input type="image" src="images/book.PNG"  /></th>
  </tr></form>
<tr height="5"></tr>

        
  <?php } ?></table>
<br />

<p>&nbsp;</p>
<span class="style9">
<style type="text/css">
div#tipDiv {
    font-size:14px; line-height:1.2;
    color:#999999; background-color:#CCFF99; 
    border:1px solid #FFCC33; padding:4px; 
    width:210px; margin-left:0px; background-image:url(images/itenary_bg.PNG); 
	float:left; margin-left:0px; 
	text-align:justify;
}

</style>
</span>




<p>&nbsp;</p>
</body>
</html>
