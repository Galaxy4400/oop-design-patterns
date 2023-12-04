<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use App\DesignPaterns\Fundamental\Delegation\AppMessenger;
use App\DesignPaterns\Fundamental\EventChannel\EventChanaleProgramm;
use App\DesignPaterns\Fundamental\PropertyContainer\ObjectClass;


class FundamentalPatternsController extends Controller
{

	public function propertyContainer(): View|Factory
	{
		$object = new ObjectClass();
		dump($object);
		
		$object->addProperty('prop_1', 'string');
		$object->addProperty('prop_2', 123);
		dump($object);
		
		$object->setProperty('prop_1', 'other');
		dump($object);
		
		$object->removeProperty('prop_1');
		dump($object);
		
		$object->removeProperties();
		dump($object);

		return view('welcome');
	}


	public function delegation(): View|Factory
	{
		$messenger = new AppMessenger();
		dump($messenger->info());
		
		$messenger->toSms();
		dump($messenger->info());
		
		return view('welcome');
	}


	public function eventChanale(): View|Factory
	{
		(new EventChanaleProgramm())->run();

		return view('welcome');
	}

}
