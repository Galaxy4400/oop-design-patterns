<?php

namespace App\DesignPaterns\Creational\AbstractFactory\Fabrics;

use App\DesignPaterns\Creational\AbstractFactory\Objects\ArdekoChair;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\SofaContract;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\ChairContract;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\TableContract;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\FurnitureContract;
use App\DesignPaterns\Creational\AbstractFactory\Objects\ArdekoSofa;
use App\DesignPaterns\Creational\AbstractFactory\Objects\ArdekoTable;

class ArdekoFurnitureFactory implements FurnitureContract
{

	public function createChair(): ChairContract
	{
		return new ArdekoChair();
	}
	

	public function createSofa(): SofaContract
	{
		return new ArdekoSofa();
	}
	

	public function createTable(): TableContract
	{
		return new ArdekoTable();
	}
	
}
