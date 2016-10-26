<?php 
include_once 'class.emailer.php';
include_once 'class.extendedemailer.php';
include_once 'class.factorial.php';
include_once 'class.factorial2.php';
include_once 'class.factorial3.php';
include_once 'class.wordcounter.php';
include_once 'class.htmlemailer.php';

// $xemailer = new ExtendedEmailer();
// $xemailer->setSender("admin@tatuananh.com");
// $xemailer->addRecipients("anh@trafore.fi");
// $xemailer->setSubject("Just a test!");
// $xemailer->setBody("Hi Anh, this is a test!");
// $xemailer->sendEmail();

$htmlemailer = new HtmlEmailer();
$htmlemailer->setSender("admin@tatuananh.com");
$htmlemailer->addRecipients("anh@trafore.fi");
$htmlemailer->setSubject("Just a test!");
$htmlemailer->setBody("Hi Anh, this is a test!");
$htmlemailer->sendEmail();
$htmlemailer->sendHtmlEmail();
$htmlemailer->sayHi();

?>