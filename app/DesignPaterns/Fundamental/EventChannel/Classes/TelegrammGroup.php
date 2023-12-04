<?php

namespace App\DesignPaterns\Fundamental\EventChannel\Classes;

use App\DesignPaterns\Fundamental\EventChannel\Contracts\EventChannelContract;
use App\DesignPaterns\Fundamental\EventChannel\Contracts\PublisherContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class TelegrammGroup implements PublisherContract
{
	private string $topic;

	private EventChannelContract $channel;


	public function __construct(string $topic, EventChannelContract $channel)
	{
		$this->topic = $topic;
		$this->channel = $channel;
	}


	public function publish(string $data): void
	{
		Debugbar::addMessage("Новая публикация по теме [{$this->topic}]");
		
		$this->channel->publish($this->topic, $data);
	}

}
