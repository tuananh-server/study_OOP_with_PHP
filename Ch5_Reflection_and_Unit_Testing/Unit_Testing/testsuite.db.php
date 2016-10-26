<?php 
	require_once 'class.db.php';
	require_once 'class.testdb.php';

	$suite = new PHPUnit_Framework_TestSuite();
	$suite->addTestSuite("DBTester");
	PHPUnit_TextUI_TestRunner::run($suite);
 ?>