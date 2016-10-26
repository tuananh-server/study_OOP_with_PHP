<?php 
	function __autoload($class)
	{
		include_once ("class.".$class.".php");
	}

	$F = new Facade();
	$F->findApartments("London, Greater London","mapdiv");
 ?>