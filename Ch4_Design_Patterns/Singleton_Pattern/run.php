<?php 
	include_once 'class.mysqlmanager.php';

	$a = new MySQLManager();
	$a->var1="10";
	$a->var2="11";

	echo "a->var1=".$a->var1."\r\n";
	echo "a->var2=".$a->var2."\r\n";

	$a->get_instance_type();

	$b = new MySQLManager();
	$b->get_instance_type();

	echo "b->var1=".$b->var1."\r\n";
	echo "b->var2=".$b->var2."\r\n";
 ?>