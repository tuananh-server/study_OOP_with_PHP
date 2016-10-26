<?php 
	/**
	* 
	*/
	class SQLConnectionException extends Exception
	{
		
		function __construct()
		{
			$message = "Sorry, couldn't connect to SQL server\r\n";
			parent::__construct($message, 0);
		}
	}
 ?>