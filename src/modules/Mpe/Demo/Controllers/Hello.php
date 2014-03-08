<?php
namespace Mpe\Demo\Controllers;

use Slp\Controller;

class Hello extends Controller
{
	public function indexAction()
	{
		$this->container->get('asset')->css();
		return $this->render("Mpe:Demo:Default:index");
	}
	
	public function secondAction($a)
	{
		return $this->render("Mpe:Demo:Default:index", array('a' => $a));
	}
	
	public function thirdAction($a, $b)
	{
		return $this->render("Mpe:Demo:Default:third", array('a' => $a, 'b' => $b));
	}
}