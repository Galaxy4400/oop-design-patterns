<?php

namespace App\DesignPaterns\Structural\Facade\SubClasses;

use Barryvdh\Debugbar\Facades\Debugbar;

class CPU
{

	public function freeze(): void
	{
		Debugbar::addMessage('Остановка работы CPU');
	}


	public function jump($position): void
	{
		Debugbar::addMessage("Переход к {$position}");
	}


	public function execute(): void
	{
		Debugbar::addMessage('Выполнение операции CPU');
	}

}
