<?php

namespace App\DesignPaterns\Structural\Composite;

use App\DesignPaterns\Structural\Composite\Classes\ObjectsFactory;
use Barryvdh\Debugbar\Facades\Debugbar;

class OrderPriceComposite
{
	private ObjectsFactory $factory;

	private int $ingredientCount = 10;
	private array $ingredients = [];

	private int $productCount = 5;
	private array $products = [];

	private int $orderCount = 2;
	private array $orders = [];


	public function __construct()
	{
		$this->factory = new ObjectsFactory();
	}


	public function run(): void
	{
		$this->initObjects();

		$this->calcPrice();
	}


	private function initObjects(): void
	{
		$this->ingredients = $this->factory->createIngredients($this->ingredientCount);
		$this->products = $this->factory->createProducts($this->productCount, $this->ingredients);
		$this->orders = $this->factory->createOrders($this->orderCount, $this->products);
	}


	private function calcPrice(): void
	{
		$result = [];

		foreach ($this->orders as $order) {
			$result[] = [
				'order_id' => $order->id,
				'order_price' => $order->calcPrice(),
			];
		}

		Debugbar::addMessage($result);
		Debugbar::addMessage($this->orders);
	}
	
}
