<?php 
	/**
	* 
	*/
	class User
	{
		const options = array(0 => 'sms', 1 => 'email', 2 => 'fax');

		public function getNotifier()
		{
			$rand_val = rand(0,2);

			return User::options[$rand_val];
		}
	}
 ?>