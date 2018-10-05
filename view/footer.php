<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="css/style.css"/>
<title>Car Rental System</title>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript">
</script>
<script type="text/javascript" src="js/csshorizontalmenu.js">
	</script>
	<link rel="stylesheet" type="text/css" href="css/csshorizontalmenu.css" />
<script type="text/javascript">
$(document).ready(function(){
    $('#slideshow').cycle({
        fx:     'fade',
        speed:  'slow',
        timeout: 3000,
        pager:  '#slider_nav',
        pagerAnchorBuilder: function(idx, slide) {
            // return sel string for existing anchor
            return '#slider_nav li:eq(' + (idx) + ') a';
        }
    });
});
</script>
<style type="text/css">
<!--
.style14 {color: #666666}
.style15 {
	color: #CCCCCC;
	font-size: 12px;
}
.style16 {
	font-size: 8px;
	color: #999999;
}
#Layer1 {
	position:absolute;
	width:112px;
	height:40px;
	z-index:1;
	left: 35px;
	top: 62px;
}
.style18 {	color: #330000;
	font-size: 24px;
	font-weight: bold;
	font-family: "Lucida Calligraphy";
}
-->
</style>
</head>
<body  leftmargin="0" bottommargin="0" topmargin="0" rightmargin="0">
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/bg-footer1.JPG">
 
  <tr>
    <th height="36" scope="col"><div align="right"><span class="style15">copyright @ 2012 WheelsOnHire</span> <a href="index.php?page=terms-and-conditions">privacy policy</a></div></th>
  </tr>
</table>
<table width="100%" height="125" border="0" cellpadding="0" cellspacing="0" background="images/bg-footer2.JPG" >
  <tr>
    <th width="25%" scope="col"><p><br />
      </p>
    </th>
    <th width="75%" scope="col"><div align="left">
      <p align="right" class="style14"><a href="index.php?tab=local">Local City Usage</a>  | <a href="index.php">Outstation Travel</a> | <a href="index.php?tab=transfer">Transfer services</a>|</p>
      <p align="right" class="style14">&nbsp;</p>
    </div></th>
  </tr>
</table>
</body>
</html>

