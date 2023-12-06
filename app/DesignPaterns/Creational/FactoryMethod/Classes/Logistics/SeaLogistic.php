<?php

namespace App\DesignPaterns\Creational\FactoryMethod\Classes\Logistics;

use App\DesignPaterns\Creational\FactoryMethod\Classes\Transports\Ship;
use App\DesignPaterns\Creational\FactoryMethod\Contracts\TransportContract;

class SeaLogistic extends Logistic
{
	public function createTransport(): TransportContract
	{
		return new Ship();
	}
}
