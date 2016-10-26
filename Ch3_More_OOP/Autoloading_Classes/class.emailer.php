<?php 
	/**
	 * Emailer class
	 which send email to list of users
	 */
	 
	 class Emailer
	 {
	 	protected	$sender;
	 	protected 	$recipient;
	 	private 	$subject;
	 	private 	$body;
	 	
	 	function __construct($sender)
	 	{
	 		$this->sender = $sender;
	 		$this->recipient = array();
	 	}

	 	public function addRecipients($recipient)
	 	{
	 		array_push($this->recipient, $recipient);
	 	}

	 	public function setSubject($subject)
	 	{
	 		$this->subject = $subject;
	 	}

	 	public function setBody($body)
	 	{
	 		$this->body = $body;
	 	}

	 	public function sendEmail()
	 	{
	 		foreach ($this->recipient as $recipient) {
	 			$result = mail($recipient, $this->subject, $this->body, "From: {".$this->sender."}\r\n");

	 			if ($result) {
	 				echo "Mail successfully sent to ".$recipient."\r\n";
	 			}
	 		}
	 	}

	 	public function sayHi()
	 	{
	 		echo "Emailer: Hi, how are you?\r\n";
	 	}

	 	private function privateFunction(){
	 		echo "This is a private function\r\n";
	 	}
	 }
 ?>