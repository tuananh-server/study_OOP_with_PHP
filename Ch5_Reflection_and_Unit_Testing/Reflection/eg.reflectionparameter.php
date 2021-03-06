<?php 
	function foo($a, $b, $c) {};
	function bar(Exception $a, $b, $c) {};
	function baz(ReflectionFunction $a, $b = 1, $c = null) {};
	function abc() {};

	// Create an instance of ReflectionFunction with the
	// paremeter given from the command line.
	$reflect = new ReflectionFunction("baz");
	echo "\n\n\n";
	echo $reflect;

	foreach ($reflect->getParameters() as $i => $param) {
		printf(
			"-- Parameter #%d: %s {\n".
			"   Class: %s\n".
			"   Allows NULL: %s\n".
			"   Passed to by reference: %s\n".
			"   Is optional?: %s\n".
			"}\n",
			$i,
			$param->getName(),
			var_export($param->getClass(),1),
			var_export($param->allowsNull(),1),
			var_export($param->isPassedByReference(),1),
			$param->isOptional() ? 'yes' : 'no'
			);
	}

 ?>