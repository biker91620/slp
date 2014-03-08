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
* Simple Light Php Framework Config Class
* @package		Slp
* @author    	Marc PEPIN
*/ 

class Config {
	
	private $config = array();
	
	/**
	* @brief Get config value
	* @param key
	* @return config value
	*/
	public function get($key)
	{
		if (!isset($this->config[$key]))
			throw new \Exception("Config has no key $key");
		return $this->config[$key];
	}
	
	/**
	* @brief add config value
	* @param key
	* @param value
	*/
	public function addOne($key, $value)
	{
		if (!isset($this->config[$key]))
			$this->config[$key] = is_array($value) ? (object)$value : $value;
	}
	
	/**
	* @brief mani config value
	* @param array config
	*/
	public function addMany(array $configs)
	{
		foreach ($configs as $key => $value)
			$this->addOne($key, $value);
	}
}

?>