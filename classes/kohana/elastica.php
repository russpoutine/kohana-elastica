<?php

class Kohana_Elastica
{

	/**
	 * Registers autoloader method for Elastica classes
	 * 
	 * @param string $module_path
	 * 
	 * @return void
	 */
	public static function register_autoloader($module_path)
	{
		set_include_path(get_include_path() . PATH_SEPARATOR . $module_path . 'vendor/Elastica');
		
		spl_autoload_register('Kohana_Elastica::autoload');		
	}


	/**
	 * Autoloader for Elastica classes
	 *
	 * @param string $class
	 *
	 * @return void
	 */
	public static function autoload($class)
	{
		$file = str_replace('_', '/', $class) . '.php';
		
		require_once $file;
	}

}
