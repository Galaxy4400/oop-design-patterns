<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use App\DesignPaterns\Fundamental\Delegation\AppMessenger;
use App\DesignPaterns\Fundamental\EventChannel\EventChanaleProgramm;
use App\DesignPaterns\Fundamental\PropertyContainer\ObjectClass;
use Barryvdh\Debugbar\Facades\Debugbar;

class FundamentalPatternsController extends Controller
{

	public function propertyContainer(): View|Factory
	{
		$object = new ObjectClass();
		Debugbar::addMessage($object);
		
		$object->addProperty('prop_1', 'string');
		$object->addProperty('prop_2', 123);
		Debugbar::addMessage($object);
		
		$object->setProperty('prop_1', 'other');
		Debugbar::addMessage($object);
		
		$object->removeProperty('prop_1');
		Debugbar::addMessage($object);
		
		$object->removeProperties();
		Debugbar::addMessage($object);

		return view('welcome');
	}


	public function delegation(): View|Factory
	{
		$messenger = new AppMessenger();
		Debugbar::addMessage($messenger->info());
		
		$messenger->toSms();
		Debugbar::addMessage($messenger->info());
		
		return view('welcome');
	}


	public function eventChanale(): View|Factory
	{
		(new EventChanaleProgramm())->run(); // Одно из проявлений фундаментального шаблона проектирования "Интерфейс". Где экземпляр класса EventChanaleProgramm - это интерфейс, который предоставляет простой способ доступа к некоему сложному функционалу посредством метода run().

		return view('welcome');
	}

}
