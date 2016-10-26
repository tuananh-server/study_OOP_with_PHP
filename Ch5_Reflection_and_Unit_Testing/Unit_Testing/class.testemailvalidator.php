<?php 
class TestEmailValidator extends PHPUnit_Framework_TestCase
{
	private $Ev;

	/**
	 * Is used for setting up everything for the test; you can use it to
	 connect to DB, to open a file or something similar.
	 */
	protected function setup()
	{
		$this->Ev = new EmailValidator();
	}

	/**
	 * Is used for cleaning. It is called when the script finishes executing.
	 */
	protected function tearDown()
	{
		unset($this->Ev);
	}
	
	public function testSimpleEmail()
	{
		$result = $this->Ev->validateEmail("hasin@somewherein.net");
		$this->assertTrue($result);
	}

	public function testSimpleEmailWithDotInName()
	{
		$result = $this->Ev->validateEmail("has.in@somewherein.net");
		$this->assertTrue($result);
	}

	public function testSimpleEmailWithComma()
	{
		$result = $this->Ev->validateEmail("has,in@somewherein.net");
		$this->assertFalse($result);
	}

	public function testSimpleEmailWithSpace()
	{
		$result = $this->Ev->validateEmail("has in@somewherein.net");
		$this->assertFalse($result);
	}

	public function testEmailLengthMoreThan64Char()
	{
		$result = $this->Ev->validateEmail(str_repeat("h", 64)."has.in@somewherein.net");

		$this->assertFalse($result);
	}

	public function testSimpleEmailWithInValidCharacters()
	{
		$result = $this->Ev->validateEmail("has#in@somewherein.net");
		$this->assertFalse($result);
	}

	public function testSimpleEmailWithNoDomain()
	{
		$result = $this->Ev->validateEmail("has.in@");
		$this->assertFalse($result);
	}

	public function testSimpleEmailWithInvalidDomain()
	{
		$result = $this->Ev->validateEmail("has.in@somewherein.longnet");
		$this->assertFalse($result);
	}
}
?>