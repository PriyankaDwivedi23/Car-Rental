<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("mydb") or die(mysql_error());

$car=$_GET['car'];

$query="select * from car where carname='$car' ";
$result=mysql_query($query);
	  
	  while($row=mysql_fetch_array($result)) {
	  echo "Rs. " . $row['rate-per-km'] . " per KM";
	  echo "cost comes Here";
	  }
?>