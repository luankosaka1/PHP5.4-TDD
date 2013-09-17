<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Controller\Crud;

class Index extends Action
{
	use Crud;
	protected $model = "article";
}