<?php

namespace App\DesignPaterns\Creational\Builder\Classes;

use App\DesignPaterns\Creational\Builder\Contracts\CarBuilderContract;

class CarBuilderManager
{
	protected CarBuilderContract $builder;


	public function __construct(CarBuilderContract $builder)
	{
		$this->setBuilder($builder);
	}


	public static function make(CarBuilderContract $builder): CarBuilderManager
	{
		return new static($builder);
	}


	public function setBuilder(CarBuilderContract $builder): CarBuilderManager
	{
		$this->builder = $builder;

		return $this;
	}


	public function constructSportCar()
	{
		return $this->builder
			->reset()
			->setSeats('Спортивные кресла')
			->setEngine('Спортивный двигатель')
			->setTripComputer('Крутая электроника')
			->setGps('Крутой гпс')
			->getResult();
	}


	public function constructJiguli()
	{
		return $this->builder
			->reset()
			->setSeats('Деревянные кресла')
			->setEngine('Пластиковый мотор')
			->getResult();
	}
}
