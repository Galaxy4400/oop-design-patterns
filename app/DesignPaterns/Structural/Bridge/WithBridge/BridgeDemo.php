<?php

namespace App\DesignPaterns\Structural\Bridge\WithBridge;

use App\DesignPaterns\Structural\Bridge\Entities\Category;
use App\DesignPaterns\Structural\Bridge\Entities\Client;
use App\DesignPaterns\Structural\Bridge\Entities\Product;
use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Abstraction\WidgetBigAbstraction;
use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Abstraction\WidgetMiddleAbstraction;
use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Abstraction\WidgetSmallAbstraction;
use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations\CategoryWidgetRealization;
use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations\ClientWidgetRealization;
use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations\ProductWidgetRealization;

class BridgeDemo
{
	public function run(): void
	{
		$productRealization = new ProductWidgetRealization(new Product());
		$categoryRealization = new CategoryWidgetRealization(new Category());
		$clientRealisation = new ClientWidgetRealization(new Client());

		$views = [
			new WidgetBigAbstraction(),
			new WidgetMiddleAbstraction(),
			new WidgetSmallAbstraction(),
		];

		foreach ($views as $view) {
			$view->run($productRealization);
			$view->run($categoryRealization);
			$view->run($clientRealisation);
		}
	}
}
