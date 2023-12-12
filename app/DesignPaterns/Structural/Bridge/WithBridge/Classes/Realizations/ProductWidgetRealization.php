<?php

namespace App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations;

use App\DesignPaterns\Structural\Bridge\Entities\Product;
use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations\Contracts\WidgetRealizationContract;


class ProductWidgetRealization implements WidgetRealizationContract
{

	public function __construct(
		private Product $product,
	) {
	}


	public function getId(): int
	{
		return $this->product->id;
	}


	public function getTitle(): string
	{
		return $this->product->name;
	}


	public function getDescription(): string
	{
		return $this->product->description;
	}

}
