<?php

/****************************************************************************
*																			*
* 	This is the Controller Class. This passes the request to the model	and	*
*	obtains the metadata associated with the URL. Finally it passses the 	*
*	metadata array to the view class which sends back the JSON object.		*													
*																			*
****************************************************************************/

class GetMetaData{
	
	// Declare variables
	private $dbConnect;
	private $result;
	
	
	public function __construct($url){		
		
		// Create a new instance of the Model Class with the url parameter
		$this->dbConnect = new Model($url);					
		
		// Create a new instance of the View Class with the metadata array
		$this->result = new View($this->dbConnect->metaData);		

	}
}