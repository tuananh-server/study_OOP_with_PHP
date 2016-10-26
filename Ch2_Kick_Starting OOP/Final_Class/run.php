<?php 
	/**
	* 
	*/
	final class AClass
	{
		
	}

	class BClass extends AClass
	{

	}

	// When this object is declared, PHP will display a Fatal error:
	// Class BClass may not inherit from final class (AClass)
	
	$bClass = new bClass();
 ?>