<?php

namespace App\DesignPaterns\Fundamental\EventChannel\Contracts;

interface SubscriberContract
{
	public function notify(string $data): void;
}
