<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #000000}
.style2 {color: #0066CC}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" background="images/bg1.PNG">
<table width="100%" border="0" cellspacing="5" cellpadding="5" align="left" background="images/bg1.PNG">
  <tr>
    <th height="28" colspan="2" background="images/itenary_bg.PNG" scope="col">TRIP DETAILS </th>
    <th width="77%" rowspan="15" scope="col">Customer Information Form and Payment Options will be Here </th>
  </tr>
  <tr>
    <th width="11%" height="23" background="../images/itenary_bg.PNG" scope="col"><div align="left">From City: </div></th>
    <th width="12%" background="../images/itenary_bg.PNG" scope="col"><div align="left"><?php echo $source; ?></div>    </th>
  </tr>
  <tr>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left">To City: </div></th>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left"><?php echo $destination; ?></div>    </th>
  </tr>
  <tr>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left">Duration: </div></th>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left"><?php echo $duration; ?></div>    </th>
  </tr>
  <tr>
    <th height="10" background="../images/itenary_bg.PNG" scope="col"><div align="left">Trip Type: </div></th>
    <th height="10" background="../images/itenary_bg.PNG" scope="col"><div align="left"><?php echo $triptype; ?></div>    </th>
  </tr>
  <tr>
    <th height="11" background="../images/itenary_bg.PNG" scope="col"><div align="left">CAR:</div></th>
    <th height="11" background="../images/itenary_bg.PNG" scope="col"><div align="left"><?php echo $carname; ?></div>    </th>
  </tr>
  <tr>
    <th height="21" background="../images/itenary_bg.PNG" scope="col">&nbsp;</th>
    <th height="21" background="../images/itenary_bg.PNG" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th height="21" colspan="2" background="images/itenary_bg.PNG" scope="col">Vendor Details </th>
  </tr>
  <tr>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left">Vendor Name: </div></th>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left"><?php echo $vendor; ?></div>    </th>
  </tr>
  <tr>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left">City:</div></th>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left"><?php echo $source; ?></div>    </th>
  </tr>
  <tr>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left">Rate per KM: </div></th>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left"><?php echo $rateperkm; ?></div>    </th>
  </tr>
  <tr>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left">Estimated KMs </div></th>
    <th height="21" background="../images/itenary_bg.PNG" scope="col"><div align="left"><?php echo $km; ?></div>    </th>
  </tr>
  <tr>
    <th height="10" background="../images/itenary_bg.PNG" scope="col"><div align="left">Driver Charges </div></th>
    <th height="10" background="../images/itenary_bg.PNG" scope="col"><div align="left"><?php echo $drivercharge; ?></div>    </th>
  </tr>
  <tr>
    <th height="5" background="../images/itenary_bg.PNG" scope="col"><div align="left"></div></th>
    <th height="5" background="../images/itenary_bg.PNG" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th height="6" background="images/itenary_bg.PNG" scope="col"><div align="left">Total Amount:</div></th>
    <th height="6" background="../images/itenary_bg.PNG" scope="col"><div align="left"><?php echo $amount; ?></div>    </th>
  </tr>
  <tr>
    <th height="11" colspan="2" background="../images/itenary_bg.PNG" scope="col">&nbsp;</th>
    <th width="77%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th height="11" colspan="2" background="images/itenary_bg.PNG" scope="col">Terms and Conditions </th>
    <th width="77%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th height="11" colspan="2" background="../images/itenary_bg.PNG" scope="col"><p align="justify">After <?php echo $km; ?>, For every KM travelled Rs. <?php echo $rateperkm; ?> /Km  will be payable by the Customer. <span class="style2"><?php echo $msg; ?></span></p>
    
	<p align="justify">Driver charges are Rs. 250 per day.</p>
    <p align="justify">State permit tax is extra wherever applicable.</p>
    <p align="justify">Parking &amp; Toll charges extra.  </p></th>
    <th width="77%" scope="col">&nbsp;</th>
  </tr>
</table>
</body>
</html>
