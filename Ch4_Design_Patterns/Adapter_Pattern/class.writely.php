<?php 
	/**
	* 
	*/
	class Writely implements DocManager
	{
		public function authenticate($user,$pwd)
		{
			// authenticate using Writely authentication scheme
		}

		public function getDocuments($folderid)
		{
			// get documents available in a folder
		}

		public function getDocumentsByType($folderid, $type)
		{
			// get documents of specific type from a folder
		}

		public function getFolders($folderid=null)
		{
			// get all folders under a specific folder
		}

		public function saveDocuments($document)
		{
			// save the document
		}
	}
 ?>