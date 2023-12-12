<?php

namespace App\DesignPaterns\Structural\Composite\Models;

use Illuminate\Database\Eloquent\Model;
use App\DesignPaterns\Structural\Composite\Traits\CompositeTrait;
use App\DesignPaterns\Structural\Composite\Contracts\CompositeContract;

class Product extends Model implements CompositeContract
{
	use CompositeTrait;

	public string $type = 'Заказ';
}
