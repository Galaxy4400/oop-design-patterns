<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\DesignPaterns\Creational\Multiton\MultitonClass;
use App\DesignPaterns\Creational\Singleton\SingletonClass;
use App\DesignPaterns\Creational\Builder\Classes\CarBuilder;
use App\DesignPaterns\Creational\Multiton\MultitonClassChild;
use App\DesignPaterns\Creational\SimpleFactory\SomeClassFactory;
use App\DesignPaterns\Creational\StaticFactory\FurnitureFactory;
use App\DesignPaterns\Creational\Builder\Classes\CarManualBuilder;
use App\DesignPaterns\Creational\Builder\Classes\CarBuilderManager;
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


	public function staticFactory(): View|Factory
	{
		$furnitureFactory = FurnitureFactory::build();
		
		Debugbar::addMessage($furnitureFactory::class);

		return view('welcome');
	}


	public function simpleFactory(): View|Factory
	{
		$someClassFactory = new SomeClassFactory();

		$someClassObject = $someClassFactory->build();
		
		Debugbar::addMessage($someClassObject::class);

		return view('welcome');
	}


	public function singleton(): View|Factory
	{
		Debugbar::addMessage(SingletonClass::getInstance());
		Debugbar::addMessage(SingletonClass::getInstance());
		
		return view('welcome');
	}


	public function multiton(): View|Factory
	{
		Debugbar::addMessage(MultitonClass::getInstance('mysql'));
		Debugbar::addMessage(MultitonClass::getInstance('mongo'));
		Debugbar::addMessage(MultitonClass::getInstance('mysql'));
		Debugbar::addMessage(MultitonClass::getInstance('mongo'));
		Debugbar::addMessage(MultitonClassChild::getInstance('mongo'));
		Debugbar::addMessage(MultitonClassChild::getInstance('mongo'));
		
		return view('welcome');
	}
	
	
	public function builder(): View|Factory
	{
		$car = CarBuilder::new()
			->setEngine('Установили двигатель')
			->setGps('Установили gps')
			->getResult();

		Debugbar::addMessage($car);
		
		// Дополнительная реализасия с директором

		$carBuilderManager = CarBuilderManager::make(new CarBuilder());
		Debugbar::addMessage($carBuilderManager->constructSportCar());
		Debugbar::addMessage($carBuilderManager->constructJiguli());

		$carManualBuilderManager = CarBuilderManager::make(new CarManualBuilder());
		Debugbar::addMessage($carManualBuilderManager->constructSportCar());
		Debugbar::addMessage($carManualBuilderManager->constructJiguli());
		
		return view('welcome');
	}
	
}
