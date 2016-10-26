<?php 
	/**
	* 
	*/
	class FaxNotifier implements Notifier
	{
		public function notify()
		{
			echo "Fax has been sent to the customer!";
		}
	}
 ?>