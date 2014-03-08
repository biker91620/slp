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
* Simple Light Php Framework Container Class
* @package		Slp
* @author    	Marc PEPIN
*/ 

class Container {
	
	private $services = array();
	
	static private $instance = NULL;
	
	/**
	* @brief Get service object
	* @param service name
	* @return service
	*/
	public function get($service)
	{
		if (!isset($this->services[$service]))
			throw new \Exception("Service $service doesn't exist");
		return $this->services[$service];
	}
	
	/**
	* @brief Add service
	* @param service service name
	* @param class class name 
	*/
	public function addService($service, $class)
	{
		if (!isset($this->services[$service]))
			$this->services[$service] = new $class;
	}
	
	/**
	* @brief Add many services
	* @param services service list
	*/
	public function addServices($services)
	{
		foreach ($services as $service => $class)
		{
			if (!isset($this->services[$service]))
				$this->services[$service] = new $class;
		}
	}
	
	/**
	* @brief Get class instance
	* @return container
	*/
	static public function getInstance()
	{
		if (!self::$instance)
			self::$instance = new Container;
		return self::$instance;
	}
}

?>