<?php

namespace App\DesignPaterns\Structural\Adapter\Classes;

use App\DesignPaterns\Structural\Adapter\Contracts\NotificationContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class EmailNotification implements NotificationContract
{
	private string $adminEmail;


	public function __construct(string $adminEmail)
	{
		$this->adminEmail = $adminEmail;
	}


	public function send(string $title, string $message): bool
	{
		Debugbar::addMessage(__METHOD__);
		Debugbar::addMessage("Email администратора: {$this->adminEmail}");
		Debugbar::addMessage("Заголовок: {$title}");
		Debugbar::addMessage("Сообщение: {$message}");

		return true;
	}
}
