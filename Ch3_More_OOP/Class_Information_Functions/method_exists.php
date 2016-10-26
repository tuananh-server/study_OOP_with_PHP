<?php 
	include_once '../../10102016/Inheritance/class.emailer.php';

	/**
	 * Note: method_exists, property_exists return true only if the
	 * properties and methods are defined in PUBLIC SCOPE
	 */

	$emailer = new Emailer("tatuananh.fi@gmail.com");

	if (method_exists($emailer, "addRecipients")) {
		echo "method addRecipients found!\r\n";
	}
	else{
		// will stop the process immediately
		die ("method addRecipients not found!\r\n");
	}

	if (method_exists($emailer, "privateFunction")) {
		echo "method privateFunction found!\r\n";
	}
	else{
		echo "method privateFunction not found!\r\n";
	}

	if (method_exists($emailer, "setRecipient")) {
		echo "method setRecipient found!\r\n";
	}
	else{
		// will stop the process immediately
		die ("method setRecipient NOT found!\r\n");
	}


 ?>