<?php

namespace App\DesignPaterns\Creational\Singleton;


trait SingletonTrait
{
	private static $instance;


	private function __construct()
	{
	}


	private function __clone()
	{
	}


	public static function getInstance(): static
	{
		return static::$instance ?? static::$instance = new static();
	}
}
