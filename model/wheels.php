<?php


class wheels {
	public $model;
	public $source;
	public $destination;
	public $duration;
	public $triptype;
	public $date;
	public $carname;
	public $vendor;
	public $amount;
	public $km;
	public $rateperkm;
	public $drivercharge;
	public $msg;
	public $name;
	public $contact;
	public $email;
	
	
	
	
	public function __construct()  
    {  
    
	} 
	
	public function outstation_getdata()
	{
	   $this->source = $_POST['outstation-source'];
	 
       $this->destination = $_POST['outstation-destination'];
       $this->duration = $_POST['duration'];	
	   $this->triptype = $_POST['outstationTripType'];
	   $this->date = $_POST['dateI'];	
	   
	 
	
	}
	
	

public function convert_date_day()
	{
	$date = $_POST['dateI'];
	$dt = strtotime($date);
	$day = date("D", $dt);
	if ($day == "Mon")
	  {
	    return "Monday";
      }
	if ($day == "Tue")
	  {
	    return "Tuesday";
      }
	if ($day == "Wed")
	  {
	    return "Wednesday";
      }
	if ($day == "Thu")
	  {
	    return "Thursday";
      }
	if ($day == "Fri")
	  {
	    return "Friday";
      }
	if ($day == "Sat")
	  {
	    return "Saturday";
      }
	if ($day == "Sun")
	  {
	    return "Sunday";
      }
	}


public function distance()
	{
	   $source = $_POST['outstation-source'];
       $destination = $_POST['outstation-destination'];
       $duration = $_POST['duration'];	
	   $triptype = $_POST['outstationTripType'];
	   $distance = 0;
	   
	   if ($triptype == "one way trip")
	     {
		   $result = mysql_query("SELECT * from marquee_routes where source='$source' AND destination='$destination'") or die(		                     mysql_error());  
	       $result1 = mysql_query("SELECT * from marquee_routes where source='$destination' AND destination='$source'") or die(		                     mysql_error()); 
		   $number_of_rows = mysql_num_rows($result);
		   $number_of_rows1 = mysql_num_rows($result1);
           if ($number_of_rows == "1")
		     {
			   while($row = mysql_fetch_array( $result))
			     {
				 $distance = $row['distance'];
				 }
			 }
		   if ($number_of_rows1 == "1")
		     {
			   while($row = mysql_fetch_array( $result1))
			     {
				 $distance = $row['distance'];
				 }
			 }
		   
		   
		   if ( $number_of_rows == "0" && $number_of_rows1 == "0" )
			 {
			 $distance = 300; 
			 $this->msg ="Please Note, Round Trip Charges will be Applicable on this Route";  
             }
		 
		 }
	
	
	  if ($triptype == "round trip")
	    {
	      $distance = $duration * 300;
	    }
	   return $distance;
	 
    }	  

public function getCity()
{
	$result = mysql_query("SELECT DISTINCT city FROM location") 
	or die(mysql_error());

	  while($row = mysql_fetch_array( $result )) 
  
		{
		   echo '<option value="'.$row['city'].'">'.$row['city'].'</option>';
		}

}


public function tripvalidate()
	{
		if ($this->triptype == "multicitytrip")
			{
			printf("<script>location.href='index.php?page=special package&source=$this->source&destination=$this->destination&duration=$this->duration&date=$this->date'</script>");
			}	
		if ($this->duration == "8")
			{
			printf("<script>location.href='index.php?page=duration&source=$this->source&destination=$this->destination&duration=$this->duration&date=$this->date'</script>");
			}		
	}
	
public function getmulticitydata()
{
	   $this->source = $_GET['source'];
       $this->destination = $_GET['destination'];
       $this->duration = $_GET['duration'];	
	   $this->date = $_GET['date'];

}


public function getrate()
	{
		$result = mysql_query("SELECT * FROM car where carname='$this->carname'") 
	or die(mysql_error());

	  while($row = mysql_fetch_array( $result )) 
  
		{
		   $this->rateperkm = $row['rate-per-km'];
		}

	
	}



public function getbookingdata()
{
			 $this->destination = $_POST['destination'];
			 $this->triptype = $_POST['triptype'];
			 $this->duration = $_POST['duration'];
			 $this->date = $_POST['date'];
			 $this->carname = $_POST['carname'];
			 $this->vendor = $_POST['vendor'];
			 $this->amount = $_POST['amount'];
			 $this->km = $_POST['km'];
			 $this->rateperkm = $_POST['rateperkm'];
			 $this->drivercharge = $_POST['drivercharge'];
			 $this->msg = $_POST['msg'];
			 $this->source = $_POST['source'];

}




}

?>