<?php 
	include_once 'class.sampleobject.php';

	// Note: PHP cannot serialize static variable

	// $so = new SampleObject();
	// $serializedso = serialize($so);
	// file_put_contents("text.txt", $serializedso);

	// echo $serializedso;

	$serializedcontent = file_get_contents("text.txt");
	$unserializedcontent = unserialize($serializedcontent);
	print_r($unserializedcontent);

 ?>