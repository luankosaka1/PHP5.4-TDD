<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap
{
	protected function _initRoutes() {
		$ar['artigo-home'] = ['route' => '/artigos', 'controller' => 'index', 'action' => 'index'];	
		$ar['artigo_adicionar'] = ['route' => '/artigo/adicionar', 'controller' => 'index', 'action' => 'adicionar'];	
		return $this->setRoutes($ar);
	}
}