<?php
namespace Slp;

class Twig extends \Twig_Loader_Filesystem
{

	public function getSource($name)
    {
    	$paths = explode(":", $name);
		$count = count($paths);
		$findCount = count(array_filter($paths, 'strlen')) ;
		if ($findCount < 1 ||$findCount > 4)
			throw new \Exception("invalid view path");
		if (empty($paths[0]))
		{
			$paths[0] = SLP_WEBROOT."/../app/Ressources/views/".$paths[0];
			$paths[$count - 1] = $paths[$count - 1].".tpl.twig"; 
		}
		else
		{
			$paths[0] = SLP_WEBROOT."/../modules/".$paths[0];
			$paths[2] = "Ressources/views/".$paths[2];
			$paths[$count - 1] = $paths[$count - 1].".tpl.twig"; 
		}
		$tpl = new \stdClass;
		$tpl->file = implode(DIRECTORY_SEPARATOR, $paths);
		$tpl->filename = $paths[$count - 1];
		unset($paths[$count - 1]);
		$tpl->directory = implode(DIRECTORY_SEPARATOR, $paths);
		$this->addPath($tpl->directory);
		if (!file_exists($tpl->file))
			throw new \Exception("View not found");
		$content = file_get_contents($tpl->file);
		return $content;
    }

    public function getCacheKey($name)
    {
      return $name;
    }

    public function isFresh($name, $time)
    {
      return false;
    }
}