<?php

/********************************************************************************
*										*
* 	This is the Model Class. It gets the url from the controller, connetcs	*
*	to the database and obtains the metadata. It then sends back the array 	*
*	to the controller. 							*
*										*
********************************************************************************/


class Model
	{
		// Declare Variables
		public $metaData;  

	    public function __construct($url) {
	    	include_once 'config.php';
	    			    	

	    }

	   
	    // Creating database connection 
	    private static function createConnection(){
	    
		}
		

		// Function to get data from table
		private function getDataFromDB($url){
				

		}
	     

	    // Closing database connection  
	    private static function closeConnection()
	    {
	    	return null;
	    }
}
?>
