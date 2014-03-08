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
	* @brief get view location
	* @param view
	*/
	private function getViewLocation($view)
	{
		$paths = explode(":", $view);
		$count = count($paths);
		$findCount = count(array_filter($paths, 'strlen')) ;
		if ($findCount < 2 ||$findCount > 4)
			throw new \Exception("invalid view path");
		if (empty($paths[0]))
		{
			$paths[0] = "../app/Ressources/views/".$paths[0];
			$paths[$count - 1] = $paths[$count - 1].".tpl.php"; 
		}
		else
		{
			$paths[0] = "../modules/".$paths[0];
			$paths[2] = "Ressources/views/".$paths[2];
			$paths[$count - 1] = $paths[$count - 1].".tpl.php"; 
		}
		$file = implode(DIRECTORY_SEPARATOR, $paths);
		if (!file_exists($file))
			throw new \Exception("View not found");
		return $file;
	}
	/**
	* Render template
	*/
	public function render($view, $vars = NULL) {
		if ($vars) {
			foreach ($vars as $key => $value)
			{
				if ($key == "container")
					$this->{"container_"} = $value;
				else
					$this->{$key} = $value;
			}
		}
		extract($GLOBALS, EXTR_SKIP);
		ob_start();
		include($this->getViewLocation($view));
		$applied_template = ob_get_contents();
		ob_end_clean();
		echo $applied_template;
	}
	
	public function error($errCode, $error)
	{
		$view = "::Errors:".$errCode;
		$this->render($view, array('error' => $error));
		
	}
}

?>