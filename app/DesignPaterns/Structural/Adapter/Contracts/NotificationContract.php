<?php

namespace App\DesignPaterns\Structural\Adapter\Contracts;

interface NotificationContract
{
	public function send(string $title, string $message): bool;
}
