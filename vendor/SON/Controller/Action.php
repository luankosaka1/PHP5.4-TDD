<?php

namespace SON\Controller;

abstract class Action
{
	protected $action;
	protected $view;

	public function __construct() {
		$this->view = new \stdClass();
	}

	protected function render($view, $layout = true)
	{
		$this->action = $view;
		$file = '../App/views/layout.phtml';
		if (file_exists($file) && $layout)
			include_once($file);
		else
			$this->content();
	}

	protected function content() {
		$class = get_class($this);
		$singleClassName = strtolower(str_replace("App\\Controllers\\", "", $class));
		include_once '../App/views/' . $singleClassName . '/' . $this->action . '.phtml';
	}
}