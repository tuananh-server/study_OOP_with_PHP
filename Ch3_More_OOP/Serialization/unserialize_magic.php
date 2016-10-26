<?php 
	include_once 'class.magicobject.php';

	// __wakeup() is called prior to the unserialize() function is called, which is similar to
	// __sleep() & serialize()
	
	$serializedcontent = file_get_contents("text_magic.txt");
	echo "----"."\r\n";
	$unserializedcontent = unserialize($serializedcontent);
	echo "----"."\r\n";
	print_r($unserializedcontent);

	echo get_class($unserializedcontent)."\r\n";

	// if (is_a($unserializedcontent, "MagicObject")) {
	// 	echo "$unserializedcontent is converted as an object\r\n";
	// }

 ?>