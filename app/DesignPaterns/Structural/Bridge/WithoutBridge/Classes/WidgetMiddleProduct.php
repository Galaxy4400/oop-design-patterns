<?php

namespace App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes;

use App\DesignPaterns\Structural\Bridge\Entities\Product;


class WidgetMiddleProduct extends WidgetAbstract
{

	public function run(Product $product): void
	{
		$viewData = $this->getRealizationLogic($product);

		$this->viewLogic($viewData);
	}


	private function getRealizationLogic(Product $product): array
	{
		$id = $product->id;
		$middleTitle = $product->id . '->' . $product->name;
		$description = $product->description;

		return compact('id', 'middleTitle', 'description');
	}

}
