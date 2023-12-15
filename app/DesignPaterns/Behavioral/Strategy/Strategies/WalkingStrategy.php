<?php

namespace App\DesignPaterns\Behavioral\Strategy\Strategies;

use App\DesignPaterns\Behavioral\Strategy\Strategies\PathStrategyContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class WalkingStrategy implements PathStrategyContract
{
	public function getPath(): array
	{
		Debugbar::addMessage('Построение пешеходного маршрута');

		return [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	}
}
