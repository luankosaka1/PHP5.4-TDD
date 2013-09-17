<?php

namespace SON\Controller;

use SON\Di\Container;

trait Crud
{
	public function index() {
		$model = Container::getClass($this->model);
		$this->view->objetos = $model->fetchAll();
		$this->render('index');
	}
}