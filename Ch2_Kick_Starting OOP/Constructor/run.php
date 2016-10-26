<?php 
include_once 'class.factorial.php';
include_once 'class.factorial2.php';
include_once 'class.factorial3.php';

$f = new Factorial(10);
$f->showResult();

$f2 = new Factorial2(11);
$f2->showResult();

$f3 = new Factorial3(12);
$f3->showResult();
?>