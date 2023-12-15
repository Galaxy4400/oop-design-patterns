<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\DesignPaterns\Behavioral\Observer\Subject;
use App\DesignPaterns\Behavioral\Observer\ObserverA;
use App\DesignPaterns\Behavioral\Observer\ObserverB;
use App\DesignPaterns\Behavioral\Strategy\Navigator;
use App\DesignPaterns\Behavioral\Strategy\Strategies\CarStrategy;
use App\DesignPaterns\Behavioral\Strategy\Strategies\BicycleStrategy;
use App\DesignPaterns\Behavioral\TemplateMethod\ConcreteTemplateMethodClassA;
use App\DesignPaterns\Behavioral\TemplateMethod\ConcreteTemplateMethodClassB;

/**
 * Поведенческий шаблон проектирования - это никей алгоритм который определяет поведение объектов в различных ситуациях, а так же позволяет обеспечить взаимодействие объектов без жесткой связи друг с другом.
 */
class BehavioralPatternsController extends Controller
{

	public function strategy(): View|Factory
	{
		$navigator = new Navigator();

		$navigator->displayPath();

		$navigator->setStrategy(new BicycleStrategy())->displayPath();

		$navigator->setStrategy(new CarStrategy())->displayPath();
		
		return view('welcome');
	}
	
	
	public function observer(): View|Factory
	{
		$subject = new Subject();

		$subject->attach(new ObserverA());
		$subject->attach(new ObserverB());

		$subject->someBusinessLogic();

		return view('welcome');
	}
	
	
	public function templateMethod(): View|Factory
	{
		(new ConcreteTemplateMethodClassA())->templateMethod();
		
		Debugbar::addMessage('');

		(new ConcreteTemplateMethodClassB())->templateMethod();
		
		return view('welcome');
	}

}
