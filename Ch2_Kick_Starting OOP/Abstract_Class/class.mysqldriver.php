<?php 
	include_once 'interface.dbdriver.php';
	include_once 'abstract.reportgenerator.php';
	/**
	* 
	*/
	class MySQLDriver extends ReportGenerator implements DBDriver
	{
		public function connect()
		{
			echo "Connecting ...\r\n";
		}

		public function execute($sql)
		{
			echo "Executing ...\r\n";
		}

		// Dont need to redeclare the generateReport method here
		// again as it is extended from the abstract class directly.
	}
 ?>