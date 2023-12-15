<?php

namespace App\DesignPaterns\Behavioral\TemplateMethod;

use Barryvdh\Debugbar\Facades\Debugbar;


class ConcreteTemplateMethodClassA extends TemplateMethodClass
{

	protected function requiredOperations1(): void
	{
		Debugbar::addMessage(class_basename(static::class) . ' говорит: Реализованная операция 1');
	}
	
	
	protected function requiredOperation2(): void
	{
		Debugbar::addMessage(class_basename(static::class) . ' говорит: Реализованная операция 2');
	}

}
