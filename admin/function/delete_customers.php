<?php
	require '../../index/database/database.php';
	require './function.php';
	$id=$_GET['customerID'];
	$sql = "DELETE FROM customers WHERE customerID = '".$id."'";
	$query = mysqli_query($con, $sql);
	redirect_to("../admin.php");
	/*if(!$query){
		echo "DELETE failed";
	}else{
		echo "DELETE completed";
	}*/
?>