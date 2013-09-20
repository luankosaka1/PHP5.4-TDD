<?php

require_once '../public/library/Stub.php';

class StubTest extends PHPUnit_Framework_TestCase
{
	public function testStub()
	{
		$stub = $this->getMock("Stub");

		$stub->expects($this->any()) // qualquer chamada
			->method('rodaAlgo') // chama o método
			->will($this->returnValue('xpto')); // retorna o valor q definir

		$this->assertEquals('xpto', $stub->rodaAlgo());
	}
}