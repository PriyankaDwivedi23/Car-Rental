

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta name="title" content="Car Rental | Rent a Car Online | Car Hire Online | Budget Car Rent and Online Booking Service - Wheels On Hire">
<meta name="description" content="Get best deals on car rental service, online cab booking and car hire for all Indian cities.  Rent a car online, book luxury, AC, Non-AC cab for Airport transfers, city to city travel, and holiday or long distance tours.   Cab Booking available for New Delhi, Mumbai, Chennai, Kolkata and all other cities.">
<meta name="keywords" content="Car Rental, Car Booking, Car on Hire, Cab Hire, Cab Booking, Car Booking deals, car hire Discounts, Car on rent, cheap car hire, cheap cab booking">
<title>Car Rental | Rent a Car Online | Car Hire Online | Budget Car Rent and Online Booking Service - WheelsOnHire</title>

<style type="text/css">
<!--
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
.style9 {color: #FCFCFF}
.style10 {
	color: #999999;
	font-size: 12px;
}
-->
</style>

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

</head>

<body  background="images/bg1.PNG"  leftmargin="0" rightmargin="0">


  <table width="100%" height="70" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <th width="11%" height="37" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style1">
        <div align="right">Selected City: </div>
      </div></th>
      <th width="17%" background="images/itenary_bg.PNG" scope="col" class="style4"><div align="left">&nbsp;<?php echo $this->local->city ?></div></th>
      <th width="3%" background="images/itenary_bg.PNG" scope="col">&nbsp;</th>
      <th width="8%" background="images/itenary_bg.PNG" scope="col"><div align="right"><span class="style1">Date</span>: </div></th>
      <th width="13%" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style4">&nbsp;<?php echo $this->local->date ?></div>      </th>
      <th width="1%" background="images/itenary_bg.PNG" class="style4" scope="col">&nbsp;</th>
      <th width="46%" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style10"><span class="style4">&nbsp;</span>Please note,Total KM is calculated from Company Garage to your Selected location. You can Change the Location from the below dropdown list. </div></th>
      <th width="1%" background="images/itenary_bg.PNG" scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th height="33" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style1">
        <div align="right">Location: </div>
      </div></th>
      <th height="33" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style4">&nbsp;<?php echo $this->local->location; ?></div></th>
      <th height="33" background="images/itenary_bg.PNG" scope="col">&nbsp;</th>
      <th height="33" background="images/itenary_bg.PNG" scope="col"> <div align="right"><span class="style1">Duration</span>:</div></th>
      <th height="33" background="images/itenary_bg.PNG" scope="col"><div align="left" class="style4">&nbsp;<?php echo $duration_text; ?> &nbsp;</div>      </th>
      <th height="33" background="images/itenary_bg.PNG" class="style4" scope="col">&nbsp;</th>
      <th height="33" background="images/itenary_bg.PNG" scope="col" class="style1">Select New Location: <?php $this->local->getlocation();?></th>
      <th height="33" background="images/itenary_bg.PNG" scope="col">&nbsp;</th>
    </tr>
  </table>
  
  
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="13%" height="29" background="images/trbg.PNG" scope="col"><div align="left"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAB </span></div></th>
    <th width="11%" background="images/trbg.PNG" scope="col"><div align="center"><span class="style1">FEATURES</span></div></th>
    <th width="12%" background="images/trbg.PNG" scope="col"><span class="style1">VENDOR</span></th>
    <th width="9%" background="images/trbg.PNG" scope="col"><span class="style1">CAPACITY</span></th>
    <th width="14%" background="images/trbg.PNG" scope="col"><span class="style1"> GARAGE LOCATION</span> </th>
   <th width="20%" background="images/trbg.PNG" scope="col"><span class="style1">PRICE DETAILS</span></th>
    <th width="12%" background="images/trbg.PNG" scope="col"><span class="style1">PAYABLE AMOUNT </span> </th>
	<th width="10%" background="images/trbg.PNG" scope="col">&nbsp;</th>
  </tr>
</table> <div id="citydiv"> 
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
  
  <?php
  $city = $this->local->city;
  $location = $this->local->location;
	  $result = mysql_query("select carname,image,description,seating,companyname,rating,garagelocation,localdrivercharge,rateperkm,sourcecity from car,vendor,vendor_has_car where car.id=vendor_has_car.car_id AND vendor_has_car.vendor_id=vendor.id AND actualquantity>0 AND sourcecity = '$city'  ") or die(mysql_error());  
	  
	
	  while($row = mysql_fetch_array( $result)) {
	  ?>  
	
	   <tr  height="100"> 
    <th width="13%" height="29"  scope="col" ><div align="left"><span class="style6">&nbsp;<?php echo $row['carname']     ?><br /> </span>   <img src="<?php print $row['image']; ?>" </div></th>
    <th width="11%"  scope="col"><div align="center"><span class="style4"><?php echo $row['description']     ?></span></div></th>
    <th width="12%"  scope="col"><div align="center"><span class="style4"><?php echo $row['companyname'];     ?><br />
     <img align="middle" src="<?php echo $row['rating']  ;   ?>"</img><br> <a href=index.php?page=review>reviews</a>  </span></div><br /></th><?php $companyname = $row['companyname']; ?>
    <th width="9%"  scope="col"><span class="style4"><?php echo $row['seating']     ?> <b>+</b>&nbsp;Driver</span></th>
     <th width="14%"  scope="col" align=""><span class="style4">
	 
	 <?php 
	 $i1 = mysql_query("select DISTINCT id1 from distance,location where id1=location.id AND location_name = '$location' "); 
	 $i2 = mysql_query("select DISTINCT id2 from distance,location,vendor where id2=location.id  AND location_name=garagelocation AND companyname = '$companyname'  "); 
	  while($row1 = mysql_fetch_array( $i1)) {
	  $l1 =  $row1['id1'];
	  }
	  while($row2 = mysql_fetch_array( $i2)) {
	  $l2 =  $row2['id2'];
	  } 
	  $i3 = mysql_query("select distance from distance where id1 = '$l1' AND id2 = '$l2'");
	  while($row3 = mysql_fetch_array( $i3)) {
	  $l3 =  $row3['distance'];
	  }
	  
	  echo $row['garagelocation'];
	  echo "<BR>";
	  echo "<span class=style10 > Distance from " . $location . " : ";
	  echo $l3 . " KM </span>";
	 ?> </span></th>
    
	<th width="20%"  scope="col"><div align="center"><span class="style4">Total KM:</span> <span class="style6">&nbsp;<?php 
	$km = $this->local->duration  + $l3;
	echo $km;    ?> &nbsp;&nbsp; <br />
      </span> <span class="style4">Rate/KM: Rs.</span><span class="style6">
        <?php  echo $row['rateperkm']     ?> 
        </span><br />
     <span class="style4" >Driver Charge&nbsp;Rs.</span> <span class="style6"><?php echo $row['localdrivercharge']; ?>/-</span></div></th>
    <th width="12%"scope="col"><span class="style6"><?php $amount = $km *  $row['rateperkm'] + $row['localdrivercharge']; echo "INR " .$amount ?>/-</span></th>
    <th width="10%"scope="col"><form method="post" action="index.php?page=book&carname=<?php echo $row['carname'] ?>&vendor=<?php echo $row['companyname'] ?>&amount=<?php echo $amount ?>&rateperkm=<?php echo $row['rateperkm'] ?> " >
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
	<input type="image" src="images/book.PNG"  />
	</th>
  </form></tr>
<tr height="5"></tr>

        
  <?php } ?></table>
  </div>
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



<p class="style10">&nbsp;</p>
</body>
</html>
