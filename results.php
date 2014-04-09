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
	

$send = new GetMetaData($_GET['url']);			

?>
