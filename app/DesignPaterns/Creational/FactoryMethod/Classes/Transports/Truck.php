<?php

namespace App\DesignPaterns\Creational\FactoryMethod\Classes\Transports;

use App\DesignPaterns\Creational\FactoryMethod\Contracts\TransportContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class Truck implements TransportContract
{
	public function deliver(): void
	{
		Debugbar::addMessage('Доставка с помощью ' . __CLASS__);
	}
}
