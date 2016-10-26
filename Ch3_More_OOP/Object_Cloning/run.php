<?php 
	$sample1 = new StdClass();
	$sample1->name = "New name 1";

	$sample2 = $sample1;
	echo $sample2->name."\r\n";

	$sample2->name = "New name 2";
	echo $sample1->name."\r\n";

	echo "\r\n\nClone key word: \r\n\n";

	$sample3 = clone $sample1;
	echo $sample3->name."\r\n";

	$sample3->name = "New name 3";
	echo $sample3->name."\r\n";

 ?>