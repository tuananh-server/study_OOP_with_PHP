<?php 
	/**
	* 
	*/
	class SMSNotifier implements Notifier
	{
		public function notify()
		{
			echo "SMS has been sent to the customer!";
		}
	}

 ?>