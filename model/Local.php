<?php

class Local
{

public $city;
public $location;
public $date;
public $duration;
public $msg ;
public $carname;
public $companyname;
public $amount;
public $km;
public function getlocaldata()
 {
	$this->city = $_POST['city'];
	$this->location = $_POST['location']; 
	$this->date = $_POST['dateI'];
	$this->duration = $_POST['duration'];
 }
 


function getlocation()
{
	
	$city = $this->city;
	$duration = $this->duration;
	$result = mysql_query("SELECT DISTINCT location_name FROM location where city='$city'") 
	or die(mysql_error());
	
 echo "<select class=style11 style=width:160px name=newlocation onchange=getLocation('view/newlocation.php?city=$city&duration=$duration&location='+this.value)>"; 
 echo "<option>Select New Location</option>"  ;
	  while($row = mysql_fetch_array( $result )) 
  
		{
		   echo '<option value="'.$row['location_name'].'">'.$row['location_name'].'</option>';
		}
echo "</select>";
}

function getlocation1()
{
	//$city1 = $this->city;
	
	$result = mysql_query("SELECT DISTINCT location_name FROM location where city='$this->city' ") 
	or die(mysql_error());
	
 echo "<select class=style11 style=width:160px name=newlocation onchange=getLocation('view/newlocation.php?city=$this->city&duration=$this->duration&location='+this.value)>"; 
 echo "<option>Select New Location</option>"  ;
	  while($row = mysql_fetch_array( $result )) 
  
		{
		   echo '<option value="'.$row['location_name'].'">'.$row['location_name'].'</option>';
		}
}


public function getlocalbookingdata()
{
			 $this->city = $_POST['city'];
			 $this->location = $_POST['location'];
			 $this->duration = $_POST['duration'];
			 $this->date = $_POST['date'];
			 $this->carname = $_POST['carname'];
			 $this->companyname = $_POST['companyname'];
			 $this->amount = $_POST['amount'];
			 $this->km = $_POST['km'];
}


}
?>