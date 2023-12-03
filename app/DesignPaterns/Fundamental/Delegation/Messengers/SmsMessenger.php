<?php

namespace App\DesignPaterns\Fundamental\Delegation\Messengers;

use App\DesignPaterns\Fundamental\Delegation\Contracts\MessengerContract;


class SmsMessenger extends Messenger implements MessengerContract
{
	public function send(): bool
	{
		echo('Send by ' . __METHOD__);

		return parent::send();
	}
}
