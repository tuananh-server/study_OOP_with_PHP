<?php 
	/**
	* 
	*/
	class ArrayToObject extends ArrayObject
	{
		public function __get($key)
		{
			return $this[$key];
		}

		public function __set($key,$val){
			$this[$key] = $val;
		}
	}

	$users = new ArrayToObject(array("anh"=>"anh@trafore.fi","student"=>"student@helsinki.fi"));

	echo $users->anh."\r\n";
	$users->anh="anh.ta@helsinki.fi";
	echo $users->anh."\r\n";
 ?>