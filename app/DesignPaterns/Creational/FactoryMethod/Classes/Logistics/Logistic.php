<?php

namespace App\DesignPaterns\Creational\FactoryMethod\Classes\Logistics;

use App\DesignPaterns\Creational\FactoryMethod\Contracts\TransportContract;
use Barryvdh\Debugbar\Facades\Debugbar;

abstract class Logistic
{
	protected TransportContract $transport;


	public function __construct()
	{
		$this->transport = $this->createTransport();
	}


	abstract public function createTransport(): TransportContract;


	public function planDelivery()
	{
		Debugbar::addMessage('План доставки грузов ' . static::class);

		$this->transport->deliver();
	}


}
