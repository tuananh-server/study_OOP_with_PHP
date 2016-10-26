<?php 
	include_once 'class.sampleobject.php';

	$so = new SampleObject();
	$serializedso = serialize($so);
	file_put_contents("text.txt", $serializedso);

	echo $serializedso;

 ?>