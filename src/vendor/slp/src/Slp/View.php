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
 * Simple Light Php Framework Application View Class
 *
 * This class is used to render html files
 *
 * @package             Slp
 * @author              Marc PEPIN
 */

class View {
	
	private $container;
	
	/**
	* @brief construct view
	*/
	public function __construct()
	{
		$this->container = Container::getInstance();
	}

	/**
	* Render template
	*/
	public function render($view, $vars = NULL) {
	
		$loader = new Twig();
		$twig = new \Twig_Environment($loader, array(
		    //'cache' => SLP_WEBROOT.'/../app/cache',
		    'debug' => true,
		));
		$twig->addExtension(new \Twig_Extension_Debug());
		if ($vars)
			echo $twig->render($view, $vars);
		else
			echo $twig->render($view);
	}
	
	public function error($error)
	{
		$view = "::Errors:Error";
		$this->render($view, array('error' => $error));
		
	}
	
	public function exception($error)
	{
		$view = "::Errors:Exception";
		$this->render($view, array('error' => $error));
		
	}
}

?>