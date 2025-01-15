<?php

require 'app.php';

function includeTemplate( string $name, bool $isAlt = false ) {
	include TEMPLATES_URL . $name . '.php';
}