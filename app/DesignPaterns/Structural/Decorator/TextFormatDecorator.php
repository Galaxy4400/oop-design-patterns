<?php

namespace App\DesignPaterns\Structural\Decorator;

use App\DesignPaterns\Structural\Decorator\Contracts\InputFormatContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class TextFormatDecorator
{
	public function run(InputFormatContract $format, string $text): void
	{
		Debugbar::addMessage($format->formatText($text));
	}
}
