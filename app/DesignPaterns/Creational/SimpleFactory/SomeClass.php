<?php

namespace App\DesignPaterns\Creational\SimpleFactory;

class SomeClass
{
	protected string $param3;

	public function __construct(
		protected string $param1,
		protected int $param2,
	) {
	}


	public function setParam3(string $value): void
	{
		$this->param3 = $value;
	}
}
