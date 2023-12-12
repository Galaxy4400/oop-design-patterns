<?php

namespace App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Abstraction;

use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations\Contracts\WidgetRealizationContract;


class WidgetSmallAbstraction extends WidgetAbstract
{

	public function run(WidgetRealizationContract $realization): void
	{
		$this->setRealization($realization);

		$this->viewLogic($this->getViewData());
	}


	private function getViewData(): array
	{
		$id = $this->getRealization()->getId();
		$smallTitle = $this->getSmallTitle();

		return compact('id', 'smallTitle');
	}


	private function getSmallTitle(): string
	{
		return str($this->getRealization()->getTitle())->limit(5)->value();
	}

}
