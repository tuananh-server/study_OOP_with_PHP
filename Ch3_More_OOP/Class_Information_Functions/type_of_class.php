<?php 
	class SuperClass {

	}

	/**
	* 
	*/
	class SubClass extends SuperClass
	{
		
	}


	$subclass = new SubClass();

	if (is_a($subclass,"SubClass")) {
		echo "It is an instance of the SubClass\r\n";
	}

	if (is_a($subclass,"SuperClass")) {
		echo "It is also an instance of the SuperClass\r\n";
	}

 ?>