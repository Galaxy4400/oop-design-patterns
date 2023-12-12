<?php

namespace App\DesignPaterns\Structural\Composite\Models;

use Illuminate\Database\Eloquent\Model;
use App\DesignPaterns\Structural\Composite\Contracts\CompositeContract;
use App\DesignPaterns\Structural\Composite\Traits\CompositeTrait;

class Order extends Model implements CompositeContract
{
	use CompositeTrait;

	public string $type = 'Заказ';
}
