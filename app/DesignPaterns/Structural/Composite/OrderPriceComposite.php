<?php

namespace App\DesignPaterns\Structural\Composite;

use App\DesignPaterns\Structural\Composite\Classes\ObjectsFactory;

class OrderPriceComposite
{
	private int $ingredientCount = 10;
	private array $ingredients = [];

	private int $productCount = 10;
	private array $products = [];

	private int $orderCount = 10;
	private array $orders = [];


	public function __construct(
		private ObjectsFactory $factory
	) {
	}


	public function run(): void
	{
		$this->initObjects();

		$this->calcPrice();
	}


	private function initObjects(): void
	{

	}


	private function calcPrice(): float
	{
		return 1;
	}
	
}
