<?php
  	session_start();
	require_once('../services/postService.php');
	$status = deletePostByRaiser($_GET['postid']);
	if($status){
		header('location: ../views/raiser_home.php');
	}else{
		header('location:../views/raiser_postdetails.php?postid='.$_GET['postid']);
	}

?>