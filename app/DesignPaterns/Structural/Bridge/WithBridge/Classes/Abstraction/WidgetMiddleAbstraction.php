<?php

namespace App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Abstraction;

use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations\Contracts\WidgetRealizationContract;


class WidgetMiddleAbstraction extends WidgetAbstract
{

	public function run(WidgetRealizationContract $realization): void
	{
		$this->setRealization($realization);

		$this->viewLogic($this->getViewData());
	}


	private function getViewData(): array
	{
		$id = $this->getRealization()->getId();
		$middleTitle = $this->getMiddleTitle();
		$description = $this->getRealization()->getDescription();

		return compact('id', 'middleTitle', 'description');
	}


	private function getMiddleTitle(): string
	{
		return $this->getRealization()->getId() . '->' . $this->getRealization()->getTitle();
	}

}
