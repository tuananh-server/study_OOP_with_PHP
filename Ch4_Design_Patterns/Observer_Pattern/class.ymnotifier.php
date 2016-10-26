<?php 
	class YMNotifier implements observer
	{
		public function notify()
		{
			// send alerts using YM
			echo "Notifying via YM\n";
		}
	}
 ?>