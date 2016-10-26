<?php 
	/**
	 * Decorator patter is an important problem solving approach instroduced by GoF in their legendary design pattern book.
	 Using this pattern you can add additional functionalities in an existing object without extending an object.
	 */

	 function __autoload($class)
	 {
	 	include_once ("class.".$class.".php");
	 }

	 $post = new Post();
	 $comment = new Comment();

	 $post->filter();
	 $comment->filter();

	 if ($BBCodeEnabled==false && $EmoticonEnalbed==false) {
	 	# code...
	 	$PostContent = $post->getContent();
	 	$CommentContent = $comment->getContent();
	 }
	 elseif ($BBCodeEnabled==true && $EmoticonEnalbed==false) {
	 	# code...
	 	$bb  = new BBCodeParser($post); // passing a post object ot BBCodeParser

	 	$PostContent = $bb->getContent();
	 	$bb = new BBCodeParser($comment);

	 	$CommentContent = $bb->getContent();
	 }
	 elseif ($BBCodeEnabled==false && $EmoticonEnalbed==true) {
	 	# code...
	 	$em = new EmoticonParser($post);
	 	$PostContent = $em->getContent();

	 	$em = new EmoticonParser($comment);
	 	$CommentContent = $em->getContent();
	 }
 ?>