<?php

/********************************************************************************
*										*
* 	This is the View Class. It gets the metadata array from the controller	*
*	and validates the data. If the array is not empty is sends the response	*
*	as a JSON object.							*
*										*
********************************************************************************/



class View{
	
	
	public function __construct($metaData){
			
		if (empty($metaData)){					// In the case of a miss return null
			header('HTTP/1.1 400 Bad Request');
			echo '<h2>Search returned NULL.</h2>';
		}
		else
			$this->returnData($metaData);			// Else print out json key value pairs 
	}


	// Function that prints data to screen
	public function returnData($metaData){

		/* Better approach is to use JSON_UNESCAPED_SLASHES
		$metaData = json_encode($data, JSON_UNESCAPED_SLASHES);
		Unfortunately JSON_UNESCAPED_SLASHES was unavailable on the version of php installed on my web host*/
		
		// Alternatively use str_replace to handle the unescaped slashes
		header('Content-Type: application/json; charset=utf-8');
		$metaData = str_replace('\/','/',json_encode($metaData));
		echo $metaData;

	}
}

?>
