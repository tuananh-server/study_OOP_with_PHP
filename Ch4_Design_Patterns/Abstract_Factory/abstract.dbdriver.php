<?php 
	abstract class DBDriver
	{
		public function connect();
		public function executeQuery();
		public function insert_id();

		public function setHost($host)
		{
			# code...
		}

		public function setDB($db)
		{
			# code...
		}

		public function setUserName($db)
		{
			# code...
		}

		public function setPassword($pwd)
		{
			# code...
		}
	}
 ?>