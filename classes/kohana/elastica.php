<?php

class Kohana_Elastica
{
	
	protected static $vendor_class_root; 
	

	/**
	 * Registers autoloader method for Elastica classes
	 * 
	 * @param string $module_path
	 * 
	 * @return void
	 */
	public static function register_autoloader($module_path)
	{
		// get path to Elastica's files
		self::$vendor_class_root = $module_path . "/vendor/Elastica/lib/";
		
		// check that path exists
		if ( ! file_exists(self::$vendor_class_root) ) {
			throw new Exception( sprintf("Elastica path %s not found", self::$vendor_class_root) );
		}
		
		// register autoloader
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
		$filename = str_replace('_', '/', $class) . '.php';
		$file = self::$vendor_class_root . '/' . $filename;

		require_once $file;
	}

}
