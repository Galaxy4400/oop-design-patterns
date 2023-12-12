<?php

namespace App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes;

use App\DesignPaterns\Structural\Bridge\Entities\Product;


class WidgetSmallProduct extends WidgetAbstract
{

	public function run(Product $product): void
	{
		$viewData = $this->getRealizationLogic($product);

		$this->viewLogic($viewData);
	}


	private function getRealizationLogic(Product $product): array
	{
		$id = $product->id;
		$smallTitle = str($product->name)->limit(5)->value();
		$description = $product->description;

		return compact('id', 'smallTitle', 'description');
	}

}
