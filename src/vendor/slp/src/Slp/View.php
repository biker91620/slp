<?php
/**
 * Simple Light PHP Framework
 *
 * @copyright Marc PEPIN 2012
 * @author Marc PEPIN
 *
 */

namespace Slp;

use Assetic\Factory\AssetFactory;
use Assetic\AssetManager;
use Assetic\Factory\Worker\CacheBustingWorker;
use Assetic\Asset\AssetCollection;
use Assetic\Asset\AssetReference;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;
use Assetic\FilterManager;
use Assetic\AssetWriter;
use Assetic\Extension\Twig\TwigFormulaLoader;
use Assetic\Extension\Twig\TwigResource;
use Assetic\Factory\LazyAssetManager;

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

	public function getAssetFactory()
	{
		$factory = new AssetFactory(SLP_WEBROOT);
		$factory->setDebug(true);
		return $factory;
	}
	/**
	* Render template
	*/
	public function render($template, $vars = NULL) {
	
		$js = new AssetCollection(array(
    new GlobAsset(SLP_WEBROOT.'/js/*'),
));

// the code is merged when the asset is dumped
//echo $js->dump();

		$vars = is_array($vars) ? array_merge($vars, array('container' => $this->container)) : array('container' => $this->container);
		$twigLoader = new Twig();
		$twig = new \Twig_Environment($twigLoader, array(
		    'cache' => SLP_WEBROOT.'/../app/cache',
		    'debug' => true,
		));
		$twig->addExtension(new \Assetic\Extension\Twig\AsseticExtension($this->getAssetFactory()));
		$twig->addExtension(new \Twig_Extension_Debug());
		$am = new LazyAssetManager($this->getAssetFactory());

		// enable loading assets from twig templates
		$am->setLoader('twig', new TwigFormulaLoader($twig));
		
		// loop through all your templates
		$resource = new TwigResource($twigLoader, $template);
		$am->addResource($resource, 'twig');
	
		print_r($am->getNames());
		
		if ($vars)
			echo $twig->render($template, $vars);
		else
			echo $twig->render($template);
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