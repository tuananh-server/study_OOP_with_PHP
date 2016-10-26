<?php 
	/**
	* 
	*/
	class EmoticonParser
	{
		private $post;
		
		function __construct($object)
		{
			$this->post = $object;
		}

		public function getContent()
		{
			# code...
			$post->filter();
			$content = $this->parseEmoticon($post->getContent());

			return $content;
		}

		private function parseEmoticon($content)
		{
			// process Emoticon code in the content and return it
		}
	}
 ?>