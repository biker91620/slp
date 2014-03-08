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
* Simple Light Php Framework Router Class
* @package		Slp
* @author    	Marc PEPIN
*/ 
class Router
{
	private $routes = array();
	private $container;
	
	/**
	* @brief construct Router
	*/
	public function __construct()
	{
		$this->container = Container::getInstance();
	}
	
	/**
	* @brief get controller method
	* @param route
	*/
	private function getMethod($route)
	{
		$class = $route['controller'];
		$method = $route['method'].'Action';
		$reflection = new \ReflectionMethod($class, $method);
		$parameterCount = $reflection->getNumberOfParameters();
		$parameterCountknow = isset($route['parameters']) ? count($route['parameters']) : 0;
		if ($parameterCountknow != $parameterCount)
			throw new \Exception("Controller \"".$class."::".$method."\" requires $parameterCount parameters but $parameterCountknow are set");
		$requestCount = count(array_values($this->container->get('request')->paths));
		if ($parameterCount != $requestCount)
			throw new \Exception("Controller \"".$class."::".$method."\" requires $parameterCount parameters but $requestCount are set");
		$avaibleMethods = get_class_methods($route['controller']);
		if (!in_array($method, $avaibleMethods))
			throw new \Exception("Malformed route $path: controller has no method name ".$method);
		return $method;
	}
	
	/**
	* @brief validate route
	* @param routes
	*/
	private function validate($routes)
	{
		foreach ($routes as $path => $route)
		{
			if ($path[0] != '/')
				throw new \Exception("Malformed route $path: path must begin with /");
			if (!isset($route['controller']) || !isset($route['method']))
				throw new \Exception("Malformed route $path: missing controller and method parameters");
			if (preg_match_all('!\{([^{}])\}!', $path, $matches) && isset($matches[1]))
			{
				foreach ($matches[1] as $var)
				{
					if (isset($route[$var]['pattern']) && @preg_match('!'.$route[$var]['pattern'].'!', 'test') == false)
						throw new \Exception("Malformed route $path: pattern is not a valid regex");		
				}
			}
		}
	}
	
	/**
	* @brief add routes
	* @param routes
	*/
	public function addRoutes($routes)
	{
		$this->validate($routes);
		$this->routes = (object)array_merge($this->routes, $routes);
	}
	
	/**
	* @brief check route 
	*/
	public function checkRoute($path, $route, &$args)
	{
		if ($this->container->get('request')->uri == $path)
			return true;
		$currentPaths = $this->container->get('request')->paths;
		$path = substr($path, 1);
		$testPaths = explode("/", $path);
		if (count($testPaths) != count($currentPaths))
			return false;
		foreach ($currentPaths as $key => $value)
		{
			if (preg_match_all('!\{(.+)\}!', $testPaths[$key], $matches))
			{
				$args[] = $value;
				continue;
			}
			if ($testPaths[$key] != $currentPaths[$key])
				return false;
		}
		
		return true;
	}
	/**
	* @brief handle route
	*/
	public function handle()
	{
		$uri = $this->container->get('request')->uri;
		foreach ($this->routes as $path => $route)
		{
			$args = array();
			if ($this->checkRoute($path, $route, $args))
			{
				$method = $this->getMethod($route);
				$reflectionMethod = new \ReflectionMethod($route["controller"], $method);
				if (!empty($args))
					echo $reflectionMethod->invokeArgs(new $route["controller"], $args);
				else
					echo $reflectionMethod->invoke(new $route["controller"]);
				return true;
			}
		}
		throw new \Exception("No route found for $uri");
	}
}