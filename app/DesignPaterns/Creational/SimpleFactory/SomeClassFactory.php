<?php

namespace App\DesignPaterns\Creational\SimpleFactory;


class SomeClassFactory
{
	public function build(): SomeClass
	{
		$object = new SomeClass('parav 1 value', 123);

		$object->setParam3('some value');

		return $object;
	}
}
