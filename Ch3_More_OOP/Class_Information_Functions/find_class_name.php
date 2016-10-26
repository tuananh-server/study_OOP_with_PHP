<?php 
	class SuperClass {
		public function getClass()
		{
			// dont use $this
			echo get_class()."\r\n";
		}

		public function getClassThis(){
			echo get_class($this)."\r\n";
		}
	}

	/**
	* 
	*/
	class SubClass extends SuperClass
	{
		
	}


	$subclass = new SubClass();

	$subclass->getClass();
	$subclass->getClassThis();

 ?>