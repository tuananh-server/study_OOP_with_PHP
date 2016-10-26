<?php 
	include_once 'XMLRPC/IXR_Library.php.inc';

	function gmtTime()
	{
		return gmdate("F, d Y H:i:s");
	}

	$server = new IXR_Server(array(
		'time.getGMTTime'=>'gmtTime',
	));
 ?>