<?php

namespace App\DesignPaterns\Structural\Adapter\Classes;

use App\DesignPaterns\Structural\Adapter\Contracts\NotificationContract;
use App\DesignPaterns\Structural\Adapter\Service\SlackApi;
use Barryvdh\Debugbar\Facades\Debugbar;

// Это адаптер
class SlackNotification implements NotificationContract
{
	public function __construct(
		private SlackApi $slack, 
		private string $chatId
	) {
	}


	public function send(string $title, string $message): bool
	{
		Debugbar::addMessage(__METHOD__);

		$this->slack->logIn();

		$this->slack->sendMessage($this->chatId, $message);

		return true;
	}
}
