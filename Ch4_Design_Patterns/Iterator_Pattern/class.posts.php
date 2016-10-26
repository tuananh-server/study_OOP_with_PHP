<?php 
	/**
	* 
	*/
	class Posts implements Iterator
	{
		private $posts = array();

		function __construct($posts)
		{
			if (is_array($posts)) {
				$this->posts = $posts;
			}
		}

		public function rewind()
		{
			reset($this->posts);
		}

		// http://php.net/manual/en/function.current.php
		public function current()
		{
			return current($this->posts);
		}

		public function key()
		{
			return key($this->posts);
		}

		public function next()
		{
			return next($this->posts);
		}

		public function valid()
		{
			return ($this->current() !== false);
		}
	}
 ?>