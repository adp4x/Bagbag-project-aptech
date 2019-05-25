<?php
	require_once '../../index/database/database.php';
	require_once '../function/function.php';
	$id = $_GET['galleryID'];
	$sql = "DELETE FROM gallery WHERE galleryID = ".$id."";
	$query = mysqli_query($con,$sql);
	if (!$query) {
			echo "Failed";
	}else{
		redirect_to("gallery.php");
	}	
?>