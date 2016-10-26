<?php 
	/**
	* 
	*/
	error_reporting(E_ALL - E_WARNING);

	class DB
	{
		public function connect()
		{
			if (!mysql_connect("host=localhost password=pass user=username dbname=db")) {
				throw new Exception("Cannnot connect to the database");
			}
			
		}
	}

	$db = new DB();

	try {
		$db->connect();	
	} catch (Exception $e) {
		print_r($e);
	}

 ?>