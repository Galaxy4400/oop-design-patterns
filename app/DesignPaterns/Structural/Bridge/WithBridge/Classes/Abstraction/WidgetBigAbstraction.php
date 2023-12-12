<?php

namespace App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Abstraction;

use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations\Contracts\WidgetRealizationContract;


class WidgetBigAbstraction extends WidgetAbstract
{

	public function run(WidgetRealizationContract $realization): void
	{
		$this->setRealization($realization);

		$this->viewLogic($this->getViewData());
	}


	private function getViewData(): array
	{
		$id = $this->getRealization()->getId();
		$fullTitle = $this->getFullTitle();
		$description = $this->getRealization()->getDescription();

		return compact('id', 'fullTitle', 'description');
	}


	private function getFullTitle(): string
	{
		return $this->getRealization()->getId() . '::::' . $this->getRealization()->getTitle();
	}

}
