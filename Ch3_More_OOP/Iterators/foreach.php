<?php 
	// foreach ($variable as $key => $value) {
	// 	# code...
	// }

	/**
	* 
	*/
	class EmailValidator
	{
		public $emails;
		public $validemails;
		private $privateProperty;
	}

	$ev = new EmailValidator();

	echo "Perform foreach operation over the object (only public properties):\r\n\n";

	foreach ($ev as $key => $value) {
		echo $key."\r\n";
	}
?>