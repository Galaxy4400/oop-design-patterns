<?php

namespace App\DesignPaterns\Structural\Decorator\Contracts;

interface InputFormatContract
{
	public function formatText(string $text): string;
}
