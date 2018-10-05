<?php
include_once("model/Model.php");
include_once("model/wheels.php");
class Controller {
	public $model;
	public $wheels;
	public $local;
	
	public function __construct()  
    {  
        $this->model = new Model();
		$this->wheels = new wheels();
		$this->local = new Local();
    } 
	public function dbconnect()
	{
	$this->model->dbconnect();
	}
	
	
	public function header()
	{
	
	$this->model->header();
	}
	
	public function footer()
	{
	
	$this->model->footer();
	}
	
	public function validate()
	{
	  $this->wheels->source = $_POST['outstation-source'];
	  $this->wheels->destination = $_POST['outstation-destination'];
	  $date = $_POST['dateI'];
	  $current_date = date("m/d/Y");// current date
	  $date = strtotime($date); 
	  $current_date = strtotime($current_date)
//echo "Current Date: ".$current_date."<br>";
//echo "Selected Date" . $date;
;
		if ($this->wheels->source == $this->wheels->destination)
	   {
	    ?> <script language="javascript"> alert("Source City and Destination City cannot be Same. \n Please Access Local City Usage Section to Book a Local Cab"); </script>
		 <?php 
		printf("<script>location.href='index.php'</script>");
		return "false";
	   }
	  if ($date < $current_date)
	   {
	     ?> <script language="javascript"> alert("Please Select a Valid Date"); </script>
		 <?php 
		printf("<script>location.href='index.php'</script>");
		return "false";
	   }
	  if (  $this->wheels->source == "Select Source" ||  $this->wheels->source == "" )
	  {
	     ?> <script language="javascript"> alert("Please Select the Source City"); </script>
		 <?php 
		printf("<script>location.href='index.php'</script>");
		return "false";
	  }
	  if (  $this->wheels->destination == "Select Destination" || $this->wheels->destination == "" )
	  {
	    ?> <script language="javascript"> alert("Please Select the Destination City"); </script>
		 <?php 
		printf("<script>location.href='index.php'</script>");
		return "false";
	  }
	  if ( $date == " " || $date == "null" )
	  {
	    ?> <script language="javascript"> alert("Please Select the Journey Date.Date cannot be Blank"); </script>
		 <?php 
		printf("<script>location.href='index.php'</script>");
		return "false";
	  }
	  //echo $max_date;
	return "true";  
	}
	
	public function local_validate()
	{
	$this->local->getlocaldata();

	 $current_date = date("m/d/Y");// current date
	  $this->local->date = strtotime($this->local->date); 
	  $current_date = strtotime($current_date);
	  $date = $this->local->date;
	  if ($date < $current_date)
	   {
	     $msg = "Invalid Date, Please Select a Valid Date";
		 $this->model->showlocal($msg);
	     return "false";
	   }
	if ($this->local->city == "" || $this->local->city == "Select City")
		{
		 $msg="Please Select the City";
		  $this->model->showlocal($msg);
		return "false";
		}
	if ($this->local->location == "" || $this->local->location == "Select Location")
		{
		  $msg="Please Select the Location";
		  $this->model->showlocal($msg);
		return "false";
		}
	if ($this->local->date == "" || $this->local->date == "null")
		{
		   $msg="Please Select a Valid Date";
		  $this->model->showlocal($msg);
		return "false";
		}
	
	
	}
	public function invoke()
	{
	
      if (!isset($_GET['tab']))
		{
		 if (!isset($_GET['page']))
		  {
		    
			if (isset($_GET['op']))
			{
			$this->model->fetchdata($_GET['op']);
			return false;
			}
			$this->model->homepage("");
		  }
		 
		
		if (isset($_GET['page']))
		  {
		    
			$action = $_GET['page'];
			
		    if ($action == "submit")
			  {
			    
				 $this->wheels->outstation_getdata();
				
				
				$return = $this->validate();
				
				
				$km = $this->wheels->distance();
				$this->wheels->tripvalidate();
				$day = $this->wheels->convert_date_day();
				$this->model->showquote($km,$day,$this->wheels->msg);
			   		
			  		  
			  }
		   
		    
			if ($action == "book")
		     {
			
			 
			 
			 
			 $this->model->booking();
			 
			 }
			
			 if ($action == "booklocal")
		     {
			
			 
			 
			 
			 $this->model->booking_local();
			 
			 }
			 
		    if ($action == "terms-and-conditions")
		     {
			
			 
			 
			 
			 $this->model->toc();
			 
			 } 
		  
		  if ($action == "local")
			  {
			   
			   $this->local_validate();
			   
			   $this->model->showlocalquote(); 
			  
			  }
		  if ($action == "special package")
			  {
			   
			  // $this->local_validate();
			   
			   $this->model->showspecialpackage(); 
			  
			  }
			  if ($action == "duration")
			  {
			   
			  // $this->local_validate();
			   
			   $this->model->showdurationpackage(); 
			  
			  }
		  if ($action == "specialsubmit")
			  {
			       $this->model->ackspecialpackage(); 
			  }
		 
		  
		  
		  }
		}       
			
		
		if (isset($_GET['tab']))
		  {
		    $tab = $_GET['tab'];
			if ($tab == "local")
			  {
			    $msg="";
				//$this->local->getlocaldata();
				//
				$this->model->showlocal($msg); 
			  }
			if ($tab == "transfer")
			  {
			    $this->model->showtransfer(); 
			  }
	      }
	}		
}

?>