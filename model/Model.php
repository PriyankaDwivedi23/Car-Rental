<?php

include_once("model/wheels.php");
include_once("model/Local.php");
class Model {
	
	public $wheels;
	
	public function __construct()  
    	{  
        
			$this->wheels = new wheels();
			$this->local = new Local();
   		 } 
		

	public function dbconnect()
		{
			mysql_connect("localhost", "root", "") or die(mysql_error());
			mysql_select_db("mydb") or die(mysql_error());
			//echo "DB COnnected";
		}
	

	public function header()
		{
			include("view/header.php");
		}
	
	
	public function footer()
		{
			include("view/footer.php");
		}
	
	
	public function homepage($msg)
		{
			include("view/home.php");
		}
	
	public function toc()
		{
			include("view/terms.html");
		}
	
	public function home_validate($msg)
		{
			include("view/home_validate.php");
		}
	
	
	public function showlocal($msg)
		{
			include("view/local.php");
		}
	
	
	public function showtransfer()
		{
			include("view/transfer.php");
		}
	
	
	
	
	
	
	public function showquote($km,$day,$msg)
		{
			$this->wheels->km = $km;
			include("view/ajax.php");
	
		}
	
	
	public function showspecialpackage()
		{
			$this->wheels->getmulticitydata();
			include("view/specialpackage.php");
		}
	public function showdurationpackage()
		{
			$this->wheels->getmulticitydata();
			include("view/durationpackage.php");
		}
	
	public function ackspecialpackage()
		{
			 $this->wheels->source = $_POST['source'];
			 if ($this->wheels->source == "")
			    {
				printf("<script>location.href='index.php'</script>");
				}
			 $this->wheels->destination = $_POST['destination'];
			 
			 $this->wheels->duration = $_POST['duration'];
			 $this->wheels->date = $_POST['date'];
			 
			 $this->wheels->carname = $_POST['car'];
			 $this->wheels->name = $_POST['name'];
			 $this->wheels->email = $_POST['email'];
			 $this->wheels->contact = $_POST['contact'];
			 $details = $_POST['details'];
			 
			$this->wheels->getrate();
			$this->wheels->amount = ((($this->wheels->duration * 300) * $this->wheels->rateperkm) + (250 * $this->wheels->duration));
	 		//echo $this->wheels->amount;
	
			include("view/specialack.php");
		}
	
	
	public function showlocalquote()
		{
			$this->local->getlocaldata();
			if($this->local->duration == "40")
				{
				  $duration_text="HALF DAY/40KM";
				}
			else
				{
	 			  $duration_text="FULL DAY/80KM";
	 			}
			include("view/showlocalquote.php");
	
		}
	
	

	public function booking()
		{
			 $this->wheels->getbookingdata();
			 
			include("view/booking.php");
	
		}
	public function booking_local()
		{
			 $this->local->getlocalbookingdata();
			 
			include("view/booking_local.php");
	
		}
	public function fetchdata($op)
		{
			if ($op == "login")
			{
			$email = $_POST['email'];
			$password = $_POST['password'];
			echo $email;
			echo $password;
			$this->wheels->getbookingdata();
			include("view/booking.php");
			}
			
			
		}
	
	public function getPage($page)
		{
	
		if($page == "submit")
			{
				include("view/showquote.php");
			}	
		
		}
	
	
	public function submit()
		{
			include("view/submit.php");
		}
	
	
	public function getBook()
		{
			// we use the previous function to get all the books and then we return the requested one.
			// in a real life scenario this will be done through a db select command
			$allBooks = $this->getBookList();
			return $allBooks[$title];
		}
	
	
}

?>