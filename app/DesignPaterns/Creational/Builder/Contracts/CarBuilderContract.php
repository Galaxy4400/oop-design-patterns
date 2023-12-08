<?php

namespace App\DesignPaterns\Creational\Builder\Contracts;

interface CarBuilderContract
{
	public function reset(): CarBuilderContract;

	public function setSeats(string $value): CarBuilderContract;

	public function setEngine(string $value): CarBuilderContract;

	public function setTripComputer(string $value): CarBuilderContract;

	public function setGPS(string $value): CarBuilderContract;

	public function getResult(): mixed;
}
