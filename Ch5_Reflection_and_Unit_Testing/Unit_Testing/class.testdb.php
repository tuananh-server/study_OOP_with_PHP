<?php 
	class DBTester extends PHPUnit_Framework_TestCase
	{
		private $connection;
		private $Db;
		
		protected function setup()
		{
			$this->Db = new DB();
			$this->connection = mysqli_connect("127.0.0.1","root","Kokkola2012","test");
		}

		protected function tearDown()
		{
			mysqli_close($this->connection);
		}

		public function testValidInsert()
		{
			$data = array(
				'name' => "anh",
				"password" => md5("Kokola2012"));

			mysqli_query($this->connection,"delete from users");
			$result = $this->Db->insertData($data);

			$this->assertNotNull($result);

			// $affected_rows = mysqli_affected_rows($this->connection);
			$affected_rows = $this->Db->getAffectedRows();

			$this->assertEquals(1,$affected_rows);
		}

		public function testInvalidInsert()
		{
			$data = array(
				'names' => "anh",	// wrong field
				"pass" => md5("Kokola2012")); // wrong field

			mysqli_query($this->connection,"delete from users");
			$result = $this->Db->insertData($data);

			$this->assertNotNull($result);

			// $affected_rows = mysqli_affected_rows($this->connection);
			$affected_rows = $this->Db->getAffectedRows();

			$this->assertEquals(-1,$affected_rows);
		}

		public function testUpdate()
		{
			$data = array(
				'name' => "anh",
				"password" => md5("Kokola2012"));

			mysqli_query($this->connection,"truncate table users");

			$this->Db->insertData($data);

			$data = array(
				'name' => "anh2",
				"password" => md5("Kokola2012"));

			$result = $this->Db->updateData(1, $data);

			$this->assertNotNull($result);
			
			$affected_rows = $this->Db->getAffectedRows();
			// $affected_rows = mysqli_affected_rows($this->connection);
			
			$this->assertEquals(1,$affected_rows);
		}

		public function testDelete()
		{
			$data = array(
				'name' => "anh",
				"password" => md5("Kokola2012"));

			mysqli_query($this->connection,"truncate table users");

			$this->Db->insertData($data);
			$result = $this->Db->deleteData(1);

			$this->assertNotNull($result);
		
			// $affected_rows = mysqli_affected_rows($this->connection);
			$affected_rows = $this->Db->getAffectedRows();

			$this->assertEquals(1,$affected_rows);
		}

		/**
		 * Make more versatile tests and find out how our objects may fail.
		 Let's add two more tests as shown below:
		 */
		 public function testInvalidUpdate()
		 {
		 	$data = array(
		 		'name' => 'anh',
		 		'password' => md5("Kokkola2012") );
		 	mysqli_query($this->connection,"truncate table users");

		 	$this->Db->insertData($data);

		 	$data = array(
		 		'name' => 'anh2',
		 		'password' => md5("Kokkola2012") );
		 	$result = $this->Db->updateData(-2, $data);

		 	$affected_rows = $this->Db->getAffectedRows();

		 	$this->assertEquals(0,$affected_rows);
		 }

		 public function testInvalidDelete()
		 {
		 	$data = array(
		 		'name' => 'anh',
		 		'password' => md5("Kokkola2012") );
		 	mysqli_query($this->connection,"truncate table users");

		 	$this->Db->insertData($data);

		 	$result = $this->Db->deleteData("*");

		 	$affected_rows = $this->Db->getAffectedRows();

		 	$this->assertEquals(-1,$affected_rows);	
		 }
	}
 ?>