<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("mydb") or die(mysql_error());
$query="select source,destination,carname,amount from specialpackages ";
$result=mysql_query($query);
	  
	  while($row=mysql_fetch_array($result)) {
	  
	  echo $row['source'] . " - " . $row['destination'] . "    "  . $row['carname'] . " " . "Rs. " . $row['amount'] . "/-";
		echo "<br>";
		
}

?>

</body>
</html>
