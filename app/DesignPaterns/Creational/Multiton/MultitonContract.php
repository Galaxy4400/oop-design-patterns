<?php

namespace App\DesignPaterns\Creational\Multiton;

interface MultitonContract
{
	public static function getInstance(string $key): static;
}
