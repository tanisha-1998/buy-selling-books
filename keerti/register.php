<?php
	require 'conn.php';
 
	if(ISSET($_POST['register'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
 
		mysqli_query($conn, "INSERT INTO `register` VALUES( '$firstname', '$lastname', '$username', '$password')") or die(mysqli_error());
		echo "<h3 class='text-success'>User account registered!</h3>";
	}
?>