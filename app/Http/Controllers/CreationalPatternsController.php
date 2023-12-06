<?php

namespace App\Http\Controllers;

use App\DesignPaterns\Creational\AbstractFactory\Fabrics\ArdekoFurnitureFactory;
use App\DesignPaterns\Creational\AbstractFactory\Fabrics\ModernFurnitureFactory;
use App\DesignPaterns\Creational\AbstractFactory\Fabrics\VictorianFurnitureFactory;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;


/**
 * Пораждающий шаблон проектирования - это никей алгоритм который позволяет абстрагироваться от прямого создания объекта
 */
class CreationalPatternsController extends Controller
{
	public function abstractFactory(): View|Factory
	{
		$furnitureFactory = match (request('type')) {
			'modern' => new ModernFurnitureFactory(),
			'victorian' => new VictorianFurnitureFactory(),
			'ardeko' => new ArdekoFurnitureFactory(),
			default => new ModernFurnitureFactory(),
		};

		Debugbar::addMessage(get_class($furnitureFactory->createChair()));
		Debugbar::addMessage(get_class($furnitureFactory->createSofa()));
		Debugbar::addMessage(get_class($furnitureFactory->createTable()));
		
		return view('welcome');
	}
}
