<?php

namespace App\DesignPaterns\Structural\Composite\Classes;

use App\DesignPaterns\Structural\Composite\Models\Ingredient;
use App\DesignPaterns\Structural\Composite\Models\Order;
use App\DesignPaterns\Structural\Composite\Models\Product;
use Illuminate\Support\Arr;

class ObjectsFactory
{
	public function createIngredients(int $count): array
	{
		$ingredients = [];

		for ($i=0; $i < $count; $i++) { 
			$ingredients[] = $this->createIngredient($i);
		}

		return $ingredients;
	}


	public function createIngredient(int $id): Ingredient
	{
		$ingredient = new Ingredient();

		$ingredient->id = $id;
		$ingredient->name = fake()->word();

		return $ingredient;
	}


	public function createProducts(int $count, array $ingredients): array
	{
		$products = [];

		for ($i=0; $i < $count; $i++) { 
			$productIngredients = Arr::random($ingredients, rand(2, 3));

			$products[] = $this->createProduct($i, $productIngredients);
		}

		return $products;
	}


	public function createProduct(int $id, array $ingredients): Product
	{
		$product = new Product();

		$product->id = $id;
		$product->name = fake()->words();

		foreach ($ingredients as $ingredient) {
			$product->setChildItem($ingredient);
		}

		return $product;
	}


	public function createOrders(int $count, array $products): array
	{
		$orders = [];

		for ($i=0; $i < $count; $i++) { 
			$orderProducts = Arr::random($products, rand(1, 3));

			$orders[] = $this->createOrder($i, $orderProducts);
		}

		return $orders;
	}


	public function createOrder(int $id, array $products): Order
	{
		$order = new Order();

		$order->id = $id;
		$order->name = "order{$id}";

		foreach ($products as $product) {
			$order->setChildItem($product);
		}

		return $order;
	}
}
