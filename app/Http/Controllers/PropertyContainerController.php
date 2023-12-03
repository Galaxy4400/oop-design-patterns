<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesignPaterns\Fundamental\PropertyContainer\ObjectClass;

class PropertyContainerController extends Controller
{
	public function __invoke()
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
}
