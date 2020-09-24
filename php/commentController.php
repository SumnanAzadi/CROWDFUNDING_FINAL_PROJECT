<?php
	require_once('../services/commentService.php');
	require_once('../db/db.php');
	if(isset($_POST['submit'])){

		$name 	= $_POST['name'];
	    $pid 		= $_POST['pid'];
        $uid    = $_POST['uid'];
		$text    = $_POST['comment'];
		$comment = [
			'text'	=>$text,
			'pid'		=>$pid,
			'uid'	=>$uid,
			'name'   =>$name
			
		];

		$status = createcmnt($comment);
		if($status){
			header('location: ../views/raiser_postdetails.php?postid='.$pid);
		}else{
			header('location: ../views/raiser_postdetails.php');
		}	
	}
?>