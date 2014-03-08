<?php
namespace Mpe\Demo\Controllers;

use Slp\Controller;

class Hello extends Controller
{
	public function indexAction()
	{
		return $this->render("Mpe:Demo:Default:index");
	}
}