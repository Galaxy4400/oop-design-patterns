<?php

namespace App\DesignPaterns\Creational\AbstractFactory\Contracts;

interface FurnitureContract
{
	public function createChair(): ChairContract;

	public function createSofa(): SofaContract;

	public function createTable(): TableContract;
}
