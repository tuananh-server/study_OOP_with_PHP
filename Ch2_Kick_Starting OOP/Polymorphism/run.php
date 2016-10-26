<?php 
	include_once '../Inheritance/class.emailer.php';
	include_once '../Inheritance/class.extendedemailer.php';
	include_once '../Inheritance/class.htmlemailer.php';

	$emailer = new Emailer("anh@trafore.fi");
	$extendedEmailer = new ExtendedEmailer();
	$htmlEmailer = new HtmlEmailer();

	if ($extendedEmailer instanceof Emailer) {
		echo "Extented Emailer derived from Emailer\r\n";
	}

	if ($htmlEmailer instanceof ExtendedEmailer) {
		echo "HTML Emailer derived from Extended Emailer\r\n";
	}

	if ($htmlEmailer instanceof Emailer) {
		echo "HTML Emailer derived from Emailer\r\n";
	}
 ?>