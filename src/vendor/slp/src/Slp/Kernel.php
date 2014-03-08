<?php
 /*
 * Simple Light PHP Framework
 *
 * @copyright Marc PEPIN 2012
 * @author Marc PEPIN
 *
 */
 
namespace Slp;


/** 
* Simple Light Php Framework Kernel Class
* @package		Slp
* @author    	Marc PEPIN
*/ 

class Kernel
{
	private $container;
	
	private $env;
	
	/**
	* @brief construct Kernel
	* @param environnement
	* @param enable or disable debug
	*/
	public function __construct($env, $debug)
	{
		$this->container = Container::getInstance();
		$this->env = $env;
		if ($debug)
		{
			error_reporting(E_ALL);
			ini_set('display_errors', '1');
		}
		else
			error_reporting(0);
	}
	
	/**
	* @brief exception handler
	*/
	public function exceptionHandler($e)
	{
		$this->container->get('view')->exception($e);	
	}
	
	/**
	* @brief init Kernel
	*/
	private function init()
	{
		$this->container->addService("view", new View());
		set_exception_handler(array($this, "exceptionHandler"));
		//set_error_handler(array($this, "errorHandler"));
		$this->container->addService("router", new Router());
		$this->container->addService("request", new Request());	
		$this->container->addService("config", new Config());
		$this->container->addService("asset", new Asset());
	}
	
	/**
	* @brief load modules
	*/
	private function loadModules()
	{
		$modules = require SLP_WEBROOT.'/../app/AppModules.php';
		foreach ($modules as $module)
			$module->load();
	}

	/**
	* @brief run kernel
	*/
	public function execute()
	{
		$this->init();
		$this->loadModules();
		$this->container->get("router")->handle();
	}
}