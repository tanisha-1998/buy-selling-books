<?php
	$conn = mysqli_connect("localhost", "root", "", "form");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>