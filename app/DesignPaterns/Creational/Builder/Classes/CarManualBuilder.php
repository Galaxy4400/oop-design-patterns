<?php

namespace App\DesignPaterns\Creational\Builder\Classes;

use App\DesignPaterns\Creational\Builder\Classes\CarManual;
use App\DesignPaterns\Creational\Builder\Contracts\CarBuilderContract;


class CarManualBuilder implements CarBuilderContract
{
	private CarManual $carManual;


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
		$this->carManual = new CarManual();

		return $this;
	}


	public function setSeats(string $value): CarBuilderContract
	{
		$this->carManual->setSeatsManual($value . ' мануал');
		
		return $this;
	}
	
	
	public function setEngine(string $value): CarBuilderContract
	{
		$this->carManual->setEngineManual($value . ' мануал');
		
		return $this;
	}
	
	
	public function setTripComputer(string $value): CarBuilderContract
	{
		$this->carManual->setTripComputerManual($value . ' мануал');
		
		return $this;
	}
	
	
	public function setGps(string $value): CarBuilderContract
	{
		$this->carManual->setGpsManual($value . ' мануал');
		
		return $this;
	}


	public function getResult(): CarManual
	{
		return $this->carManual;
	}
}

