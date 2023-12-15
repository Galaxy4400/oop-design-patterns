<?php

namespace App\DesignPaterns\Behavioral\TemplateMethod;

use Barryvdh\Debugbar\Facades\Debugbar;

abstract class TemplateMethodClass
{

	final public function templateMethod(): void
	{
		$this->baseOperation1();
		$this->requiredOperations1();
		$this->baseOperation2();
		$this->hook1();
		$this->requiredOperation2();
		$this->baseOperation3();
		$this->hook2();
	}


	protected function baseOperation1(): void
	{
		Debugbar::addMessage(class_basename(self::class) . ' говорит: Я выполняю основную часть работы');
	}
	
	
	protected function baseOperation2(): void
	{
		Debugbar::addMessage(class_basename(self::class) . ' говорит: Но я позволяю подклассам переопределять некоторые операции');
	}
	
	
	protected function baseOperation3(): void
	{
		Debugbar::addMessage(class_basename(self::class) . ' говорит: Но я все равно выполняю основную часть работы');
	}


	abstract protected function requiredOperations1(): void;

	abstract protected function requiredOperation2(): void;


	protected function hook1(): void
	{
	}

	protected function hook2(): void
	{
	}
}
