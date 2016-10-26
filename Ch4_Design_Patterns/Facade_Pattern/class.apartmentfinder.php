<?php 
	class ApartmentFinder
	{
		private $apartmentsArray;

		function __construct()
		{
			$this->apartmentsArray = array();
		}

		public function locateApartment($place)
		{
			// Use the web service and locate all apartments
			// suitable search name
			// now return them all in an array
			$apartmentsArray[] = $place;
			
			return $apartmentsArray;
		}
	}
 ?>