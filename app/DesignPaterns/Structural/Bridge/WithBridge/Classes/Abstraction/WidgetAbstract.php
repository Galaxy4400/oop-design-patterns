<?php

namespace App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Abstraction;

use Barryvdh\Debugbar\Facades\Debugbar;
use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations\Contracts\WidgetRealizationContract;


class WidgetAbstract
{
	protected WidgetRealizationContract $realization;


	public function getRealization(): WidgetRealizationContract
	{
		return $this->realization;
	}


	public function setRealization(WidgetRealizationContract $realization)
	{
		$this->realization = $realization;
	}


	protected function viewLogic(mixed $viewData): void
	{
		$method = class_basename(static::class) . '::' . __FUNCTION__;

		Debugbar::addMessage($method);
		Debugbar::addMessage($viewData);
	}
}
