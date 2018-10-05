<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
			mysql_select_db("mydb") or die(mysql_error());

if (!isset($_GET['op']))
{
?>

<body>
<table width="100%" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <form id="loginform" name="loginform" method="post" action='index.php?op=<?php echo "login" ?> ' >
    
	<th width="38%" scope="col"> <label>Email ID: </label></th>
    <th width="62%" scope="col">
	
        <div class="div_texbox">
    <input name="email" type="text" class="textbox" id="email" value="Please Enter your Email" />
	</div>
     
        </th>
  </tr>
  <tr>
    <th scope="col"><label>Password:</label></th>
    <th scope="col"> <div class="div_texbox">
    <input name="password" type="password" class="textbox" id="password" value="" />
	</div></th>
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
    
	
	<th scope="col">
	
	<div class="button_div">
	
      <input type="submit" name="Submit" value="Fetch My Info"/>
	  </div>
    </th>
	
	
	</form>  
	
	</tr>
</table>

<?php 
}
else
{
$email = $_POST['email'];
$password = $_POST['password'];

 $result = mysql_query("SELECT * from customer where email='$email' AND password='$password'") or die(		                     mysql_error());  
$num_rows = mysql_num_rows($result);
?> <table width="50%" border="0" cellspacing="2" cellpadding="2"> <?php
	if ($num_rows < 1 )
		{
		echo "You Dont seem to be a Registered User <BR>";
		echo "Let us get youself registered in just 1 min.<BR>";
		echo "<BR>";
		echo "Please Enter the Following Details<BR>";
		?>
		<table width="100%" border="0" cellspacing="2" cellpadding="0">
  <tr><BR>
    <th width="38%" scope="col">Enter your Name:</th>
    <th width="62%" scope="col"><form id="form1" name="form1" method="post" action='login.php?op=<?php echo "set" ?> '>
      <label>
        <input type="text" name="email" />
      </label>
        </th>
  </tr>
  <tr>
    <th scope="col">Enter your Email ID</th>
    <th scope="col"><input type="text" name="password" /></th>
  </tr>
  <BR>
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col"><label>
      <BR><input type="submit" name="Submit" value="Fetch My Info" />
    </label></th></form>  
	
	</tr>
</table>
		<?php
		
		
		}
		else
		{
		while($row = mysql_fetch_array( $result))
			     {
				 ?>
				
  <tr>
    <td>Name</td>
    <td><?php echo $row['name'] ?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $row['contact'] ?></td>
  </tr>
  
  <tr>
    <td>Contact</td>
    <td><?php echo $row['email'] ?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><?php echo $row['address'] ?></td>
  </tr>
				 <?php
				 
				 }
		}
	}
	


?>

</body>
</html>
