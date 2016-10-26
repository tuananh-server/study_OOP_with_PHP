<?php 
	/**
	 *	While working with big projects, another very good practice
	 is loading classes only when u neeed it. That means you shouldn't
	 over consume the memory by loading unnecessary classes all the time 
	 */
	function __autoload($class)
	{
		include_once ("class.".$class.".php");
	}

	$s = new Emailer("anh@trafore.fi");
 ?>