<?php 
	class Observable
	{
		private $observers = array();
		
		public function register($object)
		{
			if ($object instanceof observer ) {
				$this->observers[] = $object;
			}
			else
			{
				echo "The object must implement observer interface\n";
			}	
		}

		public function stateChange()
		{
			foreach ($this->observers as $observer) {
				$observer->notify();
			}
		}
	}
 ?>