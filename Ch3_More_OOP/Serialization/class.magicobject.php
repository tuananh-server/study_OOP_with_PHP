<?php 
	class MagicObject {
		public $var1;
		private $var2;
		protected $var3;
		public static $var4;
		private $staticvars = array();

		function __construct()
		{
			$this->var1 = "Value One";
			$this->var2 = "Value Two";
			$this->var3 = "Value Three";
			MagicObject::$var4 = "Value Four";
		}

		public function __sleep(){
			echo "__sleep called\r\n";
		
			$vars = get_class_vars(get_class($this));
			foreach ($vars as $key => $value) {
				if (!empty($value)) {
					$this->staticvars[$key]=$val;
				}
			}

			return array_keys(get_object_vars($this));
		}

		public function __wakeup()
		{
			echo "__wakeup called\r\n";

			foreach ($this->staticvars as $key => $value) {
				$prop = new ReflectionProperty(get_class($this), $key);
				$prop->setValue(get_class($this), $val);
			}

			$this->staticvars=array();
		}
	}
 ?>