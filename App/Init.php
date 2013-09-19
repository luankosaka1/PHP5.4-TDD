<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap
{
	protected function _initRoutes() {
		$ar['artigo-home'] = ['route' => '/artigos', 'controller' => 'index', 'action' => 'index'];	
		$ar['artigo-novo'] = ['route' => '/artigos/novo', 'controller' => 'index', 'action' => 'novo'];	
		$ar['artigo-edit'] = ['route' => '/artigos/edit', 'controller' => 'index', 'action' => 'edit'];	
		$ar['artigo-delete'] = ['route' => '/artigos/delete', 'controller' => 'index', 'action' => 'delete'];	
		return $this->setRoutes($ar);
	}
}