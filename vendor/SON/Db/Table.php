<?php

namespace SON\Db;

use SON\Di\Container;

abstract class Table
{
	protected $db;

	public function __construct(\PDO $db) {
		$this->db = $db;
	}

	abstract protected function _insert(array $data);

	abstract protected function _update(array $data);

	public function save(array $data) {
		if (!isset($data['id']))
			return $this->_insert($data);
		else
			return $this->_update($data);
	}

	public function find($id) {
		$stmt = $this->db->prepare("SELECT * FROM ".$this->table." WHERE id = :id");
		$stmt->bindParam(":id", $id);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function delete($id) {
		$stmt = $this->db->prepare("DELETE FROM ".$this->table." WHERE id = :id");
		$stmt->bindParam(":id", $id);
		return $stmt->execute();
		return true;
	}

	public function fetchAll() {
		$stmt = $this->db->prepare("SELECT * FROM ".$this->table);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}