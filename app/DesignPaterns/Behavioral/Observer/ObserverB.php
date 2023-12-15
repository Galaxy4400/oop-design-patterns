<?php

namespace App\DesignPaterns\Behavioral\Observer;

use Barryvdh\Debugbar\Facades\Debugbar;
use SplSubject;
use SplObserver;


class ObserverB implements SplObserver
{
	public function update(SplSubject $subject): void
	{
		if ($subject->state < 6) {
			Debugbar::addMessage(class_basename(static::class) . ' поймал событие!');
		}
	}
}
