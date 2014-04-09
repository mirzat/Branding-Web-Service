<?php

/********************************************************************************
*										*
* 	This is the Model Class. It gets the url from the controller, connetcs	*
*	to the database and obtains the metadata. It then sends back the array 	*
*	to the controller. 							*
*										*
********************************************************************************/


class Model{
		
		// Declare Variables
		public $metaData;
		private $dbh;   

	    public function __construct($url) {
	    	include_once 'config.php';			// Get Database Connection Parameters
	    			    	
	    	$this->dbh = $this->createConnection();		// Connect to Database
	    	$this->metaData = $this->getDataFromDB($url);	// Obtain the array containing the url, description and logo from db
	    	$this->dbh = $this->closeConnection();		// Close connection to Database
	    }

	   
	    // Creating database connection 
	    private static function createConnection()
	    {
	    	// Create an instance of the PDO class
	    	try {
	    			$dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD, 
	    					array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	    		} 
	    	
	    	// Throw any exceptions
	    	catch (PDOException $e) {
	    		print "Error!: " . $e->getMessage() . "<br/>";
	    		die();
	    	}
	    	
	    	return $dbh;	
		}
		

		// Function to get data from table
		private function getDataFromDB($url){
				
			// To search by part of the URL
			$urlSearch = '%'.$url.'%';
		
			// Create the prepare statement to search the table against the URL
			$query = $this->dbh->prepare('SELECT * FROM metadata where url like :urlSearch');
		
			// Bind the variable to the above prepared statement
			$query->bindParam(':urlSearch', $urlSearch, PDO::PARAM_STR);
		
			// Execute query and get results
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			
			return $result;
		}
	     

		
	    // Closing database connection  
	    private static function closeConnection()
	    {
	    	return null;
	    }
}

?>
