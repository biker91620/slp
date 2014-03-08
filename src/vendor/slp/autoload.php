<?php

/**
 * Simple Light PHP Framework
 *
 * @copyright Marc PEPIN 2012
 * @author Marc PEPIN
 *
 */
 
function __autoload($name) {
	$namespaces = include __DIR__.'/../../app/AppLoader.php';
	foreach ($namespaces as $ns => $path)
	{
		if (preg_match('!'.preg_quote($ns).'!', $name, $matches))
		{
			$target = str_replace($matches[0], $path, $name);
			$file = str_replace("\\", "/", $target).'.php';
			if (!file_exists($file))
				throw new Exception("Class \"".$name."\" does not exist");
			include($file);
			if (!class_exists($name))
				throw new Exception("The autoloader expected class \"".$name."\" to be defined in file \"".$file."\". The file was found but the class was not in it, the class name or namespace probably has a typo.");
		}
	}
}