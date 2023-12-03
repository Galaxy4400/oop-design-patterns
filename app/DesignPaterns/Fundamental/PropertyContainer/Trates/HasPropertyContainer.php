<?php

namespace App\DesignPaterns\Fundamental\PropertyContainer\Trates;

use InvalidArgumentException;

trait HasPropertyContainer
{
	public array $propertyContainer = [];


	public function addProperty(string $property, mixed $value): void
	{
		$this->propertyContainer[$property] = $value;
	}


	public function getProperty(string $property): mixed
	{
		return $this->propertyContainer[$property] ?? null;
	}


	public function getPropertyNames(): array
	{
		return array_keys($this->propertyContainer);
	}


	public function removeProperty(string $property): void
	{
		unset($this->propertyContainer[$property]);
	}


	public function removeProperties(): void
	{
		$this->propertyContainer = [];
	}


	public function setProperty(string $property, mixed $value): void
	{
		if (!array_key_exists($property, $this->propertyContainer)) {
			throw new InvalidArgumentException("Property [{$property}] not found");
		}

		$this->propertyContainer[$property] = $value;
	}

}
