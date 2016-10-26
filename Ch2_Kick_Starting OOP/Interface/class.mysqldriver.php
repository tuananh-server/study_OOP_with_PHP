<?php 
	include_once 'interface.dbdriver.php';

	/**
	* 
	*/
	class MySQLDriver implements DBDriver
	{
		public function connect()
		{
			echo "Connecting ...\r\n";
		}

		public function execute($sql)
		{
			echo "Executing ...\r\n";
		}
	}
 ?>