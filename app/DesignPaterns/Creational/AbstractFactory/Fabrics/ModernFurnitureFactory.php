<?php

namespace App\DesignPaterns\Creational\AbstractFactory\Fabrics;

use App\DesignPaterns\Creational\AbstractFactory\Objects\ModernSofa;
use App\DesignPaterns\Creational\AbstractFactory\Objects\ModernChair;
use App\DesignPaterns\Creational\AbstractFactory\Objects\ModernTable;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\SofaContract;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\ChairContract;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\TableContract;
use App\DesignPaterns\Creational\AbstractFactory\Contracts\FurnitureContract;

class ModernFurnitureFactory implements FurnitureContract
{

	public function createChair(): ChairContract
	{
		return new ModernChair();
	}
	
	
	public function createSofa(): SofaContract
	{
		return new ModernSofa();
	}
	
	
	public function createTable(): TableContract
	{
		return new ModernTable();
	}

}
