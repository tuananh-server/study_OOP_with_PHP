<?php 
	include_once 'XMLRPC/IXR_Library.php.inc';

	$client = new IXR_Client('http://home.tatuananh.com/study/PHP/OOP%20with%20PHP/Chapter%204_Design%20Patterns/Proxy%20Pattern%20or%20Lazy%20Loading/server.php');
	
	if (!$client->query('time.getGMTTime')) {
		die('Something went wrong -'.$client->getErrorCode().' :'.$client->getErrorMessage());	
	}

	echo ($client->getResponse());
 ?>