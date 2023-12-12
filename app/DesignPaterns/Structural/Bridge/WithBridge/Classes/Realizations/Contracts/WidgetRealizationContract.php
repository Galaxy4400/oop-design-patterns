<?php

namespace App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations\Contracts;

interface WidgetRealizationContract
{
	public function getId(): int;

	public function getTitle(): string;

	public function getDescription(): string;
}
