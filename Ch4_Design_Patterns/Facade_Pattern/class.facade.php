<?php 
	include_once 'class.apartmentfinder.php';
	include_once 'class.geolocator.php';
	include_once 'class.googlemap.php';

	class Facade
	{
		public function findApartments($place, $divid)
		{
			$AF = new ApartmentFinder();
			$GL = new GeoLocator();
			$GM = new GoogleMap();

			$apartments = $AF->locateApartment($place);

			foreach ($apartments as $apartment) {
				$locations[] = $GL->getLocations($apartment);
			}

			$GM->initialize();
			$GM->drawLocations($locations);
			$GM->dispatch($divid);
		}
	}
 ?>