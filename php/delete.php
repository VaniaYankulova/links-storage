<?php
	include 'conn.php';
	$id = $_GET['userID'];
	$sql = "Delete from users where md5(userID) = '$id'";
	if($conn->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:zapisi.php');
	}else{
		echo "Oppps something error ";
	}
	$conn->close();
?>