<?php

namespace App\DesignPaterns\Creational\Builder\Classes;

use App\DesignPaterns\Creational\Builder\Classes\Car;
use App\DesignPaterns\Creational\Builder\Contracts\CarBuilderContract;


class CarBuilder implements CarBuilderContract
{
	private Car $car;


	public function __construct()
	{
		$this->reset();
	}


	public static function new()
	{
		return new static();
	}


	public function reset(): CarBuilderContract
	{
		$this->car = new Car();

		return $this;
	}


	public function setSeats(string $value): CarBuilderContract
	{
		$this->car->setSeats($value);
		
		return $this;
	}
	
	
	public function setEngine(string $value): CarBuilderContract
	{
		$this->car->setEngine($value);
		
		return $this;
	}
	
	
	public function setTripComputer(string $value): CarBuilderContract
	{
		$this->car->setTripComputer($value);
		
		return $this;
	}
	
	
	public function setGps(string $value): CarBuilderContract
	{
		$this->car->setGps($value);
		
		return $this;
	}


	public function getResult(): Car
	{
		return $this->car;
	}
}

