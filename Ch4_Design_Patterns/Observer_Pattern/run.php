<?php 
	include_once 'interface.observer.php';
	include_once 'class.emailnotifier.php';
	include_once 'class.observable.php';
	include_once 'class.ymnotifier.php';
	

	$postmonitor = new Observable();
	
	$ym = new YMNotifier();
	$em = new EmailNotifier();

	$s = new stdClass();

	$postmonitor->register($ym);
	$postmonitor->register($em);
	$postmonitor->register($s);

	$postmonitor->stateChange();
 ?>