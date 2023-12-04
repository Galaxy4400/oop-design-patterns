<?php

namespace App\DesignPaterns\Fundamental\EventChannel\Contracts;

use App\DesignPaterns\Fundamental\EventChannel\Contracts\SubscriberContract;


interface EventChannelContract
{
	public function subscribe(string $topic, SubscriberContract $subscriber): void;
	
	public function publish(string $topic, string $data): void;
}
