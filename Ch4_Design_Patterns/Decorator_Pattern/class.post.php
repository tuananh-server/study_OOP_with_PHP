<?php 
	/**
	* 
	*/
	class Post
	{
		private $title;
		private $content;

		// additional properties
		public function filter()
		{
			# code...
			$this->content = $filered_content;
			$this->title = $filered_title;
		}

		public function getContent()
		{
			# code...
			return $this->content;
		}

		// addditional methods
	}
 ?>