<?php

namespace App\DesignPaterns\Structural\Composite\Contracts;

interface CompositeContract extends CompositeItemContract
{
	public function setChildItem(CompositeItemContract $item): void;
}
