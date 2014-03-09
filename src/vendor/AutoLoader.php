<?php

/**
 * Simple Light PHP Framework
 *
 * @copyright Marc PEPIN 2012
 * @author Marc PEPIN
 *
 */

class AutoLoader
{
	public function __construct() {
        spl_autoload_register(array($this, 'autoload'));
    }
    
	function autoload($name) {
		$namespaces = include SLP_WEBROOT.'/../app/AppLoader.php';
		$delimitor = NULL;
		if (strpos($name, "\\"))
			$delimitor = "\\";
		else if (strpos($name, "_"))
			$delimitor = "_";
		$className = $name;
		$name = str_replace($delimitor, "/", $name);
		foreach ($namespaces as $ns => $path)
		{
			$ns = str_replace("\\", "/", $ns);
			if (preg_match('!'.preg_quote($ns).'!', $name, $matches))
			{
				$target = preg_replace("!".$matches[0]."!", $path, $name, 1);
				$file = $target.'.php';
				if (!file_exists($file))
					throw new Exception("Class \"".$name."\" does not exist");
				require_once ($file);
				if (!class_exists($className) && !interface_exists($className))
					throw new Exception("The autoloader expected class \"".$className."\" to be defined in file \"".$file."\". The file was found but the class was not in it, the class name or namespace probably has a typo.");
				break;
			}
		}
	}
}