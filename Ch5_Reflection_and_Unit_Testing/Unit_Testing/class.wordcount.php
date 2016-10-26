<?php 
	class WordCount
	{
		public function countWords($sentence)
		{
			$newsentence = preg_replace("~\s+~"," ",$sentence);

			// echo "\n\r    sentence: ".$sentence."|";
			// echo "\n\rnew sentence: ".$newsentence."|";
			// echo "\n\r";

			return count(split(" ",$newsentence));
		}
	}

 ?>