<?php

namespace App\DesignPaterns\Creational\Builder\Classes;

class CarManual
{
	protected string $seatsManual;

	protected string $engineManual;

	protected string $tripComputerManual;

	protected string $gpsManual;


	public function setSeatsManual(string $value)
	{
		$this->seatsManual = $value;
	}
	
	
	public function setEngineManual(string $value)
	{
		$this->engineManual = $value;
	}
	

	public function setTripComputerManual(string $value)
	{
		$this->tripComputerManual = $value;
	}
	
	
	public function setGpsManual(string $value)
	{
		$this->gpsManual = $value;
	}


	public function getSeatsManual()
	{
		return $this->seatsManual;
	}
	
	
	public function getEngineManual()
	{
		return $this->engineManual;
	}
	

	public function getTripComputerManual()
	{
		return $this->tripComputerManual;
	}
	
	
	public function getGpsManual()
	{
		return $this->gpsManual;
	}

}
