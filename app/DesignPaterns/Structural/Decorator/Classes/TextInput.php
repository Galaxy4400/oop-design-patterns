<?php

namespace App\DesignPaterns\Structural\Decorator\Classes;

use App\DesignPaterns\Structural\Decorator\Contracts\InputFormatContract;


class TextInput implements InputFormatContract
{
	public function formatText(string $text): string
	{
		return $text;
	}
}
