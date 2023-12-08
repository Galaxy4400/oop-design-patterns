<?php

namespace App\DesignPaterns\Creational\Multiton;

use App\DesignPaterns\Creational\Multiton\MultitonClass;


class MultitonClassChild extends MultitonClass
{
	protected static $instances = [];
}
