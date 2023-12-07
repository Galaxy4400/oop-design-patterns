<?php

namespace App\DesignPaterns\Creational\StaticFactory;

use App\DesignPaterns\Creational\AbstractFactory\Contracts\FurnitureContract;
use App\DesignPaterns\Creational\AbstractFactory\Fabrics\ArdekoFurnitureFactory;
use App\DesignPaterns\Creational\AbstractFactory\Fabrics\ModernFurnitureFactory;
use App\DesignPaterns\Creational\AbstractFactory\Fabrics\VictorianFurnitureFactory;
use InvalidArgumentException;

class FurnitureFactory
{
	public static function build(string $type = 'modern'): FurnitureContract
	{
		return match ($type) {
			'modern' => new ModernFurnitureFactory(),
			'victorian' => new VictorianFurnitureFactory(),
			'ardeko' => new ArdekoFurnitureFactory(),
			default => throw new InvalidArgumentException("Типа мебели [{$type}] не существует"),
		};
	}
}
