<?php
mysql_connect("184.168.154.29", "bacommunity", "ocai101phkhcVW") or die(mysql_error());
			mysql_select_db("bacommunity") or die(mysql_error());
			//echo "DB COnnected";
$car=$_GET['car'];

$query="select * from car where carname='$car' ";
$result=mysql_query($query);
	  
	  while($row=mysql_fetch_array($result)) {
	  $rate = $row['rate-per-km'];
	  echo "Rs. " . $row['rate-per-km'] . " per KM";
	  }
?>