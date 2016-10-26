<?php 
	/**
	* 
	*/
	class DB
	{
		private $connection;

		function __construct()
		{
			$this->connection = mysqli_connect("127.0.0.1","root","Kokkola2012","test");

			// if (!$this->connection) {
			// 	die('Could not connect: ' . mysqli_error());
			// }
			// echo 'Connected successfully';
		}

		public function insertData($data)
		{
			$fields = join(",",array_keys($data));
			$values = "'".join("','",array_values($data))."'";

			$query = "INSERT INTO users({$fields}) values({$values})";

			$result = mysqli_query($this->connection,$query);
			$affected_rows = mysqli_affected_rows($this->connection);

			// var_dump($result);
			// var_dump($affected_rows);

			return $result;
		}

		public function deleteData($id)
		{		
			$query = "DELETE FROM users WHERE id={$id}";

			return mysqli_query($this->connection,$query);
		}

		public function updateData($id, $data)
		{		
			$queryparts = array();
			foreach ($data as $key => $value) {
				$queryparts[]="{$key} = '{$value}'";
			}

			$query = "UPDATE users SET ".join($queryparts,",")." WHERE id='{$id}'";

			$result = mysqli_query($this->connection,$query);

			return $result;
		}

		public function getAffectedRows($value='')
		{
			return mysqli_affected_rows($this->connection);
		}
	}
	?>