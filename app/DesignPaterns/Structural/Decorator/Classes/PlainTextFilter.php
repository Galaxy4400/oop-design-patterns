<?php

namespace App\DesignPaterns\Structural\Decorator\Classes;

class PlainTextFilter extends TextFormat
{
	public function formatText(string $text): string
	{
		$text = parent::formatText($text);

		return strip_tags($text);
	}
}
