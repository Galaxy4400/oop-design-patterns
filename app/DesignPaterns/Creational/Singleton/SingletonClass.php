<?php

namespace App\DesignPaterns\Creational\Singleton;

use Barryvdh\Debugbar\Facades\Debugbar;
use App\DesignPaterns\Creational\Singleton\SingletonTrait;


class SingletonClass
{
	use SingletonTrait;

	public function getInfo()
	{
		Debugbar::addMessage(__CLASS__);
	}
}
