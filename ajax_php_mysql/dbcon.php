<?php 
	// Varibales that holds all data we need
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ajax_db";
	// Variable that holds database connection

	$conn = new mysqli($hostname, $username, $password, $dbname);

	if ($conn){
		// echo "Successfully Connected!";
	} else{
		echo "Connecetion Error: ".$conn->error;
	}
?>