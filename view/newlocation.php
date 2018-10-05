 <?php
 
  $location = $_GET['location'];
  $city = $_GET['city'];
  $duration = $_GET['duration'];
 
  mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("mydb") or die(mysql_error());
	  $result = mysql_query("select carname,image,description,seating,companyname,rating,garagelocation,localdrivercharge,rateperkm,sourcecity from car,vendor,vendor_has_car where car.id=vendor_has_car.car_id AND vendor_has_car.vendor_id=vendor.id AND actualquantity>0 AND sourcecity = '$city'  ") or die(mysql_error());  
	  
	
	  while($row = mysql_fetch_array( $result)) {
	  ?>  
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
 
	   <tr > 
    <th width="13%" height="29"  scope="col" ><div align="left"><span class="style6">&nbsp;<?php echo $row['carname']     ?><br /> </span>   <img src="<?php print $row['image']; ?>" </div></th>
    <th width="11%"  scope="col"><div align="center"><span class="style4"><?php echo $row['description']     ?></span></div></th>
    <th width="12%"  scope="col"><div align="center"><span class="style4"><?php echo $row['companyname'];     ?><br />
     <img align="middle" src="<?php echo $row['rating']  ;   ?>"</img><br> <a href=index.php?page=review>reviews</a>  </span></div><br /></th><?php $companyname = $row['companyname']; ?>
    <th width="9%"  scope="col"><span class="style4"><?php echo $row['seating']     ?> <b>+</b>&nbsp;Driver</span></th>
     <th width="14%"  scope="col" align=""><span class="style4"><?php 
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
	$km = $duration  + $l3;
	echo $km;    ?> &nbsp;&nbsp; <br />
      </span> <span class="style4">Rate/KM: Rs.</span><span class="style6">
        <?php  echo $row['rateperkm']     ?> 
        </span><br />
     <span class="style4" >Driver Charge&nbsp;Rs.</span> <span class="style6"><?php echo $row['localdrivercharge']; ?>/-</span></div></th>
    <th width="12%"scope="col"><span class="style6"><?php $amount = $km *  $row['rateperkm'] + $row['localdrivercharge']; echo "INR " .$amount ?>/-</span></th>
    <th width="10%"scope="col"><form method="post" action="index.php?page=booklocal&carname=<?php echo $row['carname'] ?>&vendor=<?php echo $row['companyname'] ?>&amount=<?php echo $amount ?>&rateperkm=<?php echo $row['rateperkm'] ?> " >
	<input type="hidden" name="city" value="<?php echo $city; ?>">
    <input type="hidden" name="location" value="<?php echo $location; ?>">
    <input type="hidden" name="triptype" value="<?php echo $triptype; ?>">
    <input type="hidden" name="duration" value="<?php echo $duration_text; ?>">
    <input type="hidden" name="date" value="<?php echo $date1; ?>">
    <input type="hidden" name="carname" value="<?php echo $row['carname'] ?>">
    <input type="hidden" name="vendor" value="<?php echo $row['companyname'] ?>">
    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
     <input type="hidden" name="km" value="<?php echo $km; ?>">
	  <input type="hidden" name="rateperkm" value="<?php echo $row['rateperkm']; ?>">
	  <input type="hidden" name="drivercharge" value="<?php echo $driver_charge; ?>">
 <input type="hidden" name="msg" value="<?php echo $msg; ?>">
	<input type="image" src="images/book.PNG"  />
	</th>
  </form>
<tr height="5"></tr>

        
  <?php } ?></table>