<?php

namespace App\DesignPaterns\Structural\Adapter;

use App\DesignPaterns\Structural\Adapter\Contracts\NotificationContract;

class AppNotification
{
	public static function note(NotificationContract $notification): void
	{
		$notification->send('Веб-сайт не работает!', 'Наш веб-сайт не отвечает. Позвоните администраторам и сообщите об этом!');
	}
}
