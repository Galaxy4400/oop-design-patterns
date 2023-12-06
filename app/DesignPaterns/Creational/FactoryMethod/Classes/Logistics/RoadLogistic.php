<?php

namespace App\DesignPaterns\Creational\FactoryMethod\Classes\Logistics;

use App\DesignPaterns\Creational\FactoryMethod\Classes\Transports\Truck;
use App\DesignPaterns\Creational\FactoryMethod\Contracts\TransportContract;

class RoadLogistic extends Logistic
{
	public function createTransport(): TransportContract
	{
		return new Truck();
	}
}
