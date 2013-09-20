<?php

class Mock
{
	private $_user;
	private $_users = array();

	public function setNome($user) {
		$this->_user = $user;
	}

	public function getNome() {
		return $this->_user;
	}

	public function save() {
		$this->_users[] = $this->_user;
		$this->sendMail($this->_user);
	}

	public function fetchAll() {
		return $this->_users;
	}

	public function sendMail($user = null) {
		mail();
	}
}