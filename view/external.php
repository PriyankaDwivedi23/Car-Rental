
<html>
<head>
<style type="text/css">
.style6 {
	color: #FF9933;
	font-size: 18px;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
.style7 {
	color: #333333;
	font-size: 18px;
}
.style8 {color: #666666}
</style>

<body>
<?php
$rate=$_GET['rate'];
$amount = $_GET['amount'];
$driver_charge = $_GET['driver'];
$km = $_GET['km'];
?>
<table width="100%" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <th colspan="2" scope="col"><div align="left"><span class="style7">Price Details</span><br />
    -----------------------------------------------------</div></th>
  </tr>
  <tr>
    <th width="60%" scope="col"><div align="left" class="style8">Booking Price:
     
    </div></th>
    <th width="40%" scope="col"><div align="left"><span class="style6">Rs.
        <?php  echo $amount - $driver_charge; ?>
/ -</span></div></th>
  </tr>
  <tr>
    <th scope="col"><div align="left" class="style8">Driver Charges:</div></th>
    <th width="40%" scope="col"><div align="left"><span class="style6">Rs.
      <?php  echo $driver_charge; ?>
    /-</span></div></th>
  </tr>
  <tr>
    <th scope="col"><div align="left" class="style8">Wheels on Hire Fee: </div></th>
    <th width="40%" scope="col"><div align="left"><span class="style6">Rs. 0/-</span></div></th>
  </tr>
  
  <tr>
    <th colspan="2" scope="col"><div align="left">
      <BR />After <span class="style8"><?php echo $km ?> </span>KMs , Rs. <span class="style8"><?php echo $rate ?> </span>per KM will be payable by the customer for every KM travelled.<BR /><BR />
      State Permit Tax will be Extra where ever Applicable.<BR /><BR />
      Parking and Toll Charges Extra. <BR />
      <BR />
    </div></th>
  </tr></span>
</table>

</body>
</html>