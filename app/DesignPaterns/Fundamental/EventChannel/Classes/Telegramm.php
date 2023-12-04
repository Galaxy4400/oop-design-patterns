<?php

namespace App\DesignPaterns\Fundamental\EventChannel\Classes;

use App\DesignPaterns\Fundamental\EventChannel\Contracts\SubscriberContract;
use App\DesignPaterns\Fundamental\EventChannel\Contracts\EventChannelContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class Telegramm implements EventChannelContract
{
	protected array $topics = [];


	public function subscribe(string $topic, SubscriberContract $subscriber): void
	{
		$this->topics[$topic][] = $subscriber;

		Debugbar::addMessage("{$subscriber->getName()} подписан на [{$topic}]");
	}


	public function publish(string $topic, string $data): void
	{
		if (empty($this->topics[$topic])) {
			return;
		}

		foreach ($this->topics[$topic] as $subscriber) {
			$subscriber->notify($data);
		}
	}
	
}
