<?php 
	/**
	* 
	*/
	class SQLQueryException extends Exception
	{
		
		function __construct($connection)
		{
			parent::__construct(mysql_error($connection),0);
		}
	}
 ?>