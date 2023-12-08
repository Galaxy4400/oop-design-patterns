<?php

namespace App\DesignPaterns\Creational\Multiton;

trait MultitonTrait
{
	private static $instances = [];

	protected function __construct()
	{
	}

	protected function __clone()
	{
	}

	public static function getInstance(string $key): static
	{
		return static::$instances[$key] ?? static::$instances[$key] = new static();
	}
}
