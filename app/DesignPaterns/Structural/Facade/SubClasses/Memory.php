<?php

namespace App\DesignPaterns\Structural\Facade\SubClasses;

use Barryvdh\Debugbar\Facades\Debugbar;

class Memory
{
	const BOOT_ADDRESS = 0x0005;

	public function load(float $position, float $data): void
	{
		Debugbar::addMessage("Загрузка данных {$data} с позиции {$position}");
	}
}
