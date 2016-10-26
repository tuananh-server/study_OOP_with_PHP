<?php 
	class String
	{
		public $length = 5;
	}

	// Create an instance of the ReflectionProperty class
	$prop = new ReflectionProperty('String','length');

	// Print out basic information
	printf(
		"===> The %s%s%s%s property '%s' (which was %s)\n".
		"     having the modifiers %s\n",
			$prop->isPublic() ? ' public' : '',
			$prop->isPrivate() ? ' private' : '',
			$prop->isProtected() ? ' protected' : '',
			$prop->isStatic() ? ' static' : '',
			$prop->getName(),
			$prop->isDefault() ? 'declared at compile-time' : 'created at run-time',
			var_export(Reflection::getModifierNames($prop->getModifiers()),1)
		);

	// Create an instance of String
	$obj= new String();

	// Get current value
	printf("---> Value is: ");
	var_dump($prop->getValue($obj));

	// Change value
	$prop->setValue($obj,10);
	printf("---> Setting value to 10, new value is: ");
	var_dump($prop->getValue($obj));

	// Dump object
	var_dump($obj);

	// var_export(expression,true)
	echo "var_export(expression,true):\n\n";
	echo var_export($obj,true); // return the variable representation

	// var_export(expression,false)
	echo "var_export(expression,false):\n\n";
	var_export($obj,false);	// output the parsable representation of the variable
 ?>