<?php

namespace App\DesignPaterns\Structural\Adapter\Service;

use Barryvdh\Debugbar\Facades\Debugbar;

class SlackApi
{
	public function __construct(
		private string $login,
		private string $apiKey,
	) {
	}


	public function logIn(): void
	{
		Debugbar::addMessage("{$this->login} вошел в учётную запись slack");
	}
	
	
	public function sendMessage(string $chatId, string $message): void
	{
		Debugbar::addMessage("{$this->login} разместил слещующее сообщение в чате {$chatId}");
		Debugbar::addMessage("Сообщение: {$message}");
	}

}
