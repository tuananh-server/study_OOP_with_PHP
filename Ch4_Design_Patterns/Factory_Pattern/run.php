<?php 
	include_once 'class.mysqlmanager.php';
	include_once 'class.dbmanager.php';
	
	$DM = new DBManager();
	$DM->setDriver("mysql");
	$DM->connect("host","user","db","pwd");
 ?>