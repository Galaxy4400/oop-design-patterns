<?php

namespace App\DesignPaterns\Creational\Builder\Classes;

class Car
{
	protected string $seats;

	protected string $engine;

	protected string $tripComputer;

	protected string $gps;


	public function setSeats(string $value)
	{
		$this->seats = $value;
	}
	
	
	public function setEngine(string $value)
	{
		$this->engine = $value;
	}
	

	public function setTripComputer(string $value)
	{
		$this->tripComputer = $value;
	}
	
	
	public function setGps(string $value)
	{
		$this->gps = $value;
	}


	public function getSeats()
	{
		return $this->seats;
	}
	
	
	public function getEngine()
	{
		return $this->engine;
	}
	

	public function getTripComputer()
	{
		return $this->tripComputer;
	}
	
	
	public function getGps()
	{
		return $this->gps;
	}

}
