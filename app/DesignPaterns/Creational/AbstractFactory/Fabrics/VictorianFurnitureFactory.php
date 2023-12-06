<?php

namespace App\DesignPaterns\Creational\AbstractFactory\Fabrics;

use App\DesignPaterns\Creational\AbstractFactory\Objects\VictorianSofa;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\SofaContract;
use App\DesignPaterns\Creational\AbstractFactory\Objects\VictorianChair;
use App\DesignPaterns\Creational\AbstractFactory\Objects\VictorianTable;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\ChairContract;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\TableContract;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\FurnitureContract;

class VictorianFurnitureFactory implements FurnitureContract
{

	public function createChair(): ChairContract
	{
		return new VictorianChair();
	}
	
	
	public function createSofa(): SofaContract
	{
		return new VictorianSofa();
	}
	
	
	public function createTable(): TableContract
	{
		return new VictorianTable();
	}
	
}
