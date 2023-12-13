<?php

namespace App\DesignPaterns\Structural\Decorator\Classes;

use App\DesignPaterns\Structural\Decorator\Contracts\InputFormatContract;


class TextFormat implements InputFormatContract
{
	public function __construct(
		protected InputFormatContract $inputFormat,
	) {
	}


	public function formatText(string $text): string
	{
		return $this->inputFormat->formatText($text);
	}
}
