<?php 
	include_once 'class.mysqldriver.php';

	$mySQLDriver = new MySQLDriver();
	$mySQLDriver->connect();
	$mySQLDriver->execute("holla");
 ?>