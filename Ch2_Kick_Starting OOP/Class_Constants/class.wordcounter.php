<?php 
	/**
	* counts the frequency of words in any given file.
	* 2 constant names: ASC, DESC
	* Access via self::
	* No $ sign before the constants
	* They act like static members
	*/
	class WordCounter
	{
		const ASC = 1;
		const DESC = 2;
		private $words;

		function __construct($fileName)
		{
			$fileContent = file_get_contents($fileName);
			$this->words = (array_count_values((str_word_count(strtolower($fileContent),1))));
		}

		public function count($order)
		{
			if ($order==self::ASC) {
				asort($this->words);
			}else if ($order==self::DESC) {
				arsort($this->words);
			}

			foreach ($this->words as $key => $val) {
				echo $key." = ".$val."\r\n";
			}
		}
	}

 ?>