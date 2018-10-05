
<style type="text/css">
*{margin:0; padding:0;}

body{
	background: url(../images/bg1.PNG);	
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
	background: url(select1.png) no-repeat;
	float:left;
	overflow: visible;
}/* CSS Document */
</style>
<?php $city=$_GET['city'];
$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('mydb');
$query="select location_name from location where city='$city' ";
$result=mysql_query($query);

?>
<select name="location" style="width:120px" >
<option>Select Location</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option ><?php echo $row['location_name'] ?></option>
<?php } ?>
</select>

