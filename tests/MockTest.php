<?php

require_once '../public/library/Mock.php';

class MockTest extends PHPUnit_Framework_TestCase
{
	public function testSetNomeEGetNome() {
		$user = new Mock();
		$user->setNome("Wesley");
		$this->assertEquals("Wesley", $this->getNome());
	}

	public function testCadastraUser() {
		$user = new Mock();
		$this->setNome("Wesley");
		$user->save();
		$this->assertArrayHasKey(0, $user->fetchAll());
	}

	public function testSendMail() {
		$user = $this->getMock("Mock", array("sendMail"));

		$user->expects($this->any())
			->method("sendMail")
			->with($this->equalTo("Wesley")) // parametro passado
			->will($this->returnValue(true));

		$user->setNome("Wesley");
		$user->save();
	}
}