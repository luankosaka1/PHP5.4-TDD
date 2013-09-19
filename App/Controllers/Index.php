<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Controller\Crud;
use SON\Di\Container;

class Index extends Action
{
	//use Crud;
	protected $model = "article";

	public function index() {
		$model = Container::getClass($this->model);
		$this->view->objetos = $model->fetchAll();
		$this->render('index');
	}

	public function adicionar() {
		$this->render("adicionar");
	}
}