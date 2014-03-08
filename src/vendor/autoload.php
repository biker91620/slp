<?php

/**
 * Simple Light PHP Framework
 *
 * @copyright Marc PEPIN 2012
 * @author Marc PEPIN
 *
 */
 
function __autoload($name) {
	$namespaces = include SLP_WEBROOT.'/../app/AppLoader.php';
	$delimitor = NULL;
	if (strpos($name, "\\"))
		$delimitor = "\\";
	else if (strpos($name, "_"))
		$delimitor = "_";
	foreach ($namespaces as $ns => $path)
	{
		if (preg_match('!'.preg_quote($ns).'!', $name, $matches))
		{
			$target = str_replace(str_replace($delimitor, "/", $matches[0]), $path, str_replace($delimitor, "/", $name));
			$file = $target.'.php';
			if (!file_exists($file))
				throw new Exception("Class \"".$name."\" does not exist");
			include($file);
			if (!class_exists($name) && !interface_exists($name))
				throw new Exception("The autoloader expected class \"".$name."\" to be defined in file \"".$file."\". The file was found but the class was not in it, the class name or namespace probably has a typo.");
			break;
		}
	}
}