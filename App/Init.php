<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap
{
	protected function _initRoutes() {
		$ar['xpto'] = ['route' => '/xpto', 'controller' => 'xpto', 'action' => 'index'];
		$ar['home'] = ['route' => '/', 'controller' => 'index', 'action' => 'index'];	
		return $this->setRoutes($ar);
	}
}