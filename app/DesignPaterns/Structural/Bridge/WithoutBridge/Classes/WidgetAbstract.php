<?php

namespace App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes;

use Barryvdh\Debugbar\Facades\Debugbar;

class WidgetAbstract
{
	protected function viewLogic($viewData): void
	{
		$method = class_basename(static::class) . '::' . __FUNCTION__;

		Debugbar::addMessage($method);
		Debugbar::addMessage($viewData);
	}
}
