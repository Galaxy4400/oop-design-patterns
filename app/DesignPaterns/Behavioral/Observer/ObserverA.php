<?php

namespace App\DesignPaterns\Behavioral\Observer;

use Barryvdh\Debugbar\Facades\Debugbar;
use SplSubject;
use SplObserver;


class ObserverA implements SplObserver
{
	public function update(SplSubject $subject): void
	{
		if ($subject->state > 5) {
			Debugbar::addMessage(class_basename(static::class) . ' поймал событие!');
		}
	}
}
