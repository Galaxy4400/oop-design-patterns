<?php

namespace App\DesignPaterns\Behavioral\Strategy\Strategies;

use App\DesignPaterns\Behavioral\Strategy\Strategies\PathStrategyContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class BicycleStrategy implements PathStrategyContract
{
	public function getPath(): array
	{
		Debugbar::addMessage('Построение велосипедного маршрута');

		return [1, 3, 5, 7, 9];
	}
}
