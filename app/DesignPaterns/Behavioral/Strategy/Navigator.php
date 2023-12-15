<?php

namespace App\DesignPaterns\Behavioral\Strategy;

use App\DesignPaterns\Behavioral\Strategy\Strategies\PathStrategyContract;
use App\DesignPaterns\Behavioral\Strategy\Strategies\WalkingStrategy;
use Barryvdh\Debugbar\Facades\Debugbar;

class Navigator
{
	private PathStrategyContract $strategy;


	public function __construct(?PathStrategyContract $strategy = null)
	{
		$this->strategy = $strategy ?: new WalkingStrategy();
	}


	public function setStrategy(PathStrategyContract $strategy): Navigator
	{
		$this->strategy = $strategy;

		return $this;
	}


	public function displayPath(): void
	{
		$coordinates = $this->strategy->getPath();

		Debugbar::addMessage($coordinates);
	}

}
