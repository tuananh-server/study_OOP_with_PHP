<?php 
	/**
	 * As with every other programming language, there is one package for Java
	 that is considred as a standard model for every other unit testing package for other languages.

	 This package is called as JUnit which is for Java developers. The standard and testing style maintained in JUnit is usually followed in
	 many other unit testing packages.

	 So JUnit has become a defacto in the unit testing area. The port of JUnit
	 for PHP developers is know as PHPUnit, which was developed by Sebastian Bergmann. PHPUnit is a very popular unit testing package.

	 One of the mail reasons for writing unit tests is that you cannot figure out all the bugs if you just write your code and deploy your application. There might be small bugs that might crash your application violently by returning a non relevant value. 

	 Don't overlook these small scenarios. There might be cases when you wouldn't imagine one of your codes returning an extremely odd result. Unit testing helps you by writing different test cases. Unit testing helps you by writing different test cases. Unit testing is not a thing which needs a lot of time to write, however the outcome is amazing.

	 In the following section we will learn teh basics of unit testing, and get our hands dirty writing successful unit tests.
	 */

	 /**
	  * BENEFITS OF UNIT TESTING
	  --------------------------
	  Unit testing has a lot of benefits, some of them are that it:
	   - Ensure the consistency of your application.
	   - Ensure the workability of your complete application after any kind of refactoring.
	   - Checks the redundancy and removes them from your code.
	   - Design good API.
	   - Easily figures out where the problem is.
	   - Speeds up the debugging process if anything goes wrong; as you know
	   particularly where the bug resides.
	   - Minimizes the effort of documentation by providing working examples of your API.
	   - Helps to do a regression test so that no regression occurs again.
	  */

	  /**
	   * A SMALL INTRODUCTION TO VULNERABLE BUGS
	   -----------------------------------------
	   Bugs can be of different types. Some bugs could jsut bother your users, some bugs stop the functionality, and some bug vulnerability corrupts your resources. 

	   Let us consider the following example. You have written a function which takes two parameters and updates teh database accordingly. The first parameter is the name of the field and the second parameter is the value of that field by which it should locate the data and then update them. By querying the wrong data, it will corrupt your whole
	   database.
	   */
 ?>