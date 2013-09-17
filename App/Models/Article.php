<?php

namespace App\Models;

use SON\Db\Table;

class Article extends Table
{
	protected $table = "article";

	public function getName() {
		return "SON";
	}

	public function _insert (array $data) {

	}

	public function _update (array $data) {
		
	}
}