<?php 
	/**
	* consructor with the name is the name of the class
	*/
	class Factorial2
	{
		private $result = 1;
		private $number;

		function Factorial2($number)
		{
			$this->number = $number;
			for ($i=2; $i <= $number; $i++) { 
				$this->result *= $i;
			}
		}

		function __destruct(){
			echo "Factorial (2) destructed\r\n";
		}

		public function showResult()
		{
			echo "Factorial (2) of ".$this->number." is ".$this->result." .\r\n";
		}
	}
 ?>