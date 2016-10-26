<?php 
	include_once 'class.magicobject.php';

	// Note: PHP cannot serialize static variable

	$so = new MagicObject();
	$serializedso = serialize($so);
	file_put_contents("text_magic.txt", $serializedso);

	echo $serializedso;

 ?>