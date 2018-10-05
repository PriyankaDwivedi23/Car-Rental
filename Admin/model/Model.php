<?php

class Model {
	
	
	
	public function __construct()  
    	{  
        
			
   		 } 
		

	public function dbconnect()
		{
			mysql_connect("localhost", "root", "") or die(mysql_error());
			mysql_select_db("mydb") or die(mysql_error());
			//echo "DB COnnected";
		}
	

	
	
}

?>