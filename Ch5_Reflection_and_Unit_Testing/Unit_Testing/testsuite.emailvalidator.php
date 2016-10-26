<?php 
	require_once 'class.emailvalidator.php';
	require_once 'class.testemailvalidator.php';

	$suite = new PHPUnit_Framework_TestSuite();
	$suite->addTestSuite("TestEmailValidator");

	PHPUnit_TextUI_TestRunner::run($suite);
 ?>