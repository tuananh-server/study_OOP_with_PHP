<?php 
	/**
	* __constructor() & Factorial3(). PHP will execute __constructor() if it is existed
	*/
	class Factorial3
	{
		private $result = 1;
		private $number;

		function __construct($number)
		{
			echo "__construct() is called. \r\n";

			$this->number = $number;
			for ($i=2; $i <= $number; $i++) { 
				$this->result *= $i;
			}
		}

		function Factorial3($number)
		{
			echo "__construct() is called. \r\n";
			 
			$this->number = $number;
			for ($i=2; $i <= $number; $i++) { 
				$this->result *= $i;
			}
		}

		function __destruct(){
			echo "Factorial (3) destructed\r\n";
		}

		public function showResult()
		{
			echo "Factorial (3) of ".$this->number." is ".$this->result." .\r\n";
		}
	}
 ?>