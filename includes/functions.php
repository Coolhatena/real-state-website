<?php

define('TEMPLATES_URL', __DIR__ . '/templates/');
define('FUNCTIONS_URL',  __DIR__ . 'functions.php');

function includeTemplate( string $name, bool $isAlt = false ) {
	include TEMPLATES_URL . $name . '.php';
}

function isAuth() : bool {
	session_start();	
	return !!$_SESSION['login'];
}