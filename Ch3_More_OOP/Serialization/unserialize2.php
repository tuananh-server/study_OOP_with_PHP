<?php 
	$serializedcontent = file_get_contents("text.txt");
	$unserializedcontent = unserialize($serializedcontent);
	print_r($unserializedcontent);

 ?>