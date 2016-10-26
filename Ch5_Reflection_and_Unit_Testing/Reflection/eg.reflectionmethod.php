<?php 
	class Counter
	{
		private static $c = 0;
		/**
		 * Increment counter
		 * 
		 * @final
		 * @static
		 * @access public
		 * @return int
		 */

		final public function increment()
		{
			return ++self::$c;
		}
	}

	// Create an instance of the ReflectionMethod class
	$method = new ReflectionMethod('Counter','increment');

	// Print out basic information
	printf(
		"===> The %s%s%s%s%s%s%s method '%s' (which is %s)\n".
		"     declared in %s\n".
		"     lines %d to %d\n".
		"     having the modifiers %d[%s]\n",
			$method->isInternal() ? 'internal' : 'user-defined',
			$method->isAbstract() ? ' abstract' : '',
			$method->isFinal() ? ' final' : '',
			$method->isPublic() ? ' public' : '',
			$method->isPrivate() ? ' private' : '',
			$method->isProtected() ? ' protected' : '',
			$method->isStatic() ? ' static' : '',
			$method->getName(),
			$method->isConstructor() ? 'the constructor' : 'a regular method',
			$method->getFileName(),
			$method->getStartLine(),
			$method->getEndLine(),
			$method->getModifiers(),
			implode(' ', Reflection::getModifierNames($method->getModifiers()))
		);

	// Print documentation comment
	printf("---> Documentation:\n %s\n", var_export($method->getDocComment(), 1));

	// Print static variables if existant
	if ($statics = $method->getStaticVariables()) {
		printf("---> Static variables: %s\n", var_export($static, 1));
	}

	// Invoke the method
	printf("---> Invokation results in: ");
	var_dump($method->invoke(new Counter()));
 ?>