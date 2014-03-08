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
* Simple Light Php Framework controller Class
* @package		Slp
* @author    	Marc PEPIN
*/ 

class Controller
{
	protected $container;
	
	/**
	* @brief construct new controller and set container
	*/
	public function __construct()
	{
		$this->container = Container::getInstance();
	}
	
	public function render($view, $params = NULL)
	{
		$this->container->get('view')->render($view, $params);//'AcmeHelloBundle:Hello:index.html.twig', array('name' => $name));
	}
}