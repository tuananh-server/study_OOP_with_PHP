<?php 
	class ExtendedEmailer extends Emailer
	{
		// does not automatically call __construct() function from the super class (Emailer)
		function __construct(){
			$this->recipient = array();
		}

		public function setSender($sender)
		{
			$this->sender = $sender;
		}

		public function sayHi()
	 	{
	 		echo "ExtendedEmailer: Hi, how are you?\r\n";
	 	}
	}
 ?>