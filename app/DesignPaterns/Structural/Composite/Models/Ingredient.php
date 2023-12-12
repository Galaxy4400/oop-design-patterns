<?php

namespace App\DesignPaterns\Structural\Composite\Models;

use App\DesignPaterns\Structural\Composite\Contracts\CompositeItemContract;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Ingredient extends Model implements CompositeItemContract
{
	public string $type = 'Ингредиент';


	public function calcPrice(): float
	{
		if ($this->price) {
			Debugbar::addMessage("[{$this->id}] {$this->type}::{$this->name} = {$this->price}");
			
			return $this->price;
		}
		
		$this->price = Arr::random([10, 20, 30, 40, 50]);
		
		Debugbar::addMessage("[{$this->id}] {$this->type}::{$this->name} = {$this->price}");

		return $this->price;
	}
}
