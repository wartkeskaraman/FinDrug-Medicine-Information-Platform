<?php

	$dbserver = "localhost";
	$user = "root";
	$password = "";
	$db = "drug_add";
	
	$connection = mysqli_connect($dbserver, $user, $password, $db);

	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" );
	}
	
	

?>