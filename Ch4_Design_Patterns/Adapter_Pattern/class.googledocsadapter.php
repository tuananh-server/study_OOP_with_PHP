<?php 
	class GoogleDocsAdapter implements DocManager
	{
		private $GD;
		
		public function __construct()
		{
			$this->GD = new GoogleDocs();
		}

		public function authenticate($user, $pwd)
		{
			$this->GD->setUser($user);
			$this->GD->setPwd($pwd);
			$this->GD->authenticateByClientLogin();
		}

		public function getDocuments($folderid)
		{
			return $this->GD->getAllDocuments();
		}

		public function getDocumentsByType($folderid, $type)
		{
			# code...
			// get documents using GoogleDocs object and return only
			// which match the type
		}

		public function getFolders($folderid=null)
		{
			# code...
		}

		public function saveDocument($document)
		{
			// save the document using GoogleDocs object
		}

	}
 ?>