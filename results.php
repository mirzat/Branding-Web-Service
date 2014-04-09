<?php


/********************************************************************************																			*
* 	A simple "branding" web service endpoint using REST. Obtains URl and    *
*	returns	key value pairs in JSON.					*
*										*
********************************************************************************/

// Report all errors
ERROR_REPORTING(E_ALL);


// Include all the classes
function __autoload($className){
	$filename = 'class.'.$className.'.php';
	if (is_readable($filename)) 
        require $filename;
}
	

// When web service is called or user enters non-empty data
if(isset($_GET['url']) && $_GET['url'] != ''){
	// Create a new instance of GetMetaData (Controller)
	$send = new GetMetaData($_GET['url']);			
}

// Else send error (bad request) 
else{
	header('HTTP/1.1 400 Bad Request');
	echo '<h2>Please enter a valid URL.<h2>';
}

?>
