<?php 
	//class.emailvalidator.php
class EmailValidator
{
	public function validateEmail($email)
	{
		// $pattern = "/[A-z0-9]{1,64}@[A-z0-9]+\.[A-z0-9]{2,3}/";
		$pattern = "/[A-z0-9\.]{1,64}@[A-z0-9]+\.[A-z0-9]{2,3}/";
		preg_match($pattern, $email,$matches);
		
		return (strlen($matches[0])==strlen($email)?true:false);
	}
}
?>