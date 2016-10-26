<?php 
	/**
	 * When you need to write unit tests: during time of development, or after finishing coding?

	 It is found to be more useful to write the test first and then go for a real application. This
	 is called Test Driven Development or TDD in short. TDD helps you to design better API for your
	 application.

	 Blow examples show how unit testing before real code actually fits in project development.

	 PHPUnit provides you a lot of useful API for test-first programming such as markTestSkipped()
	 and markTestIncomplete(). We will use these two methods to mark some of our tests, which are
	 not implemented.

	Let us design a small feedback manager which can accept user's feedback and mail them to you. So
	what could be the useful features of a feedback manager? I would suggest the following:

	- It can render a feedback form
	- It will handle user's input and properly filter it
	- It will have a spam prevention functionality
	- It will prevent any automated feedback submitted by bots or spammers.
	- It will render a confirmation after submisison of feedback, mailing it to owner.
	 */
 ?>