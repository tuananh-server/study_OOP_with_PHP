<?php 
	/**
	*	without __construct() method defined here
	*	PHP will look up for the contructor of the
	*	super class (ExtextedEmailer) 
	*/
	class HtmlEmailer extends ExtendedEmailer
	{
		public function sendHtmlEmail(){
			foreach ($this->recipient as $recipient) {
				$header = 'MINE-Version: 1.0'."\r\n";
				$header.= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
				$header.= 'From:'.$this->sender."\r\n";

				$result= mail($recipient, $this->subject, $this->body, $header);

				if ($result) {
					echo "HTML Mail successfully sent to ".$recipient."\r\n";
				}
			}
		}

		public function sayHi()
		{
			parent::sayHi();
		}
		
	}
 ?>