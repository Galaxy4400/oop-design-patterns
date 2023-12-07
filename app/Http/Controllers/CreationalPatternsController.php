<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\DesignPaterns\Creational\FactoryMethod\Classes\Logistics\SeaLogistic;
use App\DesignPaterns\Creational\FactoryMethod\Classes\Logistics\RoadLogistic;
use App\DesignPaterns\Creational\AbstractFactory\Fabrics\ArdekoFurnitureFactory;
use App\DesignPaterns\Creational\AbstractFactory\Fabrics\ModernFurnitureFactory;
use App\DesignPaterns\Creational\AbstractFactory\Fabrics\VictorianFurnitureFactory;


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
		
		Debugbar::addMessage($furnitureFactory::class);

		Debugbar::addMessage(get_class($furnitureFactory->createChair()));
		Debugbar::addMessage(get_class($furnitureFactory->createSofa()));
		Debugbar::addMessage(get_class($furnitureFactory->createTable()));
		
		return view('welcome');
	}
	
	
	public function factoryMethod(): View|Factory
	{
		$roadLogistic = new RoadLogistic();
		Debugbar::addMessage($roadLogistic->planDelivery());

		$seaLogistic = new SeaLogistic();
		Debugbar::addMessage($seaLogistic->planDelivery());

		return view('welcome');
	}
}
