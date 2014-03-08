<?php
/**
 * Simple Light PHP Framework
 *
 * @copyright Marc PEPIN 2012
 * @author Marc PEPIN
 *
 */

namespace Slp;
 
/** 
* Simple Light Php Framework Module Class
* @package		Slp
* @author    	Marc PEPIN
*/ 

class Module
{	
	private $container;
	
	/**
	* @brief construct Module 
	*/
	public function __construct()
	{
		$this->container = Container::getInstance();
	}
	
	/**
	* @brief check if module file exist
	* @param path of file
	*/
	private function getFile($file)
	{
		$rc = new \ReflectionClass(get_class($this));
		$info = \pathinfo($rc->getFileName());
		$filepath = $info['dirname']. DIRECTORY_SEPARATOR . $file;
		if (file_exists($filepath))
			return $filepath;
		return false;
	}
	
	/**
	* @brief load module files (service, config, route)
	*/
	public function load()
	{
        if (!($path = $this->getFile('/Ressources/route.php')))
			throw new \Exception("Module " . get_class($this). " has no route file");
		$routes = include($path);
		$this->container->get("router")->addRoutes($routes);
		if (!($path = $this->getFile('/Ressources/service.php')))
			throw new \Exception("Module " . get_class($this). " has no service file");
		$services = include($path);
		$this->container->addServices($services);
		if (!($path = $this->getFile('/Ressources/config.php')))
			throw new \Exception("Module " . get_class($this). " has no config file");
		$configs = include($path);
		$this->container->get('config')->addMany($configs);
	}
}