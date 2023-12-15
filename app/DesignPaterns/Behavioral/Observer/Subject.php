<?php

namespace App\DesignPaterns\Behavioral\Observer;

use SplSubject;
use SplObserver;
use SplObjectStorage;
use Barryvdh\Debugbar\Facades\Debugbar;


class Subject implements SplSubject
{
	public int $state;

	private SplObjectStorage $observers;


	public function __construct()
	{
		$this->observers = new SplObjectStorage();
	}


	public function attach(SplObserver $observer): void
	{
		$this->observers->attach($observer);
	}


	public function detach(SplObserver $observer): void
	{
		$this->observers->detach($observer);
	}


	public function notify(): void
	{
		foreach ($this->observers as $observer) {
			$observer->update($this);
		}
	}

	
	public function someBusinessLogic(): void
	{
		$this->state = rand(1, 10);

		Debugbar::addMessage('Статус объекта: ' . $this->state);

		$this->notify();
	}

}

