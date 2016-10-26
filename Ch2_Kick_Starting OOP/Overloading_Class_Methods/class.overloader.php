<?php 
	/**
	* 
	*/
	class Overloader
	{
		// when the function name is not called.
		function __call($method,$arguments)
		{
			echo "You called a method name ".$method." with the flollowing arguments\r\n";

			print_r($arguments);
		}
	}

	$over = new Overloader();
	$over->access(2,3,5);

 ?>