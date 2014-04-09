<?php

/********************************************************************************
*										*
* 	This is the Model Class. This passes the request to the model and	*
*	obtains the metadata associated with the URL. Finally it passes the 	*
*	metadata array to the view class which sends back the JSON object.	*
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
