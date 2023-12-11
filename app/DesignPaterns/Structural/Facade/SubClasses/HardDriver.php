<?php

namespace App\DesignPaterns\Structural\Facade\SubClasses;

use Barryvdh\Debugbar\Facades\Debugbar;

class HardDriver
{
	const BOOT_SECTOR = 0x001;
	const SECTOR_SIZE = 64;


	public function read(float $lba, float $size): float
	{
		Debugbar::addMessage("Чтение данных lba {$lba} размером {$size}");

		return self::SECTOR_SIZE + self::BOOT_SECTOR;
	}
}
