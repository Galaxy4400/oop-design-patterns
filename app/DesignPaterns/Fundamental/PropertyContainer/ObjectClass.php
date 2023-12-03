<?php

namespace App\DesignPaterns\Fundamental\PropertyContainer;

use App\DesignPaterns\Fundamental\PropertyContainer\Contracts\PropertyContainerContract;
use App\DesignPaterns\Fundamental\PropertyContainer\Trates\HasPropertyContainer;

class ObjectClass implements PropertyContainerContract
{
	use HasPropertyContainer;

	protected string $objectName;


	public function __construct()
	{
		$this->objectName = 'test';
	}


	public function getName(): string
	{
		return $this->objectName;
	}


	public function setName(string $value): void
	{
		$this->objectName = $value;
	}
}
