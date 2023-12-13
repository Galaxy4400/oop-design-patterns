<?php

namespace App\DesignPaterns\Structural\Composite\Traits;

use Barryvdh\Debugbar\Facades\Debugbar;
use App\DesignPaterns\Structural\Composite\Contracts\CompositeItemContract;

trait CompositeTrait
{
	private array $compositeItems = [];


	public function setChildItem(CompositeItemContract $item): void
	{
		$this->compositeItems[] = $item;
	}


	public function calcPrice(): float
	{
		if ($this->price) {
			Debugbar::addMessage("[{$this->id}] {$this->type}::{$this->name} = {$this->price}");
			
			return $this->price;
		}

		$this->price = 0;

		foreach ($this->compositeItems as $compositeItem) {
			$this->price += $compositeItem->calcPrice();
		}

		Debugbar::addMessage("[{$this->id}] {$this->type}::{$this->name} = {$this->price}");

		Debugbar::addMessage('');

		return $this->price;
	}
}
