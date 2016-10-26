<?php 
	/**
	* 
	*/
	class SampleObject
	{
		public $var1;
		private $var2;
		protected $var3;
		static $var4;

		function __construct()
		{
			$this->var1 = "Value One";
			$this->var2 = "Value Two";
			$this->var3 = "Value Three";
			self::$var4 = "Value Four";
		}
	}

 ?>