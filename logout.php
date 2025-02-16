<?php
	// This is only a helper page to log out users
	// It will just log out and redirect to the main page
	session_start();
	$_SESSION = [];
	header('Location: /');