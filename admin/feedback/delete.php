<?php
	require_once '../../index/database/database.php';
	require_once '../function/function.php';
	$id = $_GET['feedbackID'];
	$sql = "DELETE FROM feedback WHERE feedbackID ='".$id."'";
	$query = mysqli_query($con, $sql);
	if (!$query) {
		echo "<h1>Failed</h1>";
	}else{
		redirect_to("feedback.php");
	}
?>