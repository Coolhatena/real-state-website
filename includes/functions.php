<?php

require 'app.php';

function includeTemplate( string $name, bool $isAlt = false ) {
	include TEMPLATES_URL . $name . '.php';
}

function isAuth() : bool {
	session_start();	
	return !!$_SESSION['login'];
}