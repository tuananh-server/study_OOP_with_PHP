<?php 
	include_once 'class.SQLConnectionException.php';
	include_once 'class.SQLQueryException.php';
	
	error_reporting(0);

	class DAL
	{
		public $connection;
		public $result;

		public function connect($ConnectionString)
		{
			$this->connection = mysql_connect($ConnectionString);

			if ($this->connection==false) {
				throw new SQLConnectionException($this->connection);
			}
		}

		public function execute($query)
		{
			$this->result = mysql_query($this->connection,$query);

			if (!is_resource($this->result)) {
				throw new SQLQueryException($this->connection);
			}
		}
		
	}

	// Declaration
	$db = new DAL();
	try {
		$db->connect("dbname=localhost user=tatuananh");

		try {
			$db->execute("select * from abc");

		} catch (Exception $queryException) {
			echo $queryException->getMessage();
		}

	} catch (Exception $connectionException) {
			echo $connectionException->getMessage();
	}
?>