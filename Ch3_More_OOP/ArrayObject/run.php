<?php 
	$users = new ArrayObject(array('hasin' => "hasin@gmail.com", "anh" => "anh@trafore.fi"));
	$iterator = $users->getIterator();

	while ($iterator->valid()) {
		echo $iterator->key()."'s Email address is ".$iterator->current()."\r\n";
		$iterator->next();
	}
 ?>