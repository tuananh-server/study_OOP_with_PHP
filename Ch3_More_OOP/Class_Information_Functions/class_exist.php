<?php 
	include_once '../../10102016/Inheritance/class.emailer.php';

	/**
	 * The best way to use the class_exists() functions it to first check if
	 * a class is already available. You can then create an instance of that
	 * class if it is available.
	 */

	if (class_exists("Emailer")) {
		$emailer = new Emailer("tatuananh.fi@gmail.com");
		echo "Class Found\r\n";
	}else
		die("A necessary class is not found!");
		
 ?>