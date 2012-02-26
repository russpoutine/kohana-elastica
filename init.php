<?php


// get path to module
$module_path = realpath(dirname(__FILE__));


// register autoloader with module path
Kohana_Elastica::register_autoloader(
	realpath(dirname(__FILE__))
);
