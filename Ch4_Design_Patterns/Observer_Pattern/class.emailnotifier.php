<?php 
	class EmailNotifier implements observer
	{
		public function notify()
		{
			// send alerts using Email
			echo "Notifying via Email\n";
		}
	}
 ?>