<?php 
	require_once 'class.wordcount.php';

	/**
	* 
	*/
	class TestWordCount extends PHPUnit_Framework_TestCase
	{
		public function testCountWords()
		{
			$wc = new WordCount();
			$testSentence = "my name is Anh";
			$wordCount = $wc->countWords($testSentence);
			$this->assertEquals(4,$wordCount);
		}

		public function testCountWordsWithSpaces()
		{
			$wc = new WordCount();
			$testSentence = "my name is Anh ";
			$wordCount = $wc->countWords($testSentence);
			$this->assertEquals(4,$wordCount); 
		}
	}
 ?>