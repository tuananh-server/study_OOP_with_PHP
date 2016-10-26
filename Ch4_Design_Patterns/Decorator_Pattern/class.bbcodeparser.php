<?php 
	/**
	* 
	*/
	class BBCodeParser
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
			$content = $this->parseBBCode($post->getContent());

			return $content;
		}

		private function parseBBCode($content)
		{
			// process BB code in the content and return it
		}
	}
 ?>