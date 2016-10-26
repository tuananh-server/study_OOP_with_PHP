Wordpress-Posting-with-PHP-Using-XMLRPC
=======================================

Post to your blog form out the Wordpress Admin Panel

Installation 

#1: Include IXR_LIbrary.php.inc
#2: Turn On debug mode if required (Line: 3, File: SendArticle)
#3: Change Settings for your blog (Line: 26 - 28 File: SendArticle)
	$client = new IXR_Client('your blog url/xmlrpc.php');
	$username = "Your Blog Admin Username";  
	$password = "Your Blog Admin Password"; 

Enjoy