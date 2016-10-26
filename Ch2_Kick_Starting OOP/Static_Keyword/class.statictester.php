<?php 
	/**
	* 
	*/
	class StaticTester
	{
		private static $id = 0;

		function __construct(){
			self::$id += 1;
		}

		public static function checkIdFromStaticMethod()
		{
			echo "Current Id from Static Method is ".self::$id."\r\n";
		}

		public static function checkIdFromNonStaticMethod()
		{
			echo "Current Id from Non Static Method is ".self::$id."\r\n";
		}
	}
 ?>