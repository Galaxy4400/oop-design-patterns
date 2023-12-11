<?php

namespace App\DesignPaterns\Structural\Facade\FacadeClass;

use App\DesignPaterns\Structural\Facade\SubClasses\CPU;
use App\DesignPaterns\Structural\Facade\SubClasses\HardDriver;
use App\DesignPaterns\Structural\Facade\SubClasses\Memory;
use Barryvdh\Debugbar\Facades\Debugbar;

class Computer
{
	protected CPU $cpu;

	protected Memory $memory;

	protected HardDriver $hardDrive;


	public function __construct(
		?CPU $cpu = null,
		?Memory $memory = null,
		?HardDriver $hardDrive = null,
	) {
		$this->cpu = $cpu ?: new CPU();
		$this->memory = $memory ?: new Memory();
		$this->hardDrive = $hardDrive ?: new HardDriver();
	}


	public function lounch(): void
	{
		$cpu = $this->cpu;
		$memory = $this->memory;
		$hardDrive = $this->hardDrive;

		$cpu->freeze();
		$memory->load(
			$memory::BOOT_ADDRESS,
			$hardDrive->read($hardDrive::BOOT_SECTOR, $hardDrive::SECTOR_SIZE)
		);
		$cpu->jump($memory::BOOT_ADDRESS);
		$cpu->execute();

		Debugbar::addMessage('Компьютер включён');
	}
}
