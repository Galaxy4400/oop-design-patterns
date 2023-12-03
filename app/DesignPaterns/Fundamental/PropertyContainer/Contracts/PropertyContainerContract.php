<?php

namespace App\DesignPaterns\Fundamental\PropertyContainer\Contracts;

interface PropertyContainerContract
{
	public function addProperty(string $property, mixed $value): void;

	public function getProperty(string $property): mixed;

	public function getPropertyNames(): array;

	public function removeProperty(string $property): void;

	public function removeProperties(): void;

	public function setProperty(string $property, mixed $value): void;
}
