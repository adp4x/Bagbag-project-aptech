<?php
	require 'function.php';
	session_start();
	if(isset($_SESSION['username'])){
		unset($_SESSION['username']);
		redirect_to("../index.php");
	}else{
		redirect_to("../index.php");
	}
?>