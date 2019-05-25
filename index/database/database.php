<?php
    $hostname = "localhost";
    $port = "3306";
    $databaseName = "bag";
    $databaseUserName = "root";
    $databasePassword = "";
    $con = mysqli_connect(
        $hostname,
        $databaseUserName,
        $databasePassword,
        $databaseName);
    /*if (!$con){
        echo "<h2>Failed to connect to MySQL: " . mysqli_connect_error()."</h2>";
    }else{
    	echo "<h2>Connected succesfully</h2>";
    }*/
?>