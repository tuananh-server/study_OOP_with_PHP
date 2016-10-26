<?php 
	/**
	* 
	*/
	class EmailNotifier implements Notifier
	{
		public function notify()
		{
			echo "Email has been sent to the customer!";
		}
	}
 ?>