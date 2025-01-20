<?php

function connectDB() : mysqli {
	$db = mysqli_connect('localhost', 'coolhatena', '1234', 'realstate_crud');

	if (!$db) {
		echo "Error: No se pudo conectar";
		exit;
	} 

	return $db;
}