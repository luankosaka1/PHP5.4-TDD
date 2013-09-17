<?php

namespace SON\Db;
use SON\Di\Container;

abstract class Table
{
	protected $db;

	public function __construct($db) {
		$this->db = $db;
	}

	public function fetchAll() {
		$query = "Select * From " . $this->table;
		return $this->db->query($query);
	}

	abstract public function _insert (array $data);
	abstract public function _update (array $data);

	public function save (array $data) {
		if (isset($data['id']))
			$this->_update($data);
		else
			$this->_insert($data);
	}

	public function delete ($id) {
		$query = "DELETE FROM " . $this->table . "WHERE id = " . (int) $id;
		return $this->db->query($query);
	}
}