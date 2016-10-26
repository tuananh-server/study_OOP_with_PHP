<?php 
	include_once 'class.manager.php';
	include_once 'class.statictester.php';

	$dbdriver = DBManager::getMySQLDriver();
	// now process db operation with this $dbdriver object

	$s1 = new StaticTester();
	StaticTester::checkIdFromStaticMethod();
	$s1->checkIdFromNonStaticMethod();

	$s2 = new StaticTester();
	$s1->checkIdFromNonStaticMethod();
	$s1->checkIdFromStaticMethod();
	$s2->checkIdFromNonStaticMethod();

	$s3 = new StaticTester();
	StaticTester::checkIdFromStaticMethod();
 ?>