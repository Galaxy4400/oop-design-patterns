<?php

namespace App\DesignPaterns\Behavioral\Strategy\Strategies;

use App\DesignPaterns\Behavioral\Strategy\Strategies\PathStrategyContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class CarStrategy implements PathStrategyContract
{
	public function getPath(): array
	{
		Debugbar::addMessage('Построение автомобильного маршрута');

		return [1, 5, 10];
	}
}
