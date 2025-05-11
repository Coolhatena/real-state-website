<?php
	exit;
	require 'includes/app.php';
	$db = connectDB();

	// Create email and password
	$email = 'correo@correo.com';
	$password = '123456';
	$password_hashed = password_hash($password, PASSWORD_DEFAULT);
	
	//Query to create user
	$query = "INSERT INTO users (email, password) VALUES ('$email', '$password_hashed');";

	echo $query;

	// Add user to db
	// mysqli_query($db, $query);
