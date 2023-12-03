<?php

namespace App\DesignPaterns\Fundamental\EventChannel\Contracts;

interface PublisherContract
{
	public function publish(string $data): void;
}
