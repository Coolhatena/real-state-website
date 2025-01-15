<?php

require 'app.php';

function includeTemplate( $name, $isAlt = false ) {
	include TEMPLATES_URL . $name . '.php';
}