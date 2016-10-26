<?php 
	/**
	 * The DBManager now works as a Factory, which encapsulates all the complexities
	 behind the scene and delivers two products (mysql, pgsql). Factory simplifies programming by
	 encapsulating the difficulties inside it.
	 */

	class DBManager
	{
		private $driver;

		public function setDriver($driver)
		{
			$this->driver = $driver;
			// set the driver
		}

		public function connect()
		{
			switch ($this->driver) {
				case 'mysql':
					$MM = new MySQLManager();
					$MM->setHost("host");
					$MM->setDB("db");
					$MM->setUserName("user");
					$MM->setPassword("pwd");
					$this->connection = $MM->connect();
					break;
				
				case 'pgsql':
					# code...
					break;
			}
		}
	}
 ?>