<?php 
	include_once 'interface.Notifier.php';

	function __autoload($class){
		include_once ("class.".$class.".php");
	}

	$user = new User();
	$notifier = $user->getNotifier();

	switch($notifier)
	{
		case "email":
		$objNotifier = new EmailNotifier();
		break;

		case "fax":
		$objNotifier = new FaxNotifier();
		break;

		case "sms":
		$objNotifier = new SMSNotifier();
		break;
	}

	$objNotifier->notify();
	echo "\r\n";
 ?>