<?php 
	/**
	*  final Call is declared from Super class as a final method
	*/
	class SubClass extends SuperClass
	{
		// final Call is declared from Super class as a final method
		// Therefire, if the finalCall is declared again here, PHP will
		// through the Fatal error msg.

		// public function finalCall()
		// {
		// 	echo "Final from SubClass";
		// }
	}
 ?>