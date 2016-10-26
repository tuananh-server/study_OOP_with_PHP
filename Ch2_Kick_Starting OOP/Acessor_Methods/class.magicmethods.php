<?php 
	/**
	* Drawback: Cannot investigate class properties.
	*/
	class MagicMethods
	{
		private $properties = array();

		function __get($property){
			return $this->properties[$property];
		}

		function __set($property,$value){
			$this->properties[$property]=$value;
		}
	}

	$m = new MagicMethods();
	$m->name = "Anh";
	$m->roll = 16;
	$m->age = 23;

	echo $m->name;
	echo $m->roll;
	echo $m->age;
 ?>