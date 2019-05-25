<?php
	require '../function/function.php';
	require '../../index/database/database.php';
	//echo $_GET['id'];
	$id = $_GET['id'];
	$sql = "UPDATE orders SET confirm = 'Yes' WHERE orderID = ".$id."";
	$query = mysqli_query($con,$sql);
	if($query) redirect_to('order.php');
?>