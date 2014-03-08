<?php
 /*
 * Simple Light PHP Framework
 *
 * @copyright Marc PEPIN 2012
 * @author Marc PEPIN
 *
 */
 
namespace Slp;

use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;
use Assetic\Filter\UglifyCssFilter;
use Assetic\Factory\AssetFactory;
use Assetic\AssetManager;
use Assetic\AssetWriter;

/** 
* Simple Light Php Framework Munee Class helper
* @package		Slp
* @author    	Marc PEPIN
*/ 

class Asset
{
	public function __construct()
	{
	}
	
	public function css()
	{
		/*
		$am = new AssetManager();
		$am->set('jquery', new FileAsset(SLP_WEBROOT.'/css/test.css'));
		//$am->set('base_css', new GlobAsset(SLP_WEBROOT.'/css/test.css'));

		$writer = new AssetWriter(SLP_WEBROOT.'/css');
		$writer->writeManagerAssets($am);

		$css = new AssetCollection(array(
		   // new GlobAsset(SLP_WEBROOT.'/css/*', new UglifyCssFilter),
		    new FileAsset(SLP_WEBROOT.'/css/test.css'),
		));
		
		// the code is merged when the asset is dumped
		echo $css->dump();
		die();*/
	}
	
	public function image()
	{

	}
	
	public function javascript()
	{
	
	}
}