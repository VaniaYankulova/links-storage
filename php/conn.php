<?php
	$server = "localhost";
	$username = "root";
	$pass = "";
	$db = "links-storage";

	//create connection 

	$conn = mysqli_connect($server,$username,$pass,$db);

	
	// $db = mysqli_connect('localhost', 'root', '', 'links-storage');



	mysqli_set_charset($conn, "utf8"); /* Procedural approach */
	$conn->set_charset("utf8");   
	
	//check conncetion

	if($conn->connect_error){

		die ("Connection Failed!". $conn->connect_error);
	}

?>